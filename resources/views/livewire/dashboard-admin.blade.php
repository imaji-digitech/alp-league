@php use Illuminate\Support\Facades\DB; @endphp
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h2>Telah menyelsaikan pendaftaran sekolah</h2>
            </div>
            <div class="card-body">
                <br>
                <table class="table">
                    <thead>
                    <td><b>Sekolah</b></td>
                    <td><b>Cabang olahraga yang telah diikuti</b></td>
                    <td><b>Unduh daftar hadir</b></td>
                    <td><b>Jumlah siswa mengikuti</b></td>
                    </thead>
                    @foreach($generalData['clear'] as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            @php
                                $query="SELECT sports.title, count(*) as jumlah FROM `students` JOIN sports ON sport_id=sports.id WHERE school_id = $data->id GROUP BY sports.title;";
                                $d= DB::select(DB::raw($query))
                            @endphp
                            <td>
                                @foreach($d as $dd)
                                    {{ $dd->title }} ({{$dd->jumlah}})<br>
                                @endforeach
                            </td>
                            <td>
{{--                                @foreach($d as $dd)--}}
{{--                                    <i class="fa fa-download"></i>{{ $dd->title }} <br>--}}
{{--                                @endforeach--}}
                            </td>
                            <td>{{ $data->students->count() }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <b>Telah melakukan upload surat pernyataan dan pendaftaran</b>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <td><b>Nama Sekolah Sekolah</b></td>
                    <td><b>Unduh surat pernyataan</b></td>
                    </thead>
                    @foreach($generalData['spp'] as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>
                                <a href="{{ route('download.surat-pernyataan-dan-pendaftaran',$data->id) }}"
                                   target="_blank">
                                    <i class="fa fa-download"></i> Unduh
                                </a>
                                <a href="{{ route('show.surat-pernyataan-dan-pendaftaran',$data->id) }}"
                                   target="_blank">
                                    <i class="fa fa-eye"></i> Lihat
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header">
                <b>Telah melakukan upload surat perwalian</b>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                    <td><b>Nama Sekolah Sekolah</b></td>
                    <td><b>Unduh surat pernyataan</b></td>
                    </thead>
                    @foreach($generalData['sp'] as $data)
                        <tr>
                            <td>{{ $data->name }}</td>
                            <td>
                                <a href="{{ route('download.surat-perwalian',$data->id) }}"
                                   target="_blank">
                                    <i class="fa fa-download"></i> Unduh
                                </a>
                                <a href="{{ route('show.surat-perwalian',$data->upload2) }}"
                                   target="_blank">
                                    <i class="fa fa-eye"></i> Lihat
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
