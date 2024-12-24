<?php

// Define email constants in arrays
$emailConfig = [
    'ADMIN' => [
        'TO_EMAIL' => 'btf@synergyexposures.com',
        'TO_EMAIL_CC' => ''
    ],

    'VISITOR_REG' => [
         'TO_EMAIL' => 'btf@synergyexposures.com',
        'TO_EMAIL_CC' => '',
        'MAIL_NAME' => 'Bakers Technology',
        'MAIL_SUBJECT' => 'Visitor Registration',
        'MAIL_NAME_FOR_ADMIN' => 'Bakers Technology',
        'MAIL_SUBJECT_FOR_ADMIN' => 'Visitor Registration'
    ],

    'EXHIBITOR_REG' => [
         'TO_EMAIL' => 'info@bakerstechnologyfair.com',
        'TO_EMAIL_CC' => '',
        'MAIL_NAME' => 'Bakers Technology',
        'MAIL_SUBJECT' => 'Exhibitor Registration',
        'MAIL_NAME_FOR_ADMIN' => 'Bakers Technology',
        'MAIL_SUBJECT_FOR_ADMIN' => 'A New Enquiry from Bakers Technology Exhibitor Registration Page'
    ],

    'BROCHURE' => [
        'TO_EMAIL' => 'info@bakerstechnologyfair.com',
        'TO_EMAIL_CC' => '',
        'MAIL_NAME' => 'Bakers Technology',
        'MAIL_SUBJECT' => 'BTF Brochure Download'
    ],

    'FOOD_CONFL_BROCHURE' => [
         'TO_EMAIL' => 'info@bakerstechnologyfair.com',
         'TO_EMAIL_CC' => '',
        'MAIL_NAME' => 'Bakers Technology',
        'MAIL_SUBJECT' => 'BTF Food Confluence Brochure Download'
    ],

    'POST_SHOW_REPORT' => [
         'TO_EMAIL' => 'info@bakerstechnologyfair.com',
         'TO_EMAIL_CC' => '',
        'MAIL_NAME' => 'Bakers Technology',
        'MAIL_SUBJECT' => 'BTF Post Show Report'
    ],

    'CONTACT' => [
         'TO_EMAIL' => 'info@bakerstechnologyfair.com',
         'TO_EMAIL_CC' => '',
        'MAIL_NAME' => 'Bakers Technology',
        'MAIL_SUBJECT' => 'Bakers Technology'
    ],

    'BUSINESS_MATCHMAKING' => [
         'TO_EMAIL' => 'info@bakerstechnologyfair.com',
         'TO_EMAIL_CC' => '',
        'MAIL_NAME' => 'Bakers Technology',
        'MAIL_SUBJECT' => 'Bakers Technology Business Matchmaking',
        'MAIL_NAME_FOR_ADMIN' => 'Bakers Technology',
        'MAIL_SUBJECT_FOR_ADMIN' => 'Bakers Technology Business Matchmaking'
    ],
    
        'WORKSHOP_REG' => [
         'TO_EMAIL' => 'info@bakerstechnologyfair.com',
         'TO_EMAIL_CC' => '',
        'MAIL_NAME' => 'Bakers Technology',
        'MAIL_SUBJECT' => 'Bakery & Café Mastery Workshop Registration 2025',
        'MAIL_NAME_FOR_ADMIN' => 'Bakers Technology',
        'MAIL_SUBJECT_FOR_ADMIN' => 'Bakery & Café Mastery Workshop Registration 2025',
        'LIMIT' => 100
    ],
    
       'WORKSHOP_BROCHURE' => [
         'TO_EMAIL' => 'info@bakerstechnologyfair.com',
         'TO_EMAIL_CC' => '',
        'MAIL_NAME' => 'Bakers Technology',
        'MAIL_SUBJECT' => 'Bakery & Cafe Mastery Workshop Brochure Download'
    ]
];

// Define constants using array values
foreach ($emailConfig as $category => $config) {
    foreach ($config as $key => $value) {
        $constantName = strtoupper($category . '_' . $key);
        if (!defined($constantName)) {
            define($constantName, $value);
        }
    }
}
 