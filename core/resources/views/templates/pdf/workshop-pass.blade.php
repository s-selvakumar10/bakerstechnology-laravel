<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
        body {
            margin: 0;
            padding: 0;
            page-break-before: avoid;
            page-break-after: avoid;
            font-family:'Arial, Helvetica, sans-serif' ;
        }

        img {
            width: 100%;
            max-width: 100%;
            /* height: 100%; */
            page-break-before: avoid;
            page-break-after: avoid;
        }

        #final-img {
            height: 100%;
        }

        .page {
            margin: 0;
            text-align: center;
        }

        @page {
            margin: 0;
            page-break-before: avoid;
            page-break-after: avoid;
        }

        .main {
            position: absolute;
            right: 0px;
            top: 120px;
            width: 397px;
            height: 345px; 
        }


        .content { 
            text-align: center;
            width: 100%;
        }

        p {
            margin: 0px 0px;
            padding: 0px;
        }

        .name{
            font-size: 20px; 
        }
        .designation{
            font-size: 15px; 
            margin: 5px 0px;
        }
        .company{
            font-size: 15px; 
            margin-top: 5px;
        }
         .reg_id{
            margin:0px 0px !important;
        }
        .days{
            font-size:14px;
            font-weight: 600;
        }
    </style>

</head>

<body>
    <div class="page">
        <div class="main">
            <table class="content">
                <tr>
                    <td style="height: 100%;width:100%;">
                        <div class="content">
                            <p class="name"> {{ strtoupper($fullname ?? '' ) }}</p>

                            <p class="designation"> {{ strtoupper($designation ?? '' ) }}</p>

                            <p class="company"> {{ strtoupper($company ?? '' ) }}</p>

                            <div>
                                <img src="{{ $qr ?? '' }}" style="width:155px;   " />
                            </div>
                             <?php if(isset($registration_id) && $registration_id != ''){ ?>
                                  <h5 class="reg_id">ID : {{ $registration_id  ?? '' }} </h5> 
                             <?php }  ?>
                             <p class="days"> Days : {{ implode(', ', $days ?? [] ) }}</p>
                        </div>
                    </td>
                </tr>
            </table>



        </div>
        <img id="final-img" src="{{ $pdf_template_img ?? '' }}" />
        <!--<img id="final-img" src="data:image/png;base64,{{ $pdf_template_img }}">-->
    </div>

</body>

</html>