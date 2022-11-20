<x-admin>
    <x-slot name="title">
        Data Siswa
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('student.create') }}" class="btn btn-primary">Tambah data siswa</a>
                    <livewire:table.main name="studentAll" :model="\App\Models\Student::class"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
