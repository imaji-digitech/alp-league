@php use App\Models\MatchMaking; @endphp
<x-admin>
    <x-slot name="title">
        Dashboard
    </x-slot>
    <x-slot name="css">
        <style>
            .score {
                padding: 0 10px;
                width: 20%
            }

            .school-team {
                padding: 0 10px;
                width: 80%
            }

            @media (max-width: 768px) {
                .score {
                    padding: 0 10px;
                    width: 40%
                }

                .school-team {
                    padding: 0 10px;
                    width: 60%
                }

            }
        </style>
    </x-slot>
    <div>
        <div class="container-fluid">

            @livewire('dashboard-data')
            @if(auth()->user()->school_id!=null)
                @livewire('dashboard-user')
                @foreach(MatchMaking::where('school1_id',auth()->user()->school_id)->orWhere('school2_id',auth()->user()->school_id)->get() as $match)
                    @livewire('match-making-update-score',['match'=>$match,'school'=>1])
                @endforeach
            @else
                <div class="card">
                    <div class="card-body">
                        @livewire('form.match-making',['action'=>'create'])
                    </div>
                </div>
                @livewire('dashboard-admin')
                @foreach(MatchMaking::where('update_score',0)->get() as $match)
                    @livewire('match-making-update-score',['match'=>$match,'school'=>1])
                @endforeach
            @endif
            <br><br>


        </div>
    </div>
</x-admin>
