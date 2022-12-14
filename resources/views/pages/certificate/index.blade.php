<x-admin>
    <x-slot name="title">
        Data Sertifikat
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('certificate.create') }}" class="btn btn-primary">Tambah data pertandingan</a>
                    <livewire:table.main name="certificate" :model="\App\Models\Certificate::class"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
