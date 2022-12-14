<x-admin>
    <x-slot name="title">
        Tambah data sertifikat
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('certificate.index') }}">{{__('Sertifikat')}}</a></li>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <livewire:form.certificate action="create"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>
