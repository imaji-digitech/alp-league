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
    <img style="width: 100%" src="{{ public_path('alp-league/kop-surat-imaji-socioprenuer.png') }}" alt="">
</header>

<main style="padding: 35px 10px;font-family: 'Times New Roman'">
    @php
        $student1 = \App\Models\Student::whereSportId($match->sport_id)->whereSchoolId($match->school1_id)->get();
        $student2 = \App\Models\Student::whereSportId($match->sport_id)->whereSchoolId($match->school2_id)->get();
    @endphp
    <br>
    <h4 style="text-align: center">
        Pertandingan {{ $match->sport->title }}
    </h4>
    <table style="width: 100%">
        <tr>
            <td style="width: 47.5%; text-align: center;padding-right: 10px">
                <h6>{{ $match->school1->name }}</h6>
            </td>
            <td style="width: 5%; text-align: center"><h4>VS</h4></td>
            <td style="width: 47.5%; text-align: center;">
                <h6>{{ $match->school2->name }}</h6>
            </td>
        </tr>
        <tr>
            <td style="text-align: right">
                <table style="width: 100%">
                    <tr>
                        <td style="width: 90%;text-align: right;align-content: end">
                            <div style="width: 99.3%;height: 50px; border: 1px solid black"></div>
                        </td>
                        <td>
                            <div style="width: 50px;height: 50px; border: 1px solid black"></div>
                        </td>
                    </tr>
                </table>
            </td>
            <td></td>
            <td>
                <table style="width: 100%">
                    <tr>
                        <td>
                            <div style="width: 50px;height: 50px; border: 1px solid black"></div>
                        </td>
                        <td style="width: 90%">
                            <div style="width: 99%;height: 50px; border: 1px solid black"></div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td>
                <table class="peserta" style="width: 100%">

                    <tr>
                        <th style="background: yellow; width: 50px">
                            No.
                        </th>
                        <th style="background: yellow">
                            Nama
                        </th>
                    </tr>

                    @for($i=1;$i<=10;$i++)
                        <tr>
                            <td style="text-align: center;font-size: 13px">{{ $i }}</td>
                            <td style="padding-left: 10px;text-transform: uppercase;font-size: 13px">@isset($student1[$i-1]) {{ $student1[$i-1]->name }} @endisset</td>
                        </tr>
                    @endfor

                </table>
            </td>
            <td></td>
            <td>
                <table class="peserta" style="width: 100%">

                    <tr>
                        <th style="background: yellow">
                            Nama
                        </th>
                        <th style="background: yellow; width: 50px">
                            No.
                        </th>
                    </tr>
                    @for($i=1;$i<=10;$i++)
                        <tr>
                            <td style="text-align:right;padding-right: 10px;text-transform: uppercase;font-size: 13px">@isset($student2[$i-1]) {{ $student2[$i-1]->name }} @endisset</td>
                            <td style="text-align: center;font-size: 13px">{{ $i }}</td>
                        </tr>
                    @endfor
                </table>
            </td>
        </tr>
        <tr>
            <td><br></td>
        </tr>
        <tr>
            <td style="border: 1px solid black; vertical-align: top;padding: 3px 5px">Catatan :</td>
            <td><br><br><br><br><br></td>
            <td style="border: 1px solid black; vertical-align: top;padding: 3px 5px">Catatan :</td>

        </tr>
    </table>
    <br>
    <table style="width: 100%;text-align: center">
        <tr>
            <td style="width: 35%"></td>
            <td style="width: 30%"></td>
            @php
                setlocale(LC_ALL, 'IND');
            @endphp
            <td style="width: 35%">Jember, {{ \Carbon\Carbon::parse($match->date_match)->isoFormat('D MMMM Y') }}</td>
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
            <td style="width: 30%"></td>
            <td style="width: 35%"></td>
            <td style="width: 35%">
                {{ $match->supervisor }}
                <br>
                (Pengawas Pertandingan)
            </td>
        </tr>
    </table>
