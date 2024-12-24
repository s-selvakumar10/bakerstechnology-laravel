<?php

namespace App\Services;

use PDF;

class PdfService
{
    /**
     * Generate a QR code as a data URI.
     *
     * @param string $text
     * @param int $size
     * @param int $margin
     * @return string
     */
    public function generateMailPDF($template_html,$data)
    {
     
        $pdf = PDF::loadView($template_html,$data);
       
        return $pdf->output();

    //     $options = new Options();
    //     $options->set('isHtml5ParserEnabled', true);

    //     $dompdf = new Dompdf($options);
    //     $dompdf->setPaper('A4');


    //     $fontDir =  $_SERVER['HOME'].'/public_html/fonts';
    //     $dompdf->getOptions()->setFontDir($fontDir);
    //     $dompdf->getOptions()->setIsFontSubsettingEnabled(true);

    //     ob_start();
    //     require($template_html);
    //     $html = ob_get_contents();
    //     ob_get_clean();
    //     // echo $html;exit; 
    //     $dompdf->loadHtml($html);
    //     $dompdf->render();

    //    $pdf_raw = $this->pdf_raw ?? 0 ;
    //    $file_name = $this->file_name ?? 'download';
    //    if( $pdf_raw == 1){
    //         $dompdf->stream($file_name, array("Attachment" => 0));
    //         exit;
    //    }
        

    //     $download_pdf = $dompdf->output(); 

    //     return  $download_pdf;
         
    }

    public function downloadPDF($template_html,$data)
    {
     
        $pdf = PDF::loadView($template_html,$data);
       
        return $pdf->stream('bakerstechnologyfair.pdf');
    }
    
     public function getPDF($template_html,$data)
    {
     
        $pdf = PDF::loadView($template_html,$data);
       
        return $pdf->download('bakerstechnologyfair.pdf');
    }
    
}
