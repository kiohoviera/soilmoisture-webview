<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{ asset('assets') }}/"
    data-template="vertical-menu-template-no-customizer"
>
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets') }}/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/css/rtl/core.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/css/rtl/theme-default.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="{{ asset('custom-alert.css') }}" />
    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('assets') }}/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('assets') }}/js/config.js"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        <!-- Menu -->

        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar"
                 style="background-color: teal !important; color: black; height: 4.25rem">
                <div class="container-fluid">


                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item navbar-search-wrapper mb-0">
                                <a href="/">
                                    <i class="bx bx-left-arrow-alt" style="font-size: 2.15rem; margin-right: 12px; color: white"></i>
                                </a>
                                <strong style="color: white">SOIL MONITORING SYSTEM</strong>
                            </div>
                        </div>
                        <!-- /Search -->
                    </div>

                    <!-- Search Small Screens -->
                    <div class="navbar-search-wrapper search-input-wrapper d-none">
                        <input
                            type="text"
                            class="form-control search-input container-fluid border-0"
                            placeholder="Search..."
                            aria-label="Search..."
                        />
                        <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                    </div>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="demo-inline-spacing mt-3">
                        <div class="list-group">
                            @foreach($detection as $logs)
                                <a href="javascript:void(0);" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex justify-content-between w-100">
                                        <h6 class="mb-2">Stage: {{ str_replace("_", " ", $logs->stage) }}</h6>
                                        <small>{{ \Illuminate\Support\Carbon::parse($logs->created_at)->diffForHumans() }}</small>
                                    </div>
                                    <p class="mb-1"><strong>Height: </strong>{{ number_format($logs->measurement, 2) . "cm" }}</p>
                                    <p class="mb-1"><strong>Remarks: </strong>{{ $logs->remarks }}</p>
                                    <p class="mb-1"><strong>Date & Time: </strong>{{ $logs->remarks }}</p>
                                </a>
                            @endforeach

                        </div>
                    </div>


                </div>
                <!-- / Content -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('assets') }}/vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('assets') }}/vendor/libs/popper/popper.js"></script>
<script src="{{ asset('assets') }}/vendor/js/bootstrap.js"></script>
<script src="{{ asset('assets') }}/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{ asset('assets') }}/vendor/libs/hammer/hammer.js"></script>

<script src="{{ asset('assets') }}/vendor/libs/i18n/i18n.js"></script>
<script src="{{ asset('assets') }}/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="{{ asset('assets') }}/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('assets') }}/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{ asset('assets') }}/js/main.js"></script>
<!-- Page JS -->
<script src="{{ asset('assets') }}/js/dashboards-analytics.js"></script>
<script src="{{ asset('alert.js') }}"></script>
</body>
</html>
