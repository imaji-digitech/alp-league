<x-admin>
    <x-slot name="title">
        Data Olahraga
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <livewire:table.main name="sport" :model="\App\Models\Sport::class"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
