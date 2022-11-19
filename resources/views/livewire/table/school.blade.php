<div>

    <x-data-table :model="$datas">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        # @include('components.sort-icon', ['field' => 'id'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Nama @include('components.sort-icon', ['field' => 'name'])
                    </a></th>
                <th>Desa</th>
                <th>Jumlah cabor</th>
                <th>Jumlah Siswa</th>
                <th>Aksi</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($datas as $index=>$data)
                <tr class="@if($loop->odd)bg-white @else bg-gray-100 @endif">
                    <td>{{ $index+1 + ($page-1)*$perPage }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->village }}</td>
                    @php
                    $query="SELECT sports.title FROM `students` JOIN sports ON sport_id=sports.id WHERE school_id = $data->id GROUP BY sports.title;";
                    $d= \Illuminate\Support\Facades\DB::select(\Illuminate\Support\Facades\DB::raw($query))
                    @endphp
                    <td>
                        @foreach($d as $dd)
                            {{ $dd->title }},
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

