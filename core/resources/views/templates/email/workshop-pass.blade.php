<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Verdana;
        }

        .text-center {
            text-align: center;
        }

        .text-bold {
            font-weight: bold;
        }

       
      

        a {
            color: blue;
        }

        .text-red {
            color: red;
        }

        @media (max-width: 600px) {
            td {
                display: block;
                width: 100%;
                box-sizing: border-box;
            }
        }
    </style>
</head>

<body>
    <div style="margin:0;padding:20px">

        <div>
            <img src="https://bakerstechnologyfair.com/assets/img/email/email-header.jpg?v=<?= uniqid()?>" style="width:100%; height:100%">
        </div>
        
        <p>Dear  <?= $fullname ?>, </p>

        <p>Thank you for registering for the Bakery & Café Mastery Workshop 2025! We are excited to welcome you to this
            premier workshop.</p>

        <p>Your Unique QR Code </p>
        <p>Below is your personalized QR code, linked to your unique ID: <b><?= $registration_id ?></b>. This code is required for
            workshop entry and access to the concurrent expos.</p>
        <div>
                @php
                $cid = str()->random(10);
                $mimeType = explode('/', mime_content_type($qr_image));
                $extension = $mimeType[1];
                $imageData = explode(',', $qr_image);
                $imageParts = base64_decode($imageData[1]);
                $name = $cid . '.'. $extension;
                $dataPart = (new \Symfony\Component\Mime\Part\DataPart($imageParts, $name))->asInline();
                $message->addPart($dataPart);
                @endphp
               
                <img src="cid:{{ $dataPart->getContentId() }} " style="width:155px; margin-left: -8px;" alt="Qr Code"/>
        </div>
        <br>
        <p><b>Entry Details</b></p>
        <p><b>Event:</b> Bakery & Cafe Mastery Workshop 2025 </p>
        <p><b>Venue:</b> Tripura Vasini, Palace Grounds, Bengaluru </p>
        <p><b>Date:</b> 28th to 30th January 2025 </p>
        <br>
        <p><b>Your Badge Grants Access to:</b> </p>
        <p>- Bakers Technology Fair </p>
        <p>- Food & Drink Processing Expo</p>
        <p>- India Food Pack Expo</p>
        <p>- India Dairy Processing Expo</p>
        <p>- Food Confluence 2025</p>
        <br>
        <p><b>What You Need to Do:</b> </p>
        <p>1. Save this email and print the badge.</p>
        <p>2. Present your QR code at the entry point for a seamless check-in experience. </p>
        <br>
        <p>If you have any questions or require assistance, feel free to contact us: </p>
        <p>&#128231; Email: <b>contact@synergyexposures.com</b> </p>
        <p>&#128222; Phone: <b>+91-9551665441</b> </p>
        <br>
        <p>We look forward to seeing you at the event and ensuring a productive experience! </p>
        <br>
        <p>Warm regards, </p>
        <p>Team Synergy & Team Whitecaps</p>
    </div>
</body>

</html>
