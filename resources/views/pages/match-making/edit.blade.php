<x-admin>
    <x-slot name="title">
        Ubah data pertandingan
    </x-slot>
    <x-slot name="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('match-making.index') }}">{{__('Pertandingan')}}</a></li>
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <livewire:form.match-making action="update" :data-id="$id"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin>
