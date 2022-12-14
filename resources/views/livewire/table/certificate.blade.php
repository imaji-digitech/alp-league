<div>
    <x-data-table :model="$datas">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        # @include('components.sort-icon', ['field' => 'id'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('school_id')" role="button" href="#">
                        Sekolah @include('components.sort-icon', ['field' => 'school_id'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('title')" role="button" href="#">
                        Judul @include('components.sort-icon', ['field' => 'title'])
                    </a></th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($datas as $index=>$data)
                <tr class="@if($loop->odd)bg-white @else bg-gray-100 @endif">
                    <td>{{ $index+1 + ($page-1)*$perPage }}</td>
                    <td>{{ $data->school->name }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->certificateDetails->count() }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        @if($data->sport_id==null)
                            <a target="_blank" href="{{ route('certificate.show',$data->school_id) }}"
                               class="btn-sm btn-success">
                                <i style="margin: 0" class="fa fa-download"></i> Download
                            </a>
                        @else
                            <a target="_blank"
                               href="{{ route('certificate.champion',[$data->school_id,$data->sport_id]) }}"
                               class="btn-sm btn-success">
                                <i style="margin: 0" class="fa fa-download"></i> Download
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>

