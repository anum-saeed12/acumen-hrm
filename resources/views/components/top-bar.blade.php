<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand" href="#">
                <b class="logo-icon">
                    <img src="{{ asset('plugins/images/logo-icon.png') }}" alt="homepage" width="30px"/>
                </b>
                <span class="logo-text">
                    <img src="{{ asset('plugins/images/logo-text.png') }}" alt="homepage" width="100%"/>
                </span>
            </a>
            <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse navbar-tele" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav">
                <li><a class="nav-link tele-nav-link active" href="{{ route('dashboard') }}"><i class="far fa-clock" aria-hidden="true"></i> Dashboard</a></li>
                <li><a class="nav-link tele-nav-link" href="#"><i class="fa fa-user" aria-hidden="true"></i>  Employee</a></li>
                <li><a class="nav-link tele-nav-link" href="#"><i class="fa fa-users" aria-hidden="true"></i>  Employment</a></li>
                <li><a class="nav-link tele-nav-link" href="#"><i class="fa fa-calendar" aria-hidden="true"></i>  Attendance and Leave</a></li>
                <li><a class="nav-link tele-nav-link" href="#"><i class="fa fa-file" aria-hidden="true"></i>  Provident Fund</a></li>
                <li><a class="nav-link tele-nav-link" href="#"><i class="fa fa-tasks" aria-hidden="true"></i>  Recruitment</a></li>
            </ul>
        </div>
    </nav>
</header>
