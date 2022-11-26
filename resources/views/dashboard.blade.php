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
                @livewire('dashboard-admin')
            @endif
        </div>
    </div>
</x-admin>
