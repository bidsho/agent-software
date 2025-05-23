<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <meta name="description" content="Admin Dashboard - Hotel Booking System">
    <title>Property  Dashboard</title>

    <!-- Main Styles -->
    <link href="/adminassets/css/digital_forest_team_assets_main.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Custom Styles -->
    <style>
        .arrow {
            border: solid #09dcdf;
            border-width: 0 3px 3px 0;
            display: inline-block;
            padding: 3px;
        }
        .down {
            transform: rotate(45deg);
        }
        .alert {
            padding: 20px;
            background-color: orange;
            color: white;
        }
        .closebtn {
            float: right;
            font-size: 22px;
            font-weight: bold;
            color: white;
            cursor: pointer;
        }
        .closebtn:hover {
            color: black;
        }
    </style>
</head>
<body>
<div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

    {{-- Header --}}
    <div class="app-header header-shadow" style="background-color: #09dcdf;">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                <span class="hamburger-box"><span class="hamburger-inner"></span></span>
            </button>
        </div>
        <div class="app-header__mobile-menu">
            <button class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box"><span class="hamburger-inner"></span></span>
            </button>
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
            </div>
            <div class="app-header-right">
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0 d-flex align-items-center">
                        <img width="42" class="rounded-circle" src="/images/thumbnails/anonymous-user.jpg" alt="User">
                        <i class="bi bi-person-circle ms-2 fs-4" style="color: white;"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- Sidebar --}}
    <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
            <div class="scrollbar-sidebar">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Dashboard</li>
                        <li><a href="{{ url('/admin/admin-home') }}" class="mm-active"><i class="bi bi-speedometer2"></i>  Home</a></li>

                        <li class="app-sidebar__heading">Management</li>

                        {{-- Propert --}}
                        <li>
                            <a href="#"><i class="bi bi-calendar-check-fill"></i> Property <i class="arrow down"></i></a>
                            <ul>
                                <li><a href="{{ url('/admin/admin-create-property') }}">Add Property</a></li>
                                <li><a href="{{ url('/admin/admin-view-property') }}">View Property</a></li>
                               
                            </ul>
                        </li>

                                                <li>
                            <a href="#"><i class="bi bi-calendar-check-fill"></i> Inquiry <i class="arrow down"></i></a>
                            <ul>
                                
                                <li><a href="{{ url('/admin/admin-view-inquiry') }}">View Inquiry</a></li>
                               
                            </ul>
                        </li>
                       

                        {{-- Users --}}
                        <li>
                            <a href="#"><i class="bi bi-people-fill"></i> Users <i class="arrow down"></i></a>
                            <ul>
                                <li><a href="{{ url('/admin/all-user') }}">All Users</a></li>
                                {{-- <li><a href="{{ url('/admin/user-feedback') }}">User Feedback</a></li> --}}
                            </ul>
                        </li>

                       

                        

                        {{-- Settings --}}
                        {{-- <li class="app-sidebar__heading">Settings</li>
                        <li><a href="{{ url('/admin/site-settings') }}"><i class="bi bi-gear-fill"></i> Site Settings</a></li> --}}
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="w-full">
                                @csrf
                                <button type="submit" class="btn btn-link text-start w-100" style="padding: 10px 20px; display: flex; align-items: center; color: #495057; text-decoration: none;">
                                    <i class="bi bi-box-arrow-right me-2" style="font-size: 1.2rem;"></i> Log Out
                                </button>
                            </form>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>

        {{-- Main Content --}}
        <div class="app-main__outer">
            <div class="app-main__inner">
                @yield('content')
            </div>

            {{-- Footer --}}
            <div class="app-wrapper-footer">
                <div class="app-footer">
                    <div class="app-footer__inner justify-content-end">
                        <ul class="nav">
                            <li class="nav-item">
                                <i class="bi bi-power" style="color: orange;"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Scripts --}}
<script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
<script src="/adminassets/js/main.js"></script>
</body>
</html>