</main>

<div style="page-break-after: always"></div>
@for($z=1;$z<=2;$z++)
    <main style="padding: 35px 70px;font-family: 'Times New Roman'">
        <br>
        <h4 style="text-align: center">Daftar Hadir Peserta ALP League Kabupaten 2022</h4>
        <br>
        <table>
            <tr>
                <td>Tempat Pelaksanaan</td>
                <td style="padding: 0 10px">:</td>
                <td></td>
            </tr>
            <tr>
                <td>Pengawas Pertandingan</td>
                <td style="padding: 0 10px">:</td>
                <td>{{ $match->supervisor }}</td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td style="padding: 0 10px">:</td>
                <td>{{ \Carbon\Carbon::parse($match->date_match)->isoFormat('dddd, D MMMM Y') }}</td>
            </tr>
            <tr>
                <td>Sekolah</td>
                <td style="padding: 0 10px">:</td>
                <td>{{ $match->{'school'.$z}->name }}</td>
            </tr>
            <tr>
                <td>Cabang Olahraga</td>
                <td style="padding: 0 10px">:</td>
                <td>{{ $match->sport->title }}</td>
            </tr>
        </table>
        <br>

        {{--    <div style="width: 100%; background: #0a6aa1" >--}}
        <table class="peserta" style="width: 100%">

            <tr>
                <th style="background: yellow; width: 50px">
                    No.
                </th>
                <th style="background: yellow">
                    Nama
                </th>
                <th style="background: yellow; width:200px">
                    NISN/Official
                </th>
            </tr>
            <tr>
                <td style="font-size: 13px;text-align: center">1</td>
                <td></td>
                <td style="font-size: 13px;text-align: center">Official</td>
            </tr>
            @for($i=2;$i<=11;$i++)
                <tr>
                    <td style="font-size: 13px;text-align: center">{{ $i }}</td>
                    <td style="font-size: 13px; text-transform: uppercase; padding-left: 10px">@isset(${'student'.$z}[$i-2]) {{ ${'student'.$z}[$i-2]->name }} @endisset</td>
                    <td style="font-size: 13px;text-align: center">@isset(${'student'.$z}[$i-2]) {{ ${'student'.$z}[$i-2]->nisn }} @endisset</td>
                </tr>
            @endfor

        </table>
        <br><br>
        <table style="width: 100%;text-align: center">
            <tr>
                <td style="width: 35%"></td>
                <td style="width: 30%"></td>
                <td style="width: 35%">Jember, {{ \Carbon\Carbon::parse($match->date_match)->isoFormat('D MMMM Y') }}</td>
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
                <td style="width: 35%">(.........................................................) <br>(Official/Kapten tim)</td>
                <td style="width: 30%"></td>
                <td style="width: 35%">
                    {{ $match->supervisor }}
                    <br>
                    (Pengawas Pertandingan)</td>
            </tr>
        </table>


    </main>
    @if($z==1)
        <div style="page-break-after: always"></div>
    @endif
@endfor

