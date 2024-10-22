{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



<?php
 $explode = explode('/',$_SERVER['PHP_SELF']);
     $link = end($explode);
?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Siam Hossain Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="stylesheet" href="{{ asset('dashboard') }}/assets/css/base.min.css">

    <script src="https://cdn.tiny.cloud/1/egjxomn6m2xfhhd05yp23peyjb0dbayxioen2ahaqvdirms4/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>


</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        <!--Header START-->
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                    <ul class="header-megamenu nav">
                        <li class="nav-item">


                        </li>
                        <li class="btn-group nav-item">
                            <a class="nav-link" data-toggle="dropdown" aria-expanded="false">
                                <span class="badge badge-pill badge-danger ml-0 mr-2">4</span> Settings
                                <i class="fa fa-angle-down ml-2 opacity-5"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-secondary">
                                        <div class="menu-header-image opacity-5" style="background-image: url('{{ asset('dashboard') }}/assets/images/dropdown-header/abstract2.jpg');"></div>
                                        <div class="menu-header-content">
                                            <h5 class="menu-header-title">Overview</h5>
                                            <h6 class="menu-header-subtitle">Dropdown menus for everyone</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="scroll-area-xs">
                                    <div class="scrollbar-container">
                                        <h6 tabindex="-1" class="dropdown-header">Key Figures</h6>
                                        <button type="button" tabindex="0" class="dropdown-item">Service Calendar</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Knowledge Base</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Accounts</button>
                                        <div tabindex="-1" class="dropdown-divider"></div>
                                        <button type="button" tabindex="0" class="dropdown-item">Products</button>
                                        <button type="button" tabindex="0" class="dropdown-item">Rollup Queries</button>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item-btn nav-item">
                                        <button class="btn-wide btn-shadow btn btn-danger btn-sm">Cancel</button>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="dropdown nav-item">
                            <a aria-haspopup="true" data-toggle="dropdown" class="nav-link" aria-expanded="false">
                                <i class="nav-link-icon pe-7s-settings"></i> Projects
                                <i class="fa fa-angle-down ml-2 opacity-5"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-rounded dropdown-menu-lg rm-pointers dropdown-menu">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-success">
                                        <div class="menu-header-image opacity-1" style="background-image: url('{{ asset('dashboard') }}/assets/images/dropdown-header/abstract3.jpg');"></div>
                                        <div class="menu-header-content text-left">
                                            <h5 class="menu-header-title">Overview</h5>
                                            <h6 class="menu-header-subtitle">Unlimited options</h6>
                                            <div class="menu-header-btn-pane">
                                                <button class="mr-2 btn btn-dark btn-sm">Settings</button>
                                                <button class="btn-icon btn-icon-only btn btn-warning btn-sm">
                                                <i class="pe-7s-config btn-icon-wrapper"></i>
                                            </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i>Graphic Design</button>
                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i>App Development</button>
                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i>Icon Design</button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i>Miscellaneous</button>
                                <button type="button" tabindex="0" class="dropdown-item"><i class="dropdown-icon lnr-file-empty"> </i>Frontend Dev</button>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="app-header-right">
                    <div class="header-dots">
                        <div class="dropdown">
                            <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                            <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                <span class="icon-wrapper-bg bg-primary"></span>
                                <i class="icon text-primary ion-android-apps"></i>
                            </span>
                        </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-plum-plate">
                                        <div class="menu-header-image" style="background-image: url('{{ asset('dashboard') }}/assets/images/dropdown-header/abstract4.jpg');"></div>
                                        <div class="menu-header-content text-white">
                                            <h5 class="menu-header-title">Grid Dashboard</h5>
                                            <h6 class="menu-header-subtitle">Easy grid navigation inside dropdowns</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid-menu grid-menu-xl grid-menu-3col">
                                    <div class="no-gutters row">
                                        <div class="col-sm-6 col-xl-4">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                            <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                            Automation
                                        </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                            <i class="pe-7s-piggy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                            Reports
                                        </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                            <i class="pe-7s-config icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                            Settings
                                        </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                            <i class="pe-7s-browser icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                            Content
                                        </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                            <i class="pe-7s-hourglass icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                            Activity
                                        </button>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                            <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                            Contacts
                                        </button>
                                        </div>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item-btn text-center nav-item">
                                        <button class="btn-shadow btn btn-primary btn-sm">Follow-ups</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        {{--  --}}

                        <div class="dropdown">
                            <button type="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false" class="p-0 btn btn-link dd-chart-btn">
                            <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                <span class="icon-wrapper-bg bg-success"></span>
                                <i class="icon text-success ion-ios-analytics"></i>
                            </span>
                        </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner bg-premium-dark">
                                        <div class="menu-header-image" style="background-image: url('{{ asset('dashboard') }}/assets/images/dropdown-header/abstract4.jpg');"></div>
                                        <div class="menu-header-content text-white">
                                            <h5 class="menu-header-title">Users Online
                                            </h5>
                                            <h6 class="menu-header-subtitle">Recent Account Activity Overview
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-chart">
                                    <div class="widget-chart-content">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-9 bg-focus">
                                            </div>
                                            <i class="lnr-users text-white">
                                        </i>
                                        </div>
                                        <div class="widget-numbers">
                                            <span>344k</span>
                                        </div>
                                        <div class="widget-subheading pt-2">
                                            Profile views since last login
                                        </div>
                                        <div class="widget-description text-danger">
                                            <span class="pr-1">
                                            <span>176%</span>
                                            </span>
                                            <i class="fa fa-arrow-left"></i>
                                        </div>
                                    </div>
                                    <div class="widget-chart-wrapper">
                                        <div id="dashboard-sparkline-carousel-3-pop"></div>
                                    </div>
                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider mt-0 nav-item">
                                    </li>
                                    <li class="nav-item-btn text-center nav-item">
                                        <button class="btn-shine btn-wide btn-pill btn btn-warning btn-sm">
                                        <i class="fa fa-cog fa-spin mr-2">
                                        </i>
                                        View Details
                                    </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" height="42" class="rounded-circle object-fit-cover" src="{{ asset('uploads/profiles/') }}/{{auth()->user()->image}}" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('{{ asset('dashboard') }}/assets/images/dropdown-header/city3.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" height="42" class="rounded-circle object-fit-cover" src="{{ asset('uploads/profiles/') }}/{{auth()->user()->image}}" alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">{{auth()->user()->name}}
                                                                    </div>
                                                                    <div class="widget-subheading opacity-8">{{auth()->user()->email}}
                                                                    </div>
                                                                </div>
                                                                <form action="{{ route('logout') }}" method="POST" >
                                                                    @csrf
                                                                    <div class="widget-content-right mr-2">
                                                                    <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                </button>
                                                                </div>
                                                                </form>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs" style="height: 150px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activity
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Chat
                                                            <div class="ml-auto badge badge-pill badge-info">8
                                                            </div>
                                                        </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Recover Password
                                                        </a>
                                                        </li>
                                                        <li class="nav-item-header nav-item">My Account
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Settings
                                                            <div class="ml-auto badge badge-success">New
                                                            </div>
                                                        </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Messages
                                                            <div class="ml-auto badge badge-warning">512
                                                            </div>
                                                        </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Logs
                                                        </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mb-0 nav-item"></li>
                                            </ul>
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                        <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                        Message Inbox
                                                    </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                        <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                        <b>Support Tickets</b>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn btn-primary btn-sm">
                                                    Open Messages
                                                </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{auth()->user()->name}}
                                    </div>
                                    <div class="widget-subheading">
                                        {{auth()->user()->email}}
                                    </div>
                                </div>
                                {{-- <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                    <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                </button>
                                </div> --}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Header END-->
        <!--THEME OPTIONS START-->

        <!--THEME OPTIONS END-->
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
               <div class="app-header__logo">
                    {{-- <div class="logo-src"></div> --}}
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                    </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Menu</li>
                            <li class="{{($link == 'home') ? 'mm-active':''}}">
                                <a href="{{ route('home') }}" class=" {{($link == 'home') ? 'mm-active':''}}">
                                    <i class="metismenu-icon pe-7s-graph">
                                    </i>Dashboard
                                </a>
                            </li>
                            <li class="{{($link == 'profile') ? 'mm-active':''}}">
                                <a href="{{ route('profile.index') }}" class="{{($link == 'profile') ? 'mm-active':''}}">
                                    <i class="metismenu-icon pe-7s-graph">
                                    </i>Profile
                                </a>
                            </li>
                            <li class="{{($link == 'user_manage') ? 'mm-active':''}}
                             {{ auth()->user()->role == 'admin' || auth()->user()->role == 'manager' ? '' : 'd-none' }}" >
                                <a href="{{ route('user_manage') }}" class="{{($link == 'user_manage') ? 'mm-active':''}}">
                                    <i class="metismenu-icon pe-7s-graph">
                                    </i>User Management
                                </a>
                            </li>
                            <li class="{{($link == 'category') ? 'mm-active':''}}">
                                <a href="{{ route('category.index') }}" class="{{($link == 'category') ? 'mm-active':''}}">
                                    <i class="metismenu-icon pe-7s-graph">
                                    </i>Category
                                </a>
                            </li>
                            <li class="{{($link == 'blog') ? 'mm-active':''}}">
                                <a href="{{ route('blog.index') }}" class="{{($link == 'blog') ? 'mm-active':''}}">
                                    <i class="metismenu-icon pe-7s-graph">
                                    </i>Blogs
                                </a>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="metismenu-icon pe-7s-browser"></i> Pages
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="login.html">
                                            <i class="metismenu-icon"></i> Login
                                        </a>
                                    </li>
                                    <li>
                                        <a href="login-boxed.html">
                                            <i class="metismenu-icon">
                                            </i>Login Boxed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="register.html">
                                            <i class="metismenu-icon">
                                            </i>Register
                                        </a>
                                    </li>
                                    <li>
                                        <a href="register-boxed.html">
                                            <i class="metismenu-icon">
                                            </i>Register Boxed
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forgot-password.html">
                                            <i class="metismenu-icon">
                                            </i>Forgot Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="forgot-password-boxed.html">
                                            <i class="metismenu-icon">
                                            </i>Forgot Password Boxed
                                        </a>
                                    </li>
                                </ul>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer ml-3">

                @yield("content")

            </div>
        </div>
    </div>
    <!--DRAWER START-->

    <!--DRAWER END-->

    <!--SCRIPTS INCLUDES-->

    <!--CORE-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/metismenu"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/app.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/demo.js"></script>

    <!--CHARTS-->

    <!--Apex Charts-->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/charts/apex-charts.js"></script>

    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/charts/apex-charts.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/charts/apex-series.js"></script>

    <!--Sparklines-->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/charts/charts-sparklines.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/charts/charts-sparklines.js"></script>

    <!--Chart.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/charts/chartsjs-utils.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/charts/chartjs.js"></script>

    <!--FORMS-->

    <!--Clipboard-->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/clipboard.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/clipboard.js"></script>

    <!--Datepickers-->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/datepicker.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/daterangepicker.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/moment.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/datepicker.js"></script>

    <!--Multiselect-->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/bootstrap-multiselect.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/input-select.js"></script>

    <!--Form Validation-->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/form-validation.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/form-validation.js"></script>

    <!--Form Wizard-->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/form-wizard.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/form-wizard.js"></script>

    <!--Input Mask-->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/input-mask.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/input-mask.js"></script>

    <!--RangeSlider-->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/wnumb.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/range-slider.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/range-slider.js"></script>

    <!--Textarea Autosize-->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/textarea-autosize.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/form-components/textarea-autosize.js"></script>

    <!--Toggle Switch -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/form-components/toggle-switch.js"></script>


    <!--COMPONENTS-->

    <!--BlockUI -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/blockui.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/blockui.js"></script>

    <!--Calendar -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/calendar.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/calendar.js"></script>

    <!--Slick Carousel -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/carousel-slider.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/carousel-slider.js"></script>

    <!--Circle Progress -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/circle-progress.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/circle-progress.js"></script>

    <!--CountUp -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/count-up.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/count-up.js"></script>

    <!--Cropper -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/cropper.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/vendors/jquery-cropper.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/image-crop.js"></script>

    <!--Maps -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/gmaps.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/vendors/jvectormap.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/maps-word-map.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/maps.js"></script>

    <!--Guided Tours -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/guided-tours.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/guided-tours.js"></script>

    <!--Ladda Loading Buttons -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/ladda-loading.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/vendors/spin.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/ladda-loading.js"></script>

    <!--Rating -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/rating.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/rating.js"></script>

    <!--Perfect Scrollbar -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/scrollbar.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/scrollbar.js"></script>

    <!--Toastr-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/toastr.js"></script>

    <!--SweetAlert2-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="{{ asset('dashboard') }}/assets/js/scripts-init/sweet-alerts.js"></script> --}}

    <!--Tree View -->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/treeview.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/treeview.js"></script>


    <!--TABLES -->
    <!--DataTables-->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/datatables.net-bs4@1.10.19/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js" crossorigin="anonymous"></script>

    <!--Bootstrap Tables-->
    <script src="{{ asset('dashboard') }}/assets/js/vendors/tables.js"></script>

    <!--Tables Init-->
    <script src="{{ asset('dashboard') }}/assets/js/scripts-init/tables.js"></script>

    @yield('script')

</body>

</html>
