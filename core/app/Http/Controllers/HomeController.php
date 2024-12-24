<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
Use App\Models\Country;
Use App\Models\State;

class HomeController extends Controller
{
   public function index()
   {
      return view('index');
   }

   public function about()
   {
      $data = [
         'banner_title' => 'About'
      ];
      return view('pages.about', $data);
   }

   public function whyExhibit()
   {
      $data = [
         'banner_title' => 'Exhibit'
      ];
      return view('pages.why-exhibit', $data);
   }


   public function exhibitorProfile()
   {
      $data = [
         'banner_title' => 'Exhibitor Profile'
      ];
      return view('pages.exhibitor-profile', $data);
   }

   public function exhibitorRegistration()
   {
      $data = [
         'banner_title' => 'Exhibitor Enquiry',
         'states' => $this->states(),
         'countries' => $this->countries(),
         'captcha_data' =>Helper::captchaSet('exhibitor'),
      ];
      return view('pages.exhibitor-registration', $data);
   }
   public function whyVisit()
   {
      $data = [
         'banner_title' => 'Visit'
      ];
      return view('pages.why-visit', $data);
   }
   public function visitorProfile()
   {
      $data = [
         'banner_title' => 'Visitor Profile'
      ];
      return view('pages.visitor-profile', $data);
   }
   public function visitorRegistration()
   {
      $data = [
         'banner_title' => 'Visitor Registration',
         'states' => $this->states(),
         'countries' => $this->countries(),
          "captcha_data" =>Helper::captchaSet('visitor'),
      ];
      return view('pages.visitor-registration', $data);
   }
   // public function businessMatchmaking()
   // {
   //    $data = [
   //       'banner_title' => 'Business Matchmaking'
   //    ];
   //    return view('pages.business-matchmaking', $data);
   // }
   public function servicesBengaluru()
   {
      $data = [
         'banner_title' => 'Services'
      ];
      return view('pages.services-bengaluru', $data);
   }
   public function servicesCoimbatore()
   {
      $data = [
         'banner_title' => 'Services'
      ];
      return view('pages.services-coimbatore', $data);
   }
   public function travelCoimbatore()
   {
      $data = [
         'banner_title' => 'Travel Coimbatore'
      ];
      return view('pages.travel-coimbatore', $data);
   }
   public function travelBengaluru()
   {
      $data = [
         'banner_title' => 'Travel Bengaluru'
      ];
      return view('pages.travel-bengaluru', $data);
   }
   public function mediaPartner()
   {
      $data = [
         'banner_title' => 'Media Partner'
      ];
      return view('pages.media-partner', $data);
   }
   public function foodTechnology()
   {
      $data = [
         'banner_title' => 'Exploring Future Trends in Food Technology'
      ];
      return view('pages.food-technology', $data);
   }
   public function dairyTechnology()
   {
      $data = [
         'banner_title' => 'Harnessing Post-Processing Technology: Transforming Dairy Production'
      ];
      return view('pages.dairy-technology', $data);
   }
   public function foodBusiness()
   {
      $data = [
         'banner_title' => 'Unlocking Profitability: Strategies for Success in Food Business Technology'
      ];
      return view('pages.food-business', $data);
   }
   public function foodManufacturing()
   {
      $data = [
         'banner_title' => 'Challenges in Food Manufacturing and Strategies for Success'
      ];
      return view('pages.food-manufacturing', $data);
   }
   public function foodPackagingTechnology()
   {
      $data = [
         'banner_title' => 'Exploring the Role of Technology in Food Packaging'
      ];
      return view('pages.food-packaging-technology', $data);
   }
   public function visitorGuide()
   {
      $data = [
         'banner_title' => 'Visitor Guide'
      ];
      return view('pages.visitor-guide', $data);
   }
   public function contact()
   {
      $data = [
         'banner_title' => 'Contact'
      ];
      return view('pages.contact', $data);
   }
   public function organizerProfile()
   {
      $data = [
         'banner_title' => 'Organiser’s Profile'
      ];
      return view('pages.organizer-profile', $data);
   }
   public function exhibitorsList()
   {
      $data = [
         'banner_title' => 'Exhibitors List',
      ];
      return view('pages.exhibitors-list', $data);
   }
   public function factsFigures()
   {
      $data = [
         'banner_title' => 'Facts and Figures'
      ];
      return view('pages.facts-figures', $data);
   }
   public function indiaFoodPackExpo()
   {
      $data = [
         'banner_title' => 'India Food Pack Expo'
      ];
      return view('pages.india-food-pack-expo', $data);
   }
   public function indiaDairyProcessingExpo()
   {
      $data = [
         'banner_title' => 'India Dairy Processing Expo'
      ];
      return view('pages.dairy-technology-expo', $data);
   }
   public function privacyPolicy()
   {
      $data = [
         'banner_title' => 'Privacy Policy'
      ];
      return view('pages.privacy-policy', $data);
   }    
   public function thankYou()
   {
      $data = [
         'banner_title' => 'Thank You'
      ];
      return view('pages.thank-you', $data);
   }

   public function brochureThankYou()
   {
      $data = [];
      return view('pages.brochure-thank-you', $data);
   }
   
    public function foodConfluenceBrochureThankYou()
   {
      $data = [];
      return view('pages.food-confluence-brochure-thank-you', $data);
   }

   public function postShowReportThankYou()
   {
      $data = [ ];
      return view('pages.post-show-report-thank-you', $data);
   }

   public function certifiedWorkshop()
   {
       
      $data = [
         'banner_title' => 'Register for Certified Workshop on Bakery & Cafe',
        //  'banner_logo' =>  asset('assets/img/whitecaps-logo1.png'),
        'registration_left' => Helper::workshopRegistrationLeft(),
         'states' => $this->states(),
         'countries' => $this->countries(),
         'captcha_data' =>Helper::captchaSet('certified_workshop'),
      ];
      return view('pages.certified-workshop', $data);
   }
   
      public function certifiedWorkshopBrochureThankYou()
   {
      $data = [];
      return view('pages.workshop-brochure-thank-you', $data);
   }
   
   
    public function states()
   {
      return [];
   }

   public function countries()
   {
       
      $country =  Country::get();
      $countries = [];
      
      foreach( $country as $item){
           $countries[$item['name']] = $item['name'];
      }
        
      return $countries; 
   }
   
   public function stateByCountry($country){
     
       $state = Country::with('states')->where('name',$country)->get()->pluck('states')->toArray();
       $states = [];
       foreach( array_merge(...$state) as $item){
           $states[$item['name']] = $item['name'];
       }
       return $states;
   }
}
