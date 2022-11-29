@php use App\Models\MatchMaking; @endphp
<x-admin>
    <x-slot name="css">
        <style>
            .score {
                padding: 0 10px;
                width: 20%
            }
            .school-team{
                padding: 0 10px;
                width: 80%
            }

            @media (max-width: 768px) {
                .score {
                    padding: 0 10px;
                    width: 40%
                }
                .school-team{
                    padding: 0 10px;
                    width: 60%
                }

            }
        </style>
    </x-slot>
    <x-slot name="title">
        Pertandingan {{ $sport->title }}
    </x-slot>

    <div class="container-fluid">
        <div class="container">
            {{--            <div class="card">--}}
            {{--                <div class="card-body">--}}
            @foreach(MatchMaking::whereSportId($id)->orderBy('update_score')->orderByDesc('updated_at')->get() as $m)
                @livewire('match-making-update-score',['match'=>$m])
            @endforeach
            {{--                    <a href="{{ route('student.create') }}" class="btn btn-primary">Tambah data siswa</a>--}}
            {{--                    <livewire:table.main name="schoolDetail" :data-id="$id" :model="\App\Models\Student::class"/>--}}
        </div>
        {{--            </div>--}}
        {{--        </div>--}}
    </div>
</x-admin>
