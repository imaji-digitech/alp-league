@php use Carbon\Carbon; @endphp
<div class="card" style="padding: 5px;background: {{$background}};color: {{ $color }}">

    <form wire:submit.prevent="updateScore">
        <table style="width:100%; ">
            <tr>
                <td style="width: 50%">
                    <table style="width: 100% ; height: 100px;">
                        <tr>
                            <td class="school-team" style="text-align: right"><h5>{{ $match->school1->name }}</h5></td>
                            <td class="score">
                                <input type="text"
                                       style="width: 100%;height: 100px;background: white; font-size: 3.2rem;color: #000; text-align: center;font-weight: bold; border-radius: 5px; border: #fff"
                                       value="{{ $match->score1 }}"
                                       wire:model="score1"
                                       @if($updateAble==0) disabled @endif>
                            </td>
                        </tr>
                    </table>
                </td>
                <td style="width: 50%">
                    <table style="width: 100%; height: 100px;">
                        <tr>
                            <td class="score">
                                <input type="text"
                                       style="width: 100%;height: 100px;background: white; font-size: 3.2rem;color: #000; text-align: center;font-weight: bold; border-radius: 5px; border: #fff"
                                       value="{{ $match->score2 }}"
                                       wire:model="score2"
                                       @if($updateAble==0) disabled @endif>
                            </td>
                            <td class="school-team" style=" text-align: left"><h5>{{ $match->school2->name }}</h5></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <div style="text-align: center; margin: 10px 0; width: 100%">

            <div class="bg-white mx-auto"
                 style="border-radius: 10px; margin: 10px; padding: 10px 0;color: black; width: 400px">
                <table style="width: 100%">
                    @if($school==1)
                        <tr>
                            <td style=" text-align: center" colspan="3">
                                Pertandingan {{ $match->sport->title }}
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <td style="width: 45%; text-align: right">
                            Pertandingan<br>

                        </td>
                        <td style="width: 10%; text-align: center"> :</td>
                        <td style="width: 45%; text-align: left">
                            {{ $match->title }}
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 45%; text-align: right">
                            Pengawas
                        </td>
                        <td style="width: 10%; text-align: center"> :</td>
                        <td style="width: 45%; text-align: left">
                            {{ $match->supervisor }}
                        </td>
                    </tr>
                    <tr>
                        <td style=" text-align: center" colspan="3">
                            <b>{{ Carbon::parse($match->date_match)->isoFormat('dddd, d MMMM YYYY') }}</b>
                            <br>
                            <b>{{ Carbon::parse($match->date_match)->isoFormat('HH:mm') }}</b>
                        </td>
                    </tr>
                </table>
            </div>

            @if(auth()->user()->school_id==null)
                @if($updateAble==0)
                    <div>
                        <button class="btn btn-dark" wire:click.prevent="setUpdateAble()">Update Score</button>
                    </div>
                @else
                    <div>
                        <button type="submit" id="submit" class="btn btn-dark">Submit</button>
                    </div>
                @endif
            @endif
        </div>
    </form>
</div>
