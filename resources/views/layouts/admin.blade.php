<!DOCTYPE html>
<html lang="id">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Cuba">
    <meta name="keywords"
          content="">
    <meta name="author" content="pixelstrap">
    <link rel="iconç" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/x-icon">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
          rel="stylesheet">
    <script src="https://kit.fontawesome.com/3011883c39.js" crossorigin="anonymous"></script>
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/summernote.css?_=2')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/calendar.css')}}">
    <link href="{{ asset('vendor/mathquill/mathquill.css?_=2') }}" rel="stylesheet">
    <link href="{{ asset('vendor/mathquill/matheditor.css?_=2') }}" rel="stylesheet">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
{{--    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/bootstrap.css')}}">--}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/timeline.css') }}">
    <link id="color" rel="stylesheet" href="{{asset('assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    @isset($css)
        {{ $css }}
    @endif
    <style>
        .default-datepicker .datepicker-inline .datepicker .datepicker--content .datepicker--days .datepicker--days-names {
            margin: 20px 0 0;
            padding: 0;
        }

        .btn-group.special {
            display: flex;
        }

        .special .btn {
            flex: 1
        }

        .product-box .product-details {
            padding: 10px;
        }

        @media (max-width: 800px) {
            .mobile-cashier {
                width: 33%
            }

            .desktop-only {
                display: none;
            }
        }

        @media (min-width: 800px) {
            .mobile-only {
                display: none;
            }

            .product-list {
                overflow-y: scroll;
                height: 800px;
            }

            .transaction-list {
                overflow-y: scroll;
                height: 400px;
            }
        }

    </style>
    @livewireStyles
</head>
<body onload="startTime()">
<div class="loader-wrapper">

    <div class="loader-index"><span></span></div>
    <svg>
        <defs></defs>
        <filter id="goo">
            <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo"></fecolormatrix>
        </filter>
    </svg>
</div>
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
    <div class="page-header">
        @include('components.admin.navbar')
    </div>
    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper" style="background-color: #6EDDE820">
    @include('components.admin.sidebar')
    <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-6">
                            <h3>{{ $title }}</h3>
                        </div>
                        <div class="col-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}"><i style="color:#6edde8" data-feather="home"></i></a>
                                </li>
                                @isset($breadcrumb)
                                    {{ $breadcrumb }}
                                @endisset
                                <li class="breadcrumb-item active">{{ $title }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            {{ $slot }}
        </div>
    </div>
</div>
@stack('modals')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<!-- feather icon js-->
<script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<script src="{{asset('assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('assets/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('assets/js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
{{--<script src="{{asset('assets/js/notify/index.js')}}"></script>--}}
<script src="{{asset('assets/js/editor/summernote/summernote.js?_=2')}}"></script>
<script src="{{asset('vendor/select2/select2.min.js')}}"></script>
{{--<script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.2.3/jquery.datetimepicker.js"></script>--}}
{{--<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>--}}
{{--<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>--}}
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl-custom.js')}}"></script>
<script src="{{asset('assets/js/calendar/tui-code-snippet.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/tui-time-picker.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/tui-date-picker.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/moment.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/chance.min.js')}}"></script>
<script src="{{asset('assets/js/calendar/tui-calendar.js')}}"></script>
<script src="{{asset('assets/js/calendar/calendars.js')}}"></script>
<script src="{{asset('assets/js/calendar/schedules.js')}}"></script>
@stack('schedules')
@stack('calendar')
<script defer src="{{ asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/dashboard/default.js') }}"></script>

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{ asset('vendor/mathquill/mathquill.min.js?_=2') }}"></script>
<script src="{{ asset('vendor/mathquill/matheditor.js?_=2') }}"></script>

<script>
    const SwalModal = (icon, title, html) => {
        Swal.fire({
            icon,
            title,
            html
        })
    }

    const SwalConfirm = (icon, title, html, confirmButtonText, method, params, callback) => {
        Swal.fire({
            icon,
            title,
            html,
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText,
            reverseButtons: true,
        }).then(result => {
            if (result.value) {
                return livewire.emit(method, params)
            }

            if (callback) {
                return livewire.emit(callback)
            }
        })
    }


    const SwalAlert = (icon, title, timeout = 2000) => {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: timeout,
            onOpen: toast => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        Toast.fire({
            icon,
            title
        })
    }

    document.addEventListener('DOMContentLoaded', () => {
        window.addEventListener("load", function () {
            setTimeout(function () {
                // This hides the address bar:
                window.scrollTo(0, 1);
            }, 0);
        });

        this.livewire.on('mathQuill', data => {
            var MQ1 = MathQuill.getInterface(2);
            var problemSpan = document.getElementById(data);
            MQ1.StaticMath(problemSpan)
        })

        this.livewire.on('swal:modal', data => {
            SwalModal(data.icon, data.title, data.text)
        })
        this.livewire.on('swal:confirm', data => {
            SwalConfirm(data.icon, data.title, data.text, data.confirmText, data.method, data.params, data.callback)
        })
        this.livewire.on('swal:alert', data => {
            SwalAlert(data.icon, data.title, data.timeout)
        })
        this.livewire.on('redirect', data => {
            setTimeout(function () {
                window.location.href = data;
            }, 2000);
        })
        this.livewire.on('redirect:new', data => {
            let a = document.createElement('a');
            a.target = '_blank';
            a.href = data;
            a.click();
        })
        this.livewire.on('notify', data => {
            $.notify(
                '<i class="fa fa-bell-o"></i><strong>Loading</strong> ' + data.title, {
                    type: data.type,
                    allow_dismiss: true,
                    delay: 2000,
                    showProgressbar: true,
                    timer: 1000,
                    animate: {
                        enter: 'animated fadeInDown',
                        exit: 'animated fadeOutUp'
                    }
                });

            // setTimeout(function() {
            //     notify.update('message', '<i class="fa fa-bell-o"></i><strong>Loading</strong> Inner Data.');
            // }, 1000);
        })
    })
</script>
<!-- Plugin used-->
@livewireScripts
@stack('scripts')
</body>
</html>
