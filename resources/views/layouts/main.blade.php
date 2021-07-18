<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    @include('components.header')
</head>
<body>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
     data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
    @include('components.top-bar')
    @include('components.left-bar')
    <div class="page-wrapper">
        @yield('breadcrumbs')
        @yield('content')
        @include('components.footer')
    </div>
</div>
@include('components.footer-js')
@yield('extras')
</body>
</html>
