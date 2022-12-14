@php use Carbon\Carbon; @endphp
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
            height: 200px;
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
<body style="padding: 180px 90px 30px 90px;margin: 0;">
<header style="width: 100%" id="header">
    <img style="width: 100%" src="{{ public_path('alp-league/kop-surat-imaji-socioprenuer.png') }}" alt="">
</header>


<main style="padding:0 10px;font-family: 'Times New Roman'">
    <h4 style="text-align: center">
        Daftar Peserta Lomba Pertandingan {{ $sport->title }} <br>
        ALP LEAGUE KABUPATEN JEMBER 2022
    </h4>
    <br>

    <table class="peserta" style="width: 100%">
        <tr>
            <th style="background: yellow; width: 50px">
                Nomor Dada
            </th>
            <th style="background: yellow">
                Nama
            </th>
            <th style="background: yellow">
                Asal Lembaga
            </th>
            <th style="background: yellow">
                Tanda Tangan
            </th>
        </tr>

        @foreach($sport->students as $index=>$student)
            <tr>
                <td style="text-align: center;font-size: 13px">{{ $index+1 }}</td>
                <td style="padding-left: 10px;font-size: 13px">
                    {{ $student->name }}
                </td>
                <td style="padding-left: 10px;font-size: 13px">
                    {{ $student->school->name }}
                </td>
                <td></td>
            </tr>
        @endforeach
    </table>

    <br>
    <table style="width: 100%;text-align: center">
        <tr>
            <td style="width: 35%"></td>
            <td style="width: 30%"></td>
            @php
                setlocale(LC_ALL, 'IND');
            @endphp
{{--            <td style="width: 35%">Jember, {{ Carbon::parse($match->date_match)->isoFormat('D MMMM Y') }}</td>--}}
        </tr>
        <tr>
            <td style="width: 35%"></td>
            <td style="width: 30%"></td>
            <td style="width: 35%">Mengetahui</td>
        </tr>
        <tr>
            <td style="width: 35%"><br><br><br><br></td>
            <td style="width: 30%"></td>
            <td style="width: 35%"></td>
        </tr>
        <tr>
            <td style="width: 30%">

            </td>
            <td style="width: 35%">
            </td>
            <td style="width: 35%">
                <br>
                (Penaggung Jawab Pertandingan)
            </td>
        </tr>
    </table>
</main>
</body>
</html>

