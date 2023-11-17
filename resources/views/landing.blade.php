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

                .title-img img{
                    width: 350px;
                    margin-top: 30px;
                }

                .title div{
                    width: 100%; text-align: center
                }

                .title p{
                    text-align: center;
                    font-size: 1.5rem;
                    font-weight: bold;
                    padding: 0;
                    margin: 0;
                }
                .title a{
                    text-align: center;
                }
                .title h1{
                    text-align: center;
                    font-size: 2.5rem;
                    font-weight: bold;
                    padding: 0;
                    margin: 0;
                }
                .title h2{
                    text-align: center;
                    font-size: 1rem;
                    font-weight: bold;
                    padding: 0;
                    margin: 0;
                }

            }
            @media (min-width: 768px) {
                .title-img img{
                    width: 500px;
                }
                .title {
                    padding-left: 100px;
                }
                .title p{
                    margin-top: 70px;
                    font-size: 3rem;
                    font-weight: bold;
                }
                .title h1{
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
                            <p >SELAMAT DATANG</p>
                            <h1 >
                                ALP LEAGUE 2023
                            </h1>
                            <h2>
                                TINGKAT KABUPATEN
                            </h2>
                            <div>
                                <a href="{{ route('login') }}" class="btn btn-success mt-3" style="padding-left: 50px;padding-right: 50px; font-size: 20px">Masuk</a>
                            </div>

                        </div>
                        <div style="text-align: center;" class="col-md-5 title-img">
                            <img src="{{ asset('alp-league/logo.png') }}" alt="" >
                        </div>

                    </div>
                    <div class=layer></div>
                </header>
            </section>
{{--            <section id="bracket">--}}
{{--                <h1>Sepak Bola Mini</h1>--}}
{{--                <div class="container">--}}

{{--                    <div class="split split-one">--}}
{{--                        <div class="round round-one current">--}}
{{--                            <div class="round-details">Round 1<br/><span class="date">March 16</span></div>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Duke<span class="score">76</span></li>--}}
{{--                                <li class="team team-bottom">Virginia<span class="score">82</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Wake Forest<span class="score">64</span></li>--}}
{{--                                <li class="team team-bottom">Clemson<span class="score">56</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">North Carolina<span class="score">68</span></li>--}}
{{--                                <li class="team team-bottom">Florida State<span class="score">54</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">NC State<span class="score">74</span></li>--}}
{{--                                <li class="team team-bottom">Maryland<span class="score">92</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Georgia Tech<span class="score">78</span></li>--}}
{{--                                <li class="team team-bottom">Georgia<span class="score">80</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Auburn<span class="score">64</span></li>--}}
{{--                                <li class="team team-bottom">Florida<span class="score">63</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Kentucky<span class="score">70</span></li>--}}
{{--                                <li class="team team-bottom">Alabama<span class="score">59</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Vanderbilt<span class="score">64</span></li>--}}
{{--                                <li class="team team-bottom">Gonzagasdasdasdasda<span class="score">68</span></li>--}}
{{--                            </ul>--}}
{{--                        </div>  <!-- END ROUND ONE -->--}}

{{--                        <div class="round round-two current">--}}
{{--                            <div class="round-details">Round 2<br/><span class="date">March 18</span></div>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                        </div>  <!-- END ROUND TWO -->--}}

{{--                        <div class="round round-three">--}}
{{--                            <div class="round-details">Round 3<br/><span class="date">March 22</span></div>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                        </div>  <!-- END ROUND THREE -->--}}
{{--                        <div class="round round-four" >--}}
{{--                            <div class="round-details">Semi Final<br/><span class="date">March 22</span></div>--}}
{{--                            <div style="height: 100%;">--}}
{{--                                <ul class="matchup" >--}}
{{--                                    <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                    <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>  <!-- END ROUND THREE -->--}}
{{--                    </div>--}}

{{--                    <div class="champion">--}}
{{--                        <div class="semis-l">--}}
{{--                            <i class="fa fa-trophy"></i>--}}
{{--                            <div class="round-details">Champion <br/><span class="date">March 26-28</span></div>--}}
{{--                            <ul class="matchup championship">--}}
{{--                                <li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>--}}
{{--                            </ul>--}}

{{--                        </div>--}}


{{--                        <div class="semis-r">--}}
{{--                            <br>--}}
{{--                            <div class="round-details">Perebutan Juara 3<br/><span class="date">March 26-28</span></div>--}}
{{--                            <ul class="matchup championship">--}}
{{--                                <li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}


{{--                    <div class="split split-two">--}}

{{--                        <div class="round round-four" >--}}
{{--                            <div class="round-details">Semi Final<br/><span class="date">March 22</span></div>--}}
{{--                            <div style="height: 100%;">--}}
{{--                                <ul class="matchup" >--}}
{{--                                    <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                    <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>  <!-- END ROUND THREE -->--}}
{{--                        <div class="round round-three">--}}
{{--                            <div class="round-details">Round 3<br/><span class="date">March 22</span></div>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                        </div>  <!-- END ROUND THREE -->--}}

{{--                        <div class="round round-two">--}}
{{--                            <div class="round-details">Round 2<br/><span class="date">March 18</span></div>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>--}}
{{--                            </ul>--}}
{{--                        </div>  <!-- END ROUND TWO -->--}}
{{--                        <div class="round round-one current">--}}
{{--                            <div class="round-details">Round 1<br/><span class="date">March 16</span></div>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Minnesota<span class="score">62</span></li>--}}
{{--                                <li class="team team-bottom">Northwestern<span class="score">54</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Michigan<span class="score">68</span></li>--}}
{{--                                <li class="team team-bottom">Iowa<span class="score">66</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Illinois<span class="score">64</span></li>--}}
{{--                                <li class="team team-bottom">Wisconsin<span class="score">56</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Purdue<span class="score">36</span></li>--}}
{{--                                <li class="team team-bottom">Boise State<span class="score">40</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Penn State<span class="score">38</span></li>--}}
{{--                                <li class="team team-bottom">Indiana<span class="score">44</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Ohio State<span class="score">52</span></li>--}}
{{--                                <li class="team team-bottom">VCU<span class="score">80</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">USC<span class="score">58</span></li>--}}
{{--                                <li class="team team-bottom">Cal<span class="score">59</span></li>--}}
{{--                            </ul>--}}
{{--                            <ul class="matchup">--}}
{{--                                <li class="team team-top">Virginia Tech<span class="score">74</span></li>--}}
{{--                                <li class="team team-bottom">Dartmouth<span class="score">111</span></li>--}}
{{--                            </ul>--}}
{{--                        </div>  <!-- END ROUND ONE -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </section>--}}

        </div>
        <script>
            // var counter = 1; //instantiate a counter
            // var maxImage = 4; //the total number of images that are available
            // setInterval(function () {
            //     document.querySelector('header').style.backgroundImage = "url('user/images/" + (counter + 1) + ".jpg')";
            //     if (counter + 1 == maxImage) {
            //         counter = 0; //reset to start
            //     } else {
            //         ++counter; //iterate to next image
            //     }
            // }, 3000);


        </script>
    </div>

</x-user>
