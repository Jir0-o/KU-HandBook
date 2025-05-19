{{--
    <!--
        Author: Unicorn Software and Solutions Bangladesh LTD
        Client: Khulna University
        Project: Handbook Software Webpage
        Description: This webpage provides an interactive interface for users to manage and access the handbook software.
        Date: June 2024
        Contact: ku.ac.bd || ussbd.com || info@ussbd.com
    -->
--}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KU - Khulna University</title>
    <link rel="shortcut icon" href="{{asset('template/assets/img/logo/ku.png')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('template/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('template/assets/css/style.css')}}" />
    <!-- icons -->
    <link rel="stylesheet" href="{{asset('template/fonts/remixicon.css')}}" />
    <script src="{{asset('template/assets/js/jquery-3.7.1.min.js')}}"></script>
</head>

<body>
    <!-- nav bar section start -->

    <div class="fixed">
        <div class="navbar p-0">
            <nav class="nav-top-content py-2">
                <div class="d-flex justify-content-between align-items-center container-sm">
                    <div class="nav-icon-group">
                        <a href="#" class="nav-social-box">
                            <i class="ri-youtube-fill"></i>
                        </a>
                        <a href="#" class="nav-social-box">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="#" class="nav-social-box">
                            <i class="ri-twitter-fill"></i>
                        </a>
                        <a href="#" class="nav-social-box">
                            <i class="ri-whatsapp-fill"></i>
                        </a>
                    </div>
                    <div class="nav-entry-btn-group">
                        <a href="{{ route('login') }}" class="btn btn-reg">
                            Login
                        </a>
                        {{-- <a href="{{ route('register') }}" class="btn btn-reg">
                            Registration
                        </a> --}}
                    </div>
                </div>
            </nav>
        </div>
        <div class="navbar">
            <nav class="container-sm d-inline-block">
                <div class="nav-content">
                    <div class="nav-start-content">
                        <div class="nav-logo">
                            <a href="./">
                                <img src="{{ asset('global_assets/images/logo.webp') }}" alt="IGSK Logo" loading="lazy">
                            </a>
                        </div>
                    </div>
                    <div class="nav-end-content" id="sidebarContent">
                        <div class="nav-menubar">
                            <ul class="m-auto">
                                <a href="./">
                                    <li>HOME</li>
                                </a>
                                <a href="#about_us">
                                    <li>ABOUT US</li>
                                </a>
                                <a href="#process">
                                    <li>WORK PROCESS</li>
                                </a>
                                {{-- <a href="#faculty">
                                    <li>FACULTY</li>
                                </a> --}}
                                <a href="#goal">
                                    <li>GOAL</li>
                                </a>
                                <a href="#benefit">
                                    <li>BENEFIT</li>
                                </a>
                                {{-- <a href="#gallery">
                                    <li>GALLERY</li>
                                </a> --}}
                                <a href="#faq">
                                    <li>FAQ’S</li>
                                </a>
                                <div class="dropdown open">
                                    <a class="dropdown-toggle" type="button" id="triggerId" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                        Browse by
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="triggerId">
                                        @foreach($schools as $school)
                                            <div class="dropdown-item mt-1 p-0 btm-border-effect">
                                                <div class="sub-dropdown-main position-relative">
                                                    <i class="ri-arrow-left-s-line"></i> {{ $school->name }}
                                                    <ul class="sub-dropdown-items-r py-2">
                                                        @foreach($school->disciplines as $discipline)
                                                            <li class="dropdown-item mt-1 p-0 btm-border-effect">
                                                                <div class="subchild-dropdown-main position-relative">
                                                                    <i class="ri-arrow-left-s-line"></i> {{ $discipline->name }}
                                                                    <ul class="subchild-dropdown-items py-2">
                                                                        @foreach($discipline->degreePrograms as $degreeProgram)
                                                                            <li><a href="{{ route('discipline', ['id' => $degreeProgram->id]) }}" class="dropdown-item">{{ $degreeProgram->degree }}</a></li>
                                                                        @endforeach

                                                                    </ul>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="dropdown-item mt-1 p-0 btm-border-effect">
                                            <div class="sub-dropdown-main position-relative">
                                                <i class="ri-arrow-left-s-line"></i> Course
                                                <ul class="sub-dropdown-items-r py-2">
                                                    <li class="dropdown-item mt-1 p-0 btm-border-effect">
                                                        <div class="subchild-dropdown-main position-relative">
                                                            <i class="ri-arrow-left-s-line"></i> Program Name
                                                            <ul class="subchild-dropdown-items py-2">
                                                                <li><a href="#" class="dropdown-item">2H Quick Learning</a></li>
                                                                <li><a href="#" class="dropdown-item">360H Trade course</a></li>
                                                                <li><a href="#" class="dropdown-item">2Y Diploma</a></li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </ul>
                        </div>
                    </div>
                    <div class="burgar-icon">
                        <button class="btn" id="toggleSideBar" href="javascript:void(0);">
                            <span class="menu-icon">
                                <i class="ri-menu-2-fill"></i>
                            </span>
                        </button>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <div class="nav-gap-element"></div>
