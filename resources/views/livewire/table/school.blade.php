<div>

    <x-data-table :model="$datas">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
{{--                        # @include('components.sort-icon', ['field' => 'id'])--}}
                    </a></th>
{{--                <th>email</th>--}}
                <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Nama @include('components.sort-icon', ['field' => 'name'])
                    </a></th>
                <th>Desa</th>
                <th>Surat pendaftaran</th>
                <th>Surat perwalian</th>
                <th>Jumlah cabor</th>
                <th>Jumlah Siswa</th>
                <th>Aksi</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($datas as $index=>$data)
                <tr class="@if($loop->odd)bg-white @else bg-gray-100 @endif">
                    <td>{{ $index+1 + ($page-1)*$perPage }}</td>
{{--                    <td>{{ $data->user->email }}</td>--}}
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->village }}</td>
                    <td>
                        @if($data->upload1!=null)
                            <a href="{{ route('download.surat-pernyataan-dan-pendaftaran',$data->id) }}"
                               target="_blank">
                                <i class="fa fa-download"></i> Unduh
                            </a>
                            <br>
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
                            <br>
                            <a href="{{ route('show.surat-perwalian',$data->id) }}"
                               target="_blank">
                                <i class="fa fa-eye"></i> Lihat
                            </a>
                        @endif
                    </td>
                    @php
                        $query="SELECT sports.title, count(*) as jumlah FROM `students` JOIN sports ON sport_id=sports.id WHERE school_id = $data->id GROUP BY sports.title;";
                        $d= \Illuminate\Support\Facades\DB::select(\Illuminate\Support\Facades\DB::raw($query))
                    @endphp
                    <td>
                        @foreach($d as $dd)
                            {{ $dd->title }} ({{$dd->jumlah}})<br>
                        @endforeach
                    </td>
                    <td>{{ $data->students->count() }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a href="{{ route('school.show',$data->id) }}" class="btn btn-primary"> Lihat detail</a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>

