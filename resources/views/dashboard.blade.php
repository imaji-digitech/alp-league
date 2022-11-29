<x-admin>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <div>
        <div class="container-fluid">

            @livewire('dashboard-data')
            @if(auth()->user()->school_id!=null)
                @livewire('dashboard-user')


            @else
                <div class="card">
                    <div class="card-body">
                        @livewire('form.match-making',['action'=>'create'])
                    </div>
                </div>
                @livewire('dashboard-admin')
            @endif


        </div>
    </div>
</x-admin>
