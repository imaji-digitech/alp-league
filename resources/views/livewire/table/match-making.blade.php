<div>

    <x-data-table :model="$datas">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        # @include('components.sort-icon', ['field' => 'id'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('date_match')" role="button" href="#">
                        Tanggal @include('components.sort-icon', ['field' => 'date_match'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('title')" role="button" href="#">
                        Judul @include('components.sort-icon', ['field' => 'title'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('sport_id')" role="button" href="#">
                        Cabor @include('components.sort-icon', ['field' => 'sport_id'])
                    </a></th>

                <th>Tim bertanding</th>
                <th>Pengawas</th>
                <th>Aksi</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($datas as $index=>$data)
                <tr class="@if($loop->odd)bg-white @else bg-gray-100 @endif">
                    <td>{{ $index+1 + ($page-1)*$perPage }}</td>
                    <td>{{ $data->date_match }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->sport->title }}</td>
                    <td style="text-align: left">{{ $data->school1->name }}
                        <br>
                        <b>Vs</b>
                        <br>
                        {{ $data->school2->name }}
                    </td>
                    <td>{{ $data->supervisor }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a target="_blank" href="{{ route('match-making.edit',$data->id) }}" class="btn-sm btn-secondary"> <i style="margin: 0" class="fa fa-edit"></i></a>
                        <a href="#" class="btn-sm btn-primary"> <i style="margin: 0" class="fa fa-eye"></i></a>
                        <a target="_blank" href="{{ route('match-making.download',$data->id) }}" class="btn-sm btn-secondary"> <i style="margin: 0" class="fa fa-download"></i></a>
                        <a href="#" class="btn-sm btn-danger"> <i style="margin: 0" class="fa fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>

