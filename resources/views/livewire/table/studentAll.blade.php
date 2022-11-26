<div>

    <x-data-table :model="$datas">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        # @include('components.sort-icon', ['field' => 'id'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Nama siswa @include('components.sort-icon', ['field' => 'name'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('school_id')" role="button" href="#">
                        Sekolah @include('components.sort-icon', ['field' => 'school_id'])
                    </a></th>
                <th>NISN</th>
                <th>TTL</th>
                <th>Umur saat 19 desember 2022</th>
                <th>Cabor</th>
                <th>Gambar Raport</th>
                <th>Aksi</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($datas as $index=>$data)
                <tr class="@if($loop->odd)bg-white @else bg-gray-100 @endif">
                    <td>{{ $index+1 }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->school->name }}</td>
                    <td>{{ $data->nisn }}</td>
                    <td>{{ $data->place_birth.', '.$data->date_birth }}</td>
                    <td>{{ \Carbon\Carbon::parse($data->date_birth)->diff(\Carbon\Carbon::parse('19-12-2022'))->format('%y Tahun %m bulan %d hari') }}</td>
                    <td>{{ $data->sport->title }}</td>
                    <td><img src="{{ asset('storage/'. $data->report ) }}" style="width: 300px" alt=""></td>
                    <td class="whitespace-no-wrap row-action--icon">

                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>

