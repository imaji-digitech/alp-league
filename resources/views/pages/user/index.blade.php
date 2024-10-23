<x-admin>
    <x-slot name="title">
        Data User
    </x-slot>

    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-primary" href="{{ route('users.create') }}">Tambah data</a>
                        <livewire:table.main name="user" :model="$user"/>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-admin>
