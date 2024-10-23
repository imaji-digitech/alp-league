<x-admin>
    <x-slot name="title">
        Ubah data user
    </x-slot>

    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('users.index') }}">User</a></li>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <livewire:form.user action="update" :data-id="$id"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>
