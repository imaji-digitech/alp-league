<!-- Page Sidebar Start-->
<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="#">
                <img class="img-fluid for-light" style="height: 50px" src="{{asset('assets/images/logo/logo.png')}}"
                     alt="">
                <img class="img-fluid for-dark" style="height: 50px" src="{{asset('assets/images/logo/logo_dark.png')}}"
                     alt="">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"></i></div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="#">
                <img class="img-fluid" style="height: 50px" src="{{asset('assets/images/logo/logo-icon.png')}}" alt="">
            </a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt="">
                        </a>
                        <div class="mobile-back text-end"><span>Back</span>
                            <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div><h6>General</h6></div>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ route('dashboard') }}">
                            <i class="fas fa-home"></i><span> Dashboard</span>
                        </a>
                    </li>

                    @if(auth()->user()->school_id==null)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('match-making.index') }}">
                                <i class="fas fa-graduation-cap"></i><span> Pertandingan</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('student.all') }}">
                                <i class="fas fa-graduation-cap"></i><span> Siswa</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('school') }}">
                                <i class="fas fa-school"></i><span> Sekolah</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('certificate.index') }}">
                                <i class="fas fa-school"></i><span> Sertifikat</span>
                            </a>
                        </li>
                    @else
                        @if (auth()->user()->school->upload1!=null or auth()->user()->school->upload2!=null)
                            <li class="sidebar-list">
                                <a class="sidebar-link sidebar-title link-nav" href="{{ route('student.index') }}">
                                    <i class="fas fa-graduation-cap"></i><span> Siswa</span>
                                </a>
                            </li>
                        @endif
                    @endif
                    @if (auth()->user()->school_id==null or auth()->user()->school->upload1!=null or auth()->user()->school->upload2!=null)
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('match-making.show',1) }}">
                                <i class="fas fa-basketball-ball"></i><span> Pertandingan Sepakbola</span>
                            </a>
                        </li>
                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('match-making.show',4) }}">
                                <i class="fas fa-volleyball-ball"></i><span> Pertandingan Voli Putra</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('match-making.show',5) }}">
                                <i class="fas fa-volleyball-ball"></i><span> Pertandingan Voli Putri</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('match-making.show',6) }}">
                                <i class="fas fa-baseball-ball"></i><span> Pertandingan Kasti Putra</span>
                            </a>
                        </li>

                        <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="{{ route('match-making.show',7) }}">
                                <i class="fas fa-baseball-ball"></i><span> Pertandingan Kasti Putri</span>
                            </a>
                        </li>
                    @endif

                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav">

                        </a>
                    </li>
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav">

                        </a>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
