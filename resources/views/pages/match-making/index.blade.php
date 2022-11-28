<x-admin>
    <x-slot name="title">
        Data pertandingan
    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('match-making.create') }}" class="btn btn-primary">Tambah data pertandingan</a>
                    <livewire:table.main name="match-making" :model="\App\Models\MatchMaking::class"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
