<div>
    <x-data-table :model="$users">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('employee_id')" role="button" href="#">
                        #
                        @include('components.sort-icon', ['field' => 'employee_id'])
                    </a></th>
                <th>
                    <a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Nama
                        @include('components.sort-icon', ['field' => 'name'])
                    </a>
                </th>
                <th><a wire:click.prevent="sortBy('school_id')" role="button" href="#">
                        Sekolah
                        @include('components.sort-icon', ['field' => 'school_id'])
                    </a></th>
                <th>Desa</th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($users as $index=>$user)
                <tr x-data="window.__controller.dataTableController({{ $user->id }})">
                    <td>{{ $index+1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->school->village }}</td>
                    <td>{{ $user->school->name }}</td>
                    {{--                    <td>{{ $user->created_at->format('d M Y H:i') }}</td>--}}
                    <td class="">
                        <a role="button" href="{{ route('users.edit',$user->id) }}" style="margin: 2px" class="btn btn-sm btn-warning">
                            <i class="fa fa-16px fa-pen"></i>Edit
                        </a>

                        <a role="button" wire:click="deleteItem({{ $user->id }})" href="#" style="margin: 2px" class="btn btn-sm btn-danger">
                            <i class="fa fa-16px fa-trash text-red-500"></i> Hapus
                        </a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
