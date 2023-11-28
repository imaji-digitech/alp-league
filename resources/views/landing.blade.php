@php use App\Models\MatchMaking; @endphp
<x-user>
    <x-slot name="css">
        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            @media (max-width: 768px) {

                .title-img img {
                    width: 350px;
                    margin-top: 30px;
                }

                .title div {
                    width: 100%;
                    text-align: center
                }

                .title p {
                    text-align: center;
                    font-size: 1.5rem;
                    font-weight: bold;
                    padding: 0;
                    margin: 0;
                }

                .title a {
                    text-align: center;
                }

                .title h1 {
                    text-align: center;
                    font-size: 2.5rem;
                    font-weight: bold;
                    padding: 0;
                    margin: 0;
                }

                .title h2 {
                    text-align: center;
                    font-size: 1rem;
                    font-weight: bold;
                    padding: 0;
                    margin: 0;
                }

            }

            @media (min-width: 768px) {
                .title-img img {
                    width: 500px;
                }

                .title {
                    padding-left: 100px;
                }

                .title p {
                    margin-top: 70px;
                    font-size: 3rem;
                    font-weight: bold;
                }

                .title h1 {
                    font-size: 5rem;
                    font-weight: bold;
                }
            }

            body {
                padding: 0 !important;
                margin: 0 !important;
                transform: translate3d(0px, 0px, 0px);
                transition: all 700ms ease;
            }
        </style>
        <link rel="stylesheet" href="{{ asset('assets/css/brackets.css') }}">
    </x-slot>

    <div>
        <div class="scroll-container">
            <section style="height: 100vh">
                <header id="image" class="d-flex h-100">
                    <div class=" row justify-content-center align-self-center col-md-12" style="z-index: 3;">
                        <div style="text-align: left;" class="col-md-7 title">
                            <p>SELAMAT DATANG</p>
                            <h1>
                                ALP LEAGUE 2023
                            </h1>
                            <h2>
                                TINGKAT KABUPATEN
                            </h2>
                            <div>
                                <a href="{{ route('login') }}" class="btn btn-success mt-3"
                                   style="padding-left: 50px;padding-right: 50px; font-size: 20px">Masuk</a>
                            </div>

                        </div>
                        <div style="text-align: center;" class="col-md-5 title-img">
                            <img src="{{ asset('alp-league/logo.png') }}" alt="">
                        </div>

                    </div>
                    <div class=layer></div>
                </header>
            </section>

            <section id="bracket">
                <h1>Sepak Bola Mini</h1>
                <div class="container">

                    <div class="split split-one">
                        <div class="round round-one current">
                            @for($i=1;$i<=8;$i++)
                                <ul class="matchup">
                                    @php($match=MatchMaking::where('key','sepak-bola-mini-match-'.$i)->first())
                                    <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>
                            @endfor
                        </div>  <!-- END ROUND ONE -->

                        <div class="round round-two">
                            @for($i=1;$i<=4;$i++)
                                <ul class="matchup">
                                    @php($match=MatchMaking::where('key','sepak-bola-mini-16-besar-match-'.$i)->first())
                                    <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>
                            @endfor

                        </div>  <!-- END ROUND TWO -->

                        <div class="round round-three">
                            @for($i=1;$i<=2;$i++)
                                <ul class="matchup">
                                    @php($match=MatchMaking::where('key','sepak-bola-mini-perempat-final-match-'.$i)->first())
                                    <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>
                            @endfor
                        </div>  <!-- END ROUND THREE -->
                        <div class="round round-four">
                            <div style="height: 100%;">
                                @for($i=1;$i<=1;$i++)
                                    <ul class="matchup">
                                        @php($match=MatchMaking::where('key','sepak-bola-mini-semi-final-match-'.$i)->first())
                                        <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                                class="score">{{ $match->score1??'-' }}</span></li>
                                        <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                                class="score">{{ $match->score2??'-' }}</span></li>
                                    </ul>
                                @endfor
                            </div>
                        </div>  <!-- END ROUND THREE -->
                    </div>

                    <div class="champion">
                        <div class="semis-l">
                            <i class="fa fa-trophy"></i>
                            <div class="round-details">Champion <br/><span class="date">March 26-28</span></div>
                            <ul class="matchup championship">
                                @php($match=MatchMaking::where('key','sepak-bola-mini-final-match')->first())
                                <li class="team team-top" style="">{{ $match->school1->name??'Segera' }}<span
                                        class="score">{{ $match->score1??'-' }}</span></li>
                                <li class="team team-bottom" style="">{{ $match->school2->name??'Segera' }}<span
                                        class="score">{{ $match->score2??'-' }}</span></li>
                            </ul>
                        </div>


                        <div class="semis-r">
                            <br><br>
                            <div class="round-details">Perebutan Juara 3<br/><span class="date">March 26-28</span></div>
                            <ul class="matchup championship">
                                <ul class="matchup championship" >
                                    @php($match=MatchMaking::where('key','sepak-bola-mini-final-3rd-match')->first())
                                    <li class="team team-top" >{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>

                            </ul>
                        </div>
                    </div>


                    <div class="split split-two">

                        <div class="round round-four">

                            <div style="height: 100%;">
                                @for($i=2;$i<=2;$i++)
                                    <ul class="matchup">
                                        @php($match=MatchMaking::where('key','sepak-bola-mini-semi-final-match-'.$i)->first())
                                        <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                                class="score">{{ $match->score1??'-' }}</span></li>
                                        <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                                class="score">{{ $match->score2??'-' }}</span></li>
                                    </ul>
                                @endfor
                            </div>
                        </div>  <!-- END ROUND THREE -->
                        <div class="round round-three">
                            @for($i=3;$i<=4;$i++)
                                <ul class="matchup">
                                    @php($match=MatchMaking::where('key','sepak-bola-mini-perempat-final-match-'.$i)->first())
                                    <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>
                            @endfor
                        </div>  <!-- END ROUND THREE -->

                        <div class="round round-two">
                            @for($i=5;$i<=8;$i++)
                                <ul class="matchup">
                                    @php($match=MatchMaking::where('key','sepak-bola-mini-16-besar-match-'.$i)->first())
                                    <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>
                            @endfor
                        </div>  <!-- END ROUND TWO -->
                        <div class="round round-one current">
                            @for($i=9;$i<=16;$i++)
                                <ul class="matchup">
                                    @php($match=MatchMaking::where('key','sepak-bola-mini-match-'.$i)->first())
                                    <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>
                            @endfor

                        </div>  <!-- END ROUND ONE -->
                    </div>
                </div>
            </section>

            <section id="bracket">
                <h1>Kasti Putra</h1>
                <div class="container">

                    <div class="split split-one" style="width: 70%">
                        <div class="round round-one current">
                            @for($i=1;$i<=8;$i++)
                                <ul class="matchup">
                                    @php($match=MatchMaking::where('key','kasti-putra-match-'.$i)->first())
                                    <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>
                            @endfor
                        </div>  <!-- END ROUND ONE -->

                        <div class="round round-two">
                            @for($i=1;$i<=4;$i++)
                                <ul class="matchup">
                                    @php($match=MatchMaking::where('key','kasti-putra-perempat-final-match-'.$i)->first())
                                    <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>
                            @endfor

                        </div>  <!-- END ROUND TWO -->

                        <div class="round round-three">
                            @for($i=1;$i<=2;$i++)
                                <ul class="matchup">
                                    @php($match=MatchMaking::where('key','kasti-putra-semi-final-match-'.$i)->first())
                                    <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>
                            @endfor
                        </div>  <!-- END ROUND THREE -->

                    </div>

                    <div class="champion" style="width: 25%">
                        <div class="semis-l">
                            <i class="fa fa-trophy"></i>
                            <div class="round-details">Champion <br/></div>
                            <ul class="matchup championship">
                                @php($match=MatchMaking::where('key','kasti-putra-final-match')->first())

                                <li class="team team-top" style="">{{ $match->school1->name??'Segera' }}<span
                                        class="score">{{ $match->score1??'-' }}</span></li>
                                <li class="team team-bottom" style="">{{ $match->school2->name??'Segera' }}<span
                                        class="score">{{ $match->score2??'-' }}</span></li>
                            </ul>
                        </div>


                        <div class="semis-r">
                            <br><br>
                            <div class="round-details">Perebutan Juara 3<br/></div>
                            <ul class="matchup championship">
                                <ul class="matchup championship" >
                                    @php($match=MatchMaking::where('key','kasti-putra-final-3rd-match')->first())
                                    <li class="team team-top" >{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>


            <section id="bracket">
                <h1>Kasti Putri</h1>
                <div class="container">

                    <div class="split split-one" >
                        <div class="round round-one current">
                            @for($i=1;$i<=8;$i++)
                                @if($i==8)
                                <ul class="matchup" style="margin-top: 5px">
                                    @php($match=MatchMaking::where('key','kasti-putri-match-0')->first())
                                    <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>
                                @else
                                    <br><br><br>
                                @endif
                            @endfor
                        </div>  <!-- END ROUND ONE -->

                        <div class="round round-two">
                            @for($i=1;$i<=4;$i++)
                                <ul class="matchup">
                                    @php($match=MatchMaking::where('key','kasti-putri-perempat-final-match-'.$i)->first())
                                    <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>
                            @endfor

                        </div>  <!-- END ROUND TWO -->

                        <div class="round round-three">
                            @for($i=1;$i<=2;$i++)
                                <ul class="matchup">
                                    @php($match=MatchMaking::where('key','kasti-putri-semi-final-match-'.$i)->first())
                                    <li class="team team-top">{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>
                            @endfor
                        </div>  <!-- END ROUND THREE -->

                    </div>

                    <div class="champion" style="width: 25%">
                        <div class="semis-l">
                            <i class="fa fa-trophy"></i>
                            <div class="round-details">Champion <br/></div>
                            <ul class="matchup championship">
                                @php($match=MatchMaking::where('key','kasti-putri-final-match')->first())
                                <li class="team team-top" style="">{{ $match->school1->name??'Segera' }}<span
                                        class="score">{{ $match->score1??'-' }}</span></li>
                                <li class="team team-bottom" style="">{{ $match->school2->name??'Segera' }}<span
                                        class="score">{{ $match->score2??'-' }}</span></li>
                            </ul>
                        </div>


                        <div class="semis-r">
                            <br><br>
                            <div class="round-details">Perebutan Juara 3<br/></div>
                            <ul class="matchup championship">
                                <ul class="matchup championship" >
                                    @php($match=MatchMaking::where('key','kasti-putri-final-3rd-match')->first())
                                    <li class="team team-top" >{{ $match->school1->name??'Segera' }}<span
                                            class="score">{{ $match->score1??'-' }}</span></li>
                                    <li class="team team-bottom">{{ $match->school2->name??'Segera' }}<span
                                            class="score">{{ $match->score2??'-' }}</span></li>
                                </ul>

                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>

</x-user>
