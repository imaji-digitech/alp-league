<x-admin>
    <x-slot name="title">
        Tambah data data siswa
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('student.index') }}">{{__('Siswa')}}</a></li>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <livewire:form.student action="create"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>
