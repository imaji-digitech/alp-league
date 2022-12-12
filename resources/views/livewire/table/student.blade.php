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
                <th>NISN</th>
                <th>TTL</th>
                <th>Cabor</th>
                <th>Gambar Raport</th>
                <th>Aksi</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($datas as $index=>$data)
                <tr class="@if($loop->odd)bg-white @else bg-gray-100 @endif">
                    <td>{{ $index+1 + ($page-1)*$perPage }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->nisn }}</td>
                    <td>{{ $data->place_birth.', '.$data->date_birth }}</td>
                    <td>{{ $data->sport->title }}</td>
                    <td><img src="{{ asset('storage/'. $data->report ) }}" style="width: 300px" alt=""></td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a href="{{ route('student.edit',$data->id) }}" class="btn-primary btn m-1"> Ubah</a>
{{--                        <a href="#" wire:click="deleteItem({{ $data->id }})" class="btn btn-danger">Hapus</a>--}}
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>

