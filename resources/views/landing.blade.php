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

                .title {
                    text-align: center;
                }
                .title p{
                    text-align: center;
                    font-size: 1.5rem;
                    font-weight: bold;
                    padding: 0;
                    margin: 0;
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
                color: white;
            }
        </style>
    </x-slot>
    <div>

        <div class="scroll-container">
            <section>
                <header id="image" class="d-flex h-100">
                    <div class=" row justify-content-center align-self-center col-md-12" style="z-index: 3;">
                        <div style="text-align: left;" class="col-md-7 title">
                            <p >SELAMAT DATANG</p>
                            <h1 >
                                ALP LEAGUE 2022
                            </h1>
                            <h2>
                                TINGKAT KABUPATEN
                            </h2>
                            <a href="{{ route('login') }}" class="btn btn-success mt-3" style="padding-left: 50px;padding-right: 50px; font-size: 20px">Masuk</a>
                        </div>
                        <div style="text-align: center;" class="col-md-5 title-img">
                            <img src="{{ asset('alp-league/logo.png') }}" alt="" >
                        </div>

                    </div>
                    <div class=layer></div>
                </header>
            </section>

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
