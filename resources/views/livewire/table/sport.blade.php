@php use Illuminate\Support\Facades\DB; @endphp
<div>

    <x-data-table :model="$datas">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        #
                    </a></th>
                <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Cabang olahraga @include('components.sort-icon', ['field' => 'name'])
                    </a></th>
                <th>Sekolah mengikuti</th>
                <th>Jumlah siswa</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($datas as $index=>$data)
                <tr class="@if($loop->odd)bg-white @else bg-gray-100 @endif">
                    <td>{{ $index+1 + ($page-1)*$perPage }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->schoolSports->count() }}</td>
                    <td>{{ \App\Models\Student::whereSportId($data->id)->count() }}</td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>

