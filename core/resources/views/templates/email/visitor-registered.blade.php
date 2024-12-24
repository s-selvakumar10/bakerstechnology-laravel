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

        .border-green {
            border: 1px solid green;
        }

        .reg-sum {
            background-color: #f5c278;
        }

        .think-rem {
            background-color: #e5da6c;
        }

        .reg-sum p,
        .think-rem p {
            margin: 8px !important;
        }

        a {
            color: blue !important;
        }

        .text-red {
            color: red !important;
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
  
    <table>
        <tr>
            <td colspan="2">
                <img src="https://bakerstechnologyfair.com/assets/img/email/email-header.jpg?v=<?= uniqid()?>" style="width:100%; height:100%">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <p> Dear <?= $fullname ?>, </p>

                <p>
                    We are thrilled to inform you that your Visitor badge for the Bakers Technology Fair 2025 is ready for download!
                </p>

                <p>
                    In our commitment to sustainability and minimizing waste, we have opted not to print badges onsite at the event. We kindly request you to download the attachment and print your badge on an A4 sheet in colour. Ensure to carry the printed badge with you to the event for seamless entry.
                </p>

                <p>
                   Your 3 Day Pass grants you full access to all our Co-located events at the venue, including Bakers Technology Fair, India Dairy Processing Expo, India Food Pack Expo, and Food Confluence. This pass covers all show features such as conferences & workshops.
                </p>

                <p>
                    We are excited to welcome you to this exceptional gathering and hope you have a fruitful and enjoyable experience at the Bakers Technology Fair 2025.
                </p>

                <p>
                    <b class="text-red">Crucial Notice:</b> Each badge is exclusive to one attendee and is not transferable. The badge holder must provide a valid identification upon request to gain access to the event.
                </p>

                <p>
                    Should you wish to schedule meetings with our exhibitors, we are delighted to assist you. Please utilize the Business Matchmaking option on our website: https://bakerstechnologyfair.com/register.php
                </p>

                <p>
                    Best Wishes,
                </p>

                <p>
                    Team - Synergy Exposures & Events India Pvt. Ltd.
                </p> 
            </td>
        </tr>
        <tr>
            <td colspan="2" class="reg-sum border-green">
                <p class="text-center text-bold">Your Registration Summary</p>
            </td>
        </tr>
        <tr>
            <td>
                <p> Visitor Full Name: <?= $fullname ?></p>
            </td>
            <td>
                <p>Company Name: <?= $company ?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Registration ID: <?= $registration_id ?></p>
            </td>
            <td>
                <p style="margin-bottom: 0px;">
                    QR Code (Contact embedded)
                </p>
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
                
            </td>
        </tr>
        <tr>
            <td colspan="2" class="think-rem border-green">
                <p class="text-center text-bold">Things to Be Remembered</p>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <ul>
                    <li> Print your badge. </li>
                    <li> Arrange your meetings using our Business Matchmaking Form; click on this link https://bakerstechnologyfair.com/register.php</li>
                    <li> Secure your travel tickets. | Book your accommodation.</li>
                    <li> Collect your lanyard at the venue, enabling you to walk hassle-free without waiting in line at the expo.</li>
                    <li> Business Hours: 28-29 Jan 2025 - 1100-2000 Hrs | 30 Jan 2025 - 1100 - 1800 Hrs </li>
                </ul>
            </td>
        </tr>
    </table>
</body>

</html>