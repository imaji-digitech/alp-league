<!DOCTYPE html>
<html lang="en" style="margin: 0;padding: 0">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{public_path('vendor/bootstrap.min.css')}}">
    <title></title>
    <style>
        header {
            position: fixed;
            left: 0;
            top: 0;
            right: 0;
            height: 150px;
            z-index: -1;
            text-align: center;
        }

        #footer .page:after {
            content: counter(page, upper-roman);
        }

        .peserta table, .peserta th, .peserta td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th {
            text-align: center;
        }

    </style>
</head>
<body style="padding: 120px 10px 30px 10px;margin: 0;">
<header style="width: 100%" id="header">
    <img style="width: 100%" src="{{ public_path('asset-pdf/certificate.png') }}" alt="">
</header>


@foreach($certificate->certificateDetails as $index=>$c)
    @if($index!=0)
        <div style="page-break-after: always"></div>
    @endif
    <main style="font-family: 'Times New Roman'; text-align: center">

        <div style="margin-top: 110px">
            <h3>NO. SERTIFIKAT : {{$c->number}}</h3>
        </div>
        <div style="margin-top: 85px">
            <h1 style="font-size: 3.5em; text-transform: uppercase">
                {{ $c->student->name }}
            </h1>

        </div>
        <div style="margin-top: 15px; text-transform: uppercase ">
            <h5>Sebagai {{ $certificate->title }} {{ $certificate->sport_id? $certificate->sport->title:'' }} dalam ALP LEAGUE KABUPATEN 2022</h5>
        </div>
    </main>
{{--    @break--}}

@endforeach
{{--@if($i!=9)?--}}

{{--@endif--}}

</body>
</html>
{{--13.405.A/XII/2022--}}
