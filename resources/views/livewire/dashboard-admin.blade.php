@php use Illuminate\Support\Facades\DB; @endphp
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="padding: 20px">
                <h5>Telah menyelsaikan pendaftaran sekolah</h5>
            </div>
            <div class="card-body" style="padding: 20px">
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
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="padding: 20px">
                <h5><b>Telah melakukan upload surat </b></h5>
            </div>
            <div class="card-body" style="padding: 20px">
                <table class="table">
                    <thead>
                    <td><b>Nomer</b></td>
                    <td><b>Nama Sekolah Sekolah</b></td>
                    <td><b>Unduh surat pernyataan</b></td>
                    <td><b>Unduh surat Perwalian</b></td>
                    <td><b>Diperbarui pada</b></td>
                    </thead>
                    @foreach($generalData['spp'] as $index=>$data)
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>{{ $data->name }}</td>
                            <td>
                                @if($data->upload1!=null)
                                    <a href="{{ route('download.surat-pernyataan-dan-pendaftaran',$data->id) }}"
                                       target="_blank">
                                        <i class="fa fa-download"></i> Unduh
                                    </a>
                                    <a href="{{ route('show.surat-pernyataan-dan-pendaftaran',$data->id) }}"
                                       target="_blank">
                                        <i class="fa fa-eye"></i> Lihat
                                    </a>
                                @endif

                            </td>
                            <td>
                                @if($data->upload2!=null)
                                <a href="{{ route('download.surat-perwalian',$data->id) }}"
                                   target="_blank">
                                    <i class="fa fa-download"></i> Unduh
                                </a>
                                <a href="{{ route('show.surat-perwalian',$data->id) }}"
                                   target="_blank">
                                    <i class="fa fa-eye"></i> Lihat
                                </a>
                                    @endif
                            </td>
                            <td>{{ $data->updated_at }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
{{--    <div class="col-sm-6">--}}
{{--        <div class="card">--}}
{{--            <div class="card-header" style="padding: 20px">--}}
{{--                <h5><b>Telah melakukan upload surat perwalian</b></h5>--}}
{{--            </div>--}}
{{--            <div class="card-body" style="padding: 20px">--}}
{{--                <table class="table">--}}
{{--                    <thead>--}}
{{--                    <td><b>Nama Sekolah Sekolah</b></td>--}}
{{--                    <td><b>Unduh surat pernyataan</b></td>--}}
{{--                    </thead>--}}
{{--                    @foreach($generalData['sp'] as $data)--}}
{{--                        <tr>--}}
{{--                            <td>{{ $data->name }}</td>--}}
{{--                            <td>--}}
{{--                                <a href="{{ route('download.surat-perwalian',$data->id) }}"--}}
{{--                                   target="_blank">--}}
{{--                                    <i class="fa fa-download"></i> Unduh--}}
{{--                                </a>--}}
{{--                                <a href="{{ route('show.surat-perwalian',$data->id) }}"--}}
{{--                                   target="_blank">--}}
{{--                                    <i class="fa fa-eye"></i> Lihat--}}
{{--                                </a>--}}
{{--                            </td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}
{{--                </table>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