{{--    <div style="text-align: center">--}}
{{--        <h6 style="padding: 0;margin: 0"><u>BUKTI {{ $poc->inout==1?'PENGELUARAN':'PENERIMAAN' }} KAS</u></h6>--}}
{{--        <p style="padding: 0;margin: 0">{{ $poc->code }}</p>--}}
{{--    </div>--}}
{{--    <table bordercolor="#000000" style="margin-top:10px;width: 100%; font-size: 15px; border: .5px solid">--}}
{{--        <tr style="text-align: center">--}}
{{--            <th style="border: .5px solid;padding-top:0;padding-bottom: 0px; width: 100px">--}}
{{--                HARI/ TANGGAL--}}
{{--            </th>--}}
{{--            <th style="border: .5px solid;padding-top:0;padding-bottom: 0px; width: 120px">--}}
{{--                {{ $poc->inout==1?'DIKELUARKAN KEPADA':'DITERIMA DARI' }}--}}
{{--            </th>--}}
{{--            <th style="border: .5px solid;padding-top:0;padding-bottom: 0px;width: 105px">--}}
{{--                STATUS DANA--}}
{{--            </th>--}}
{{--            <th style="border: .5px solid;padding-top:0;padding-bottom: 0px;width: 150px">--}}
{{--                PERIHAL DANA--}}
{{--            </th>--}}
{{--            <th style="border: .5px solid;padding-top:0;padding-bottom: 0px">--}}
{{--                NOMINAL--}}
{{--            </th>--}}
{{--            <th style="border: .5px solid;padding-top:0;padding-bottom: 0px">--}}
{{--                CATATAN--}}
{{--            </th>--}}
{{--        </tr>--}}
{{--        <tr style="font-size: 14px">--}}
{{--            <td style="border: .5px solid;padding:7px 10px 12px 10px">--}}
{{--                {{ $poc->created_at->isoFormat('dddd,') }}<br>--}}
{{--                {{ $poc->created_at->isoFormat('D MMMM Y') }}--}}
{{--            </td>--}}
{{--            <td style="border: .5px solid;padding:7px 10px 12px 10px">--}}
{{--                {{ ($poc->user_id!=null)?$poc->user->name:$poc->name }}--}}
{{--            </td>--}}
{{--            <td style="border: .5px solid;padding:7px 10px 12px 10px">--}}
{{--                {!! $poc->status !!}--}}
{{--            </td>--}}
{{--            <td style="border: .5px solid;padding:7px 10px 12px 10px">--}}
{{--                {!! $poc->regarding !!}--}}
{{--            </td>--}}
{{--            <td style="border: .5px solid;padding:7px 10px 12px 10px;text-align: right">--}}
{{--                <b>Rp. {{ number_format($poc->money,0,'.','.') }}</b>--}}
{{--            </td>--}}
{{--            <td style="border: .5px solid;padding-top:0;padding-bottom: 0px" rowspan="2">--}}
{{--                {!! $poc->note !!}--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td colspan="4" style="border: .5px solid; text-align: right"><b>JUMLAH</b></td>--}}
{{--            <td style="border: .5px solid;padding:0 10px 10px 10px;text-align: right">--}}
{{--                <b>Rp. {{ number_format($poc->money,0,'.','.') }}</b>--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--    </table>--}}
{{--    <br>--}}
{{--    <table style="width: 100%;font-size: 12px;text-align: center">--}}
{{--        <tr>--}}
{{--            <td style="width: 50%"><b></b></td>--}}
{{--            <td style="width: 50%">Jember, {{ $poc->created_at->isoFormat('D MMMM Y') }}</td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td style="width: 50%">{{ $poc->inout==1?'Penerima':'Penyetor' }} <br></td>--}}
{{--            <td style="width: 50%">Mengetahui <br></td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td style="width: 50%; margin-top: 5px">--}}
{{--                @if($poc->user_id!=null and $poc->user->sign!=null)--}}
{{--                    <img src="{{public_path('storage/'.$poc->user->sign )}}" alt="" style="height: 60px">--}}
{{--                @endif--}}
{{--            </td>--}}
{{--            <td style="width: 50%; margin-top: 5px">--}}
{{--                <br>--}}
{{--                <img src="{{public_path('storage/'.\App\Models\User::find(14)->sign )}}" alt=""--}}
{{--                     style="height: 60px">--}}
{{--            </td>--}}
{{--        </tr>--}}
{{--        <tr>--}}
{{--            <td style="width: 50%">{{ ($poc->user_id!=null)?$poc->user->name:$poc->name }}</td>--}}
{{--            <td style="width: 50%">{{ \App\Models\User::find(14)->name }}</td>--}}
{{--        </tr>--}}
{{--    </table>--}}
{{--</main>--}}
</body>
</html>

