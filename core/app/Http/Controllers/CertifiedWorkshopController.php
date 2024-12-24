<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;
use App\Http\Requests\CertifiedWorkshopRequest;
use App\Models\CertifiedWorkshop;
use App\Mail\WorkshopRegistrationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Services\QrCodeService;
use App\Services\PdfService;
use App\Mail\WorkshopPassFromAdmin;

class CertifiedWorkshopController extends Controller
{
    public function store(CertifiedWorkshopRequest $request)
    {
        if ($request->file('attachment')) {
            $folder_path = 'core/public/certified-workshop/attachment';
            $attachment = Helper::uploadFile($folder_path, $request->file('attachment'));
        }

        $data = $request->only([
            "name",
            "designation",
            "company_name",
            "address",
            "city",
            "state",
            "country",
            "zip_code",
            "mobile",
            "whatsapp_number",
            "email",
            "website",
            "industry",
            "utr_number"
        ]);
        if ($request->input('days')[0] === 'all-days' || count($request->input('days')) === 3) {
            $data['all_days'] = '1';
            $data['days'] = [1, 2, 3];
        } else {
            $data['all_days'] = '0';
            $data['days'] = $request->days ?? [];
        }

        // if (isset($request->all_day)) {
        //     $data['all_days'] = '1';
        //     $data['days'] = [];
        // } else {
        //     $data['all_days'] = '0';
        //     $data['days'] = $request->days ?? [];
        // }
        if (isset($attachment)) {
            $data["attachment"] = $attachment;
        }

        $certified_workshop = CertifiedWorkshop::create($data);

        $email_data = $certified_workshop->only([
            "name",
            "designation",
            "company_name",
            "address",
            "city",
            "state",
            "country",
            "zip_code",
            "mobile",
            "whatsapp_number",
            "email",
            "website",
            "industry",
            "utr_number",
            "attachment"
        ]);

        Helper::captchaRemove('certified_workshop');


        Mail::to(WORKSHOP_REG_TO_EMAIL, WORKSHOP_REG_MAIL_NAME_FOR_ADMIN)->cc(WORKSHOP_REG_TO_EMAIL_CC)->send(new WorkshopRegistrationMail($email_data));

        return response()->json([
            'status'       => true,
            'msg'          => 'Sucess',
            'reg_id'       => Helper::generateWorkshopRegistrationId($certified_workshop->id),
            'redirect_url' => route('certified-workshop-thank-you')
        ]);
    }

    public function thankYou()
    {
        return view('pages.workshop-registration-thank-you');
    }

    public function viewPDF($id)
    {
        $data = CertifiedWorkshop::findOrFail($id);
        $data['organization'] = $data['company_name'];
        $QrCodeService = new QrCodeService;
        $qr_image = $QrCodeService->generateVCardQrCode($data);
        $registration_id = Helper::generateWorkshopRegistrationId($data['id']);

        $pdf_data = $data->toArray();
        $pdf_data['fullname'] = $data['name'];;
        $pdf_data['designation'] = $data['designation'];
        $pdf_data['all_days'] = $data['all_days'];
        $pdf_data['days'] = $data['days'];
        $pdf_data['company'] = $data['company_name'];
        $pdf_data['registration_id'] = $registration_id;
        $pdf_data['qr'] = $qr_image;
        $pdf_data['pdf_template_img'] = public_path('/assets/img/pdf/workshop-pass.jpg');
        $template_html = 'templates.pdf.workshop-pass';


        $pdfService = new PdfService;
        return $pdfService->downloadPDF($template_html, $pdf_data);
    }



    public function sendMailFromAdmin($id)
    {
        $data = CertifiedWorkshop::findOrFail($id);

        try {
            $data['organization'] = $data['company_name'];
            Mail::to($data['email'], $data['name'])->send(new WorkshopPassFromAdmin($data));
            unset($data['organization']);
            $data->update(['is_pass_sent' => '1']);
            return json_encode([
                'status' => true
            ]);
        } catch (\Execption $e) {
            return json_encode([
                'status' => false
            ]);
        }
    }
}
