@php use App\Models\MatchMaking;use App\Models\School; @endphp
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
            @if(auth()->user()->school_id!=null)
{{--                @if (auth()->user()->school->upload1!=null or auth()->user()->school->upload2!=null)--}}
                    @livewire('dashboard-data')
                    @livewire('dashboard-user')
                    @foreach(MatchMaking::where('school1_id',auth()->user()->school_id)->orWhere('school2_id',auth()->user()->school_id)->get() as $match)
                        @livewire('match-making-update-score',['match'=>$match,'school'=>1])
                    @endforeach
{{--                @else--}}
{{--                    <br><br><br>--}}
{{--                    <h2 style="text-align: center; font-weight: normal; width: 100%">--}}
{{--                        Akun Anda tidak aktif karena tidak melakukan pendaftaran.--}}
{{--                        <br>--}}
{{--                        sampai bertemu di <br> <b>ALP League Kabupaten 2023.</b>--}}
{{--                        <br>--}}
{{--                        Ikuti aktivitas kami di website--}}
{{--                        <a href="https://imajisociopreneur.id" style="text-decoration: none; color: #1c3aa1">--}}
{{--                            <b><i class="fa fa-globe" style="font-size: 1.8rem"></i>&nbsp; imajisociopreneur.id</b>--}}
{{--                        </a> <br>--}}
{{--                        dan intagram kami--}}
{{--                        <a href="http://instagram.com/imajisociopreneur/" style="text-decoration: none; color: #a11c5f">--}}
{{--                            <b><i class="fa fa-instagram" style="font-size: 1.8rem"></i>&nbsp; @imajisociopreneur</b>--}}
{{--                        </a>--}}
{{--                    </h2>--}}

                @endif
            @else
                @livewire('dashboard-data')
                <div class="card">
                    <div class="card-body">
                        @livewire('form.match-making',['action'=>'create'])
                    </div>
                </div>
                @livewire('dashboard-admin')
                @foreach( MatchMaking::where('update_score',0)->get() as $match )
                    @livewire('match-making-update-score',['match'=>$match,'school'=>1])
                @endforeach
            @endif
            <br><br>
        </div>
    </div>
</x-admin>
