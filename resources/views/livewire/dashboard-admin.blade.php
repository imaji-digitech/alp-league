@php use App\Models\School;use App\Models\Sport;use Illuminate\Support\Facades\DB; @endphp
<div class="row">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header" style="padding: 20px">
                <h5>Daftar hadir Lomba</h5>
            </div>
            <div class="card-body" style="padding: 20px">
                <table class="table">
                    <thead>
                    <td><b>Nama Olahraga</b></td>
                    <td><b>Jumlah Siswa Mengikuti</b></td>
                    <td><b>Aksi</b></td>
                    </thead>
                    <tbpdy>
                        @foreach(Sport::get() as $sport)
                            <tr>
                                <td><b>{{ $sport->title }}</b></td>
                                <td><b>{{ $sport->students->count() }}</b></td>
                                <td><b><a href="{{ route('sport.presence.download',$sport->id) }}"
                                          class="btn btn-success">
                                            <i class="fa fa-download"></i>Unduh
                                        </a></b></td>
                            </tr>
                        @endforeach
                    </tbpdy>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header" style="padding: 20px">
                <h5>Daftar hadir Lomba</h5>
            </div>
            <div class="card-body" style="padding: 20px">
                <table class="table">
                    <thead>
                    <td><b>#</b></td>
                    <td><b>Kecamatan</b></td>
                    <td style="text-align: center"><b>Jumlah sekolah</b></td>
                    <td style="text-align: center"><b>Jumlah siswa</b></td>
                    </thead>
                    <tbpdy>
                        @foreach($dataDistrict as $index=>$data)
                            <tr>
                                <td><b>{{ $index+1 }}</b></td>
                                <td><b>{{ $data->village }}</b></td>
                                <td style="text-align: center">{{ $data->school }}</td>
                                <td style="text-align: center">{{ $data->count }}</td>
                            </tr>
                        @endforeach
                    </tbpdy>
                </table>
            </div>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="card">
            <div class="card-header" style="padding: 20px">
                <h5>Sekolah yang belum mengupload surat pertanyaan</h5>
            </div>
            <div class="card-body" style="padding: 20px">
                <table class="table">
                    <thead>
                    <td><b>#</b></td>
                    <td><b>Nama Sekolah</b></td>
                    <td style="text-align: center"><b>Surat 1</b></td>
                    <td style="text-align: center"><b>Surat 2</b></td>
                    </thead>
                    <tbpdy>
                        @foreach(School::where('upload1','=',null)->orWhere('upload2','=',null)->get() as $index=>$data)
                            <tr>
                                <td><b>{{ $index+1 }}</b></td>
                                <td><b>{{ $data->name }}</b></td>
                                <td style="text-align: center">{{ $data->upload1?'Sudah terupload':'-' }}</td>
                                <td style="text-align: center">{{ $data->upload2?'Sudah terupload':'-' }}</td>
                            </tr>
                        @endforeach
                    </tbpdy>
                </table>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-header" style="padding: 20px">
                <h5>Sekolah yang belum mengupload siswa sama sekali</h5>
            </div>
            <div class="card-body" style="padding: 20px">
                <table class="table">
                    <thead>
                    <td>#</td>
                    <td><b>Nama Sekolah</b></td>
                    </thead>
                    <tbpdy>
                        @foreach(School::
where('upload1','!=',null)->where('upload2','!=',null)->
doesntHave('students')->get() as $index=>$data)
                            <tr>
                                <td><b>{{ $index+1 }}</b></td>
                                <td><b>{{ $data->name }}</b></td>
                            </tr>
                        @endforeach
                    </tbpdy>
                </table>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header" style="padding: 20px">
                <h5>Telah menyelsaikan pendaftaran sekolah</h5>
            </div>
            <div class="card-body" style="padding: 20px">
                <table class="table">
                    <thead>

                    <td><b>#</b></td>
                    <td><b>Sekolah</b></td>
                    <td><b>Cabang olahraga yang telah diikuti</b></td>
                    <td><b>Jumlah siswa</b></td>
                    </thead>
                    @foreach($generalData['clear'] as $index=>$data)
                        <tr>

                            <td>{{ $index+1 }}</td>
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

                            <td class="text-center">{{ $data->students->count() }}</td>
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
                <table class="table table-responsive">
                    <thead>
                    <td><b>Nomer</b></td>
                    <td><b>Nama Sekolah Sekolah</b></td>
                    <td><b>surat pernyataan</b></td>
                    <td><b>surat Perwalian</b></td>
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
</div>

