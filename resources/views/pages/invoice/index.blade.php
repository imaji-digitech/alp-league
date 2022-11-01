<x-admin>
    <x-slot name="title">
        Data Driver
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('driver.create') }}" class="btn btn-primary">Tambah data driver</a>
                    <livewire:table.main name="driver"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
