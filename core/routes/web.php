<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ExhibitorController;
use App\Http\Controllers\BusinessMatchmakingController;
use App\Http\Controllers\CertifiedWorkshopController;

use App\Http\Controllers\AttendeesCoimbatoreController;
use App\Http\Controllers\AttendeesHyderabadController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/blade', function () {
//     $files = scandir(base_path('/resources/views/pages'));
//     $files = array_filter($files,function($v){
//         return $v != '.' && $v != '..';
//     });
       
//     foreach ($files as $file) {
    
//         $newName = str_replace('.php', '.blade.php', $file);

//         rename(base_path('/resources/views/pages').'/'.$file, base_path('/resources/views/pages').'/'.$newName);
//     }
    
//     echo "Renaming complete!";
    
// });

 
 

Route::get('/', [HomeController::class,'index']);
Route::get('index', [HomeController::class,'index']);
Route::get('about', [HomeController::class,'about']);
Route::get('why-exhibit', [HomeController::class,'whyExhibit']);
Route::get('exhibitor-profile', [HomeController::class,'exhibitorProfile']);
Route::get('exhibitor-registration', [HomeController::class,'exhibitorRegistration']);
Route::get('why-visit', [HomeController::class,'whyVisit']);
Route::get('visitor-profile', [HomeController::class,'visitorProfile']);
Route::get('visitor-registration', [HomeController::class,'visitorRegistration']);
Route::get('business-matchmaking', [HomeController::class,'businessMatchmaking']);
Route::get('services-bengaluru', [HomeController::class,'servicesBengaluru']);
Route::get('services-coimbatore', [HomeController::class,'servicesCoimbatore']);
Route::get('travel-bengaluru', [HomeController::class,'travelBengaluru']);
Route::get('travel-coimbatore', [HomeController::class,'travelCoimbatore']);
Route::get('media-partner', [HomeController::class,'mediaPartner']);
Route::get('food-technology', [HomeController::class,'foodTechnology']);
Route::get('dairy-technology', [HomeController::class,'dairyTechnology']);
Route::get('food-business', [HomeController::class,'foodBusiness']);
Route::get('food-manufacturing', [HomeController::class,'foodManufacturing']);
Route::get('food-packaging-technology', [HomeController::class,'foodPackagingTechnology']);
Route::get('visitor-guide', [HomeController::class,'visitorGuide']);
Route::get('contact', [HomeController::class,'contact']);
Route::get('organizer-profile', [HomeController::class,'organizerProfile']);
Route::get('exhibitors-list', [HomeController::class,'exhibitorsList']);
Route::get('facts-figures', [HomeController::class,'factsFigures']);
Route::get('india-food-pack-expo', [HomeController::class,'indiaFoodPackExpo']);
Route::get('dairy-technology-expo', [HomeController::class,'indiaDairyProcessingExpo']);
Route::get('privacy-policy', [HomeController::class,'privacyPolicy']);
Route::get('thank-you', [HomeController::class,'thankYou'])->name('thank-you');

Route::get('brochure-thank-you', [HomeController::class,'brochureThankYou'])->name('brochure-thank-you');
Route::get('post-show-report-thank-you', [HomeController::class,'postShowReportThankYou'])->name('post-show-report-thank-you');
Route::get('food-confluence-brochure-thank-you', [HomeController::class,'foodConfluenceBrochureThankYou'])->name('food-confluence-brochure-thank-you');


Route::post('brochure', [DocumentController::class,'brochure'])->name('brochure');
Route::post('post-show', [DocumentController::class,'postShowReport'])->name('post-show-report');
Route::post('food-confluence-brochure', [DocumentController::class,'foodConfluenceBrochure'])->name('food-confluence-brochure');


Route::post('contact-form', [ContactController::class,'contactForm'])->name('contact-form');



Route::post('exhibitor-registration', [ExhibitorController::class,'store'])->name('exhibitor-registration');
Route::post('visitor-registration', [VisitorController::class,'store'])->name('visitor-registration');
Route::get('{visitor}/visitor-thank-you', [VisitorController::class,'thankYouPage'])->name('visitor-thank-you');
Route::get('{id}/download', [VisitorController::class,'downloadPDF'])->name('visitor-pass-download');
Route::get('{id}/view-download', [VisitorController::class,'viewPDF']);
Route::get('{id}/get-visitor-pdf', [VisitorController::class,'getPDF']);

Route::get('business-matchmaking', [BusinessMatchmakingController::class,'create'])->name('business-matchmaking');
Route::post('business-matchmaking', [BusinessMatchmakingController::class,'store'])->name('business-matchmaking');
Route::get('business-matchmaking-thank-you', [BusinessMatchmakingController::class,'thankYou'])->name('business-matchmaking-thank-you');


Route::get('{id}/attendees-coimbatore-download', [AttendeesCoimbatoreController::class,'downloadPDF']);
Route::get('{id}/attendees-hyderabad-download', [AttendeesHyderabadController::class,'downloadPDF']);

Route::get('state/{country}', [HomeController::class,'stateByCountry'])->name('get-state');

Route::get('workshop-registration', [HomeController::class,'certifiedWorkshop'])->name('certified-workshop');
Route::post('certified-workshop/store', [CertifiedWorkshopController::class,'store'])->name('certified-workshop.store');
Route::get('workshop-registration-thank-you', [CertifiedWorkshopController::class,'thankYou'])->name('certified-workshop-thank-you');
Route::get('{id}/view-workshop-pdf', [CertifiedWorkshopController::class,'viewPDF']);
Route::get('{id}/send-mail-from-admin', [CertifiedWorkshopController::class,'sendMailFromAdmin']);
Route::get('workshop-brochure-thank-you', [HomeController::class,'certifiedWorkshopBrochureThankYou'])->name('workshop-brochure-thank-you');
Route::post('workshop-brochure', [DocumentController::class,'workshopBrochure'])->name('workshop-brochure');





Route::get('wa', function (\App\Services\WhatsApp\WatiService $wati) {
   dd(
          $wati->sendTemplateMessages(
                                       $to = '7200638738',
                                       $template_name = 'btf_visitor_registration_v2',
                                       $params = [
                                                  [
                                                     "name" => "pdf",
                                                     "value" => "https://bakerstechnologyfair.com/1801/get-visitor-pdf"
                                                  ],
                                                   [
                                                     "name" => "name",
                                                     "value" => "Rajesh kumar"
                                                  ]
                                                ]
                                 )
   );
});

 

