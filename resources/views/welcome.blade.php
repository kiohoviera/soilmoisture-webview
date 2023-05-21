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
                            <div class="nav-item navbar-search-wrapper mb-0" style="color: white">
                               <strong>SOIL MONITORING SYSTEM</strong>
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
                    <div class="row">
                        <div class="col-md-12" id="alert1" style="display: none">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <div id="alert_content_1"></div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="col-md-12" id="alert2" style="display: none">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <div id="alert_content_2"></div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="col-md-12" id="alert3" style="display: none">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <div id="alert_content_3"></div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                        <div class="col-md-12" id="alert4" style="display: none">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <div id="alert_content_4"></div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-info"><i class="bx bxs-coffee-bean fs-3"></i></span>
                                    </div>
                                    <h4 class="d-block mb-1 text-nowrap"><strong>{{ $channel['field1'][0] }}</strong></h4>
                                    <span class="d-block mb-1 text-nowrap">{{ $channel['field1'] }}</span>
                                    <h4 class="mb-0" id="feed1">
                                        loading...
{{--                                        @php--}}
{{--                                        $url = Http::get('https://api.thingspeak.com/channels/2061897/fields/1.json?api_key=2WJYSFAYEKJ6XPRV&results=1');--}}
{{--                                        $res = $url->json();--}}
{{--                                        echo number_format($res['feeds'][0]['field1']);--}}
{{--                                        @endphp--}}
                                    </h4>
                                    <p id="feed1_status"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bxs-shower fs-3"></i></span>
                                    </div>
                                    <h4 class="d-block mb-1 text-nowrap"><strong>{{ $channel['field2'][0] }}</strong></h4>
                                    <span class="d-block mb-1 text-nowrap">{{ $channel['field2'] }}</span>
                                    <h2 class="mb-0" id="feed2">
                                        loading...
                                    </h2>
                                    <p id="feed2_status"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bxs-lemon fs-3"></i></span>
                                    </div>
                                    <h4 class="d-block mb-1 text-nowrap"><strong>{{ "K" }}</strong></h4>
                                    <span class="d-block mb-1 text-nowrap">{{ $channel['field3'] }}</span>
                                    <h2 class="mb-0" id="feed3">
                                        loading...
                                    </h2><span id="feed3_status"></span>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6 mb-4">
                            <div class="card">
                                <div class="card-body text-center">
                                    <div class="avatar avatar-md mx-auto mb-3">
                                        <span class="avatar-initial rounded-circle bg-label-primary"><i class="bx bx-cube fs-3"></i></span>
                                    </div>
                                    <h4 class="d-block mb-1 text-nowrap">&nbsp;</h4>
                                    <span class="d-block mb-1 text-nowrap">{{ $channel['field4'] }}</span>
                                    <h2 class="mb-0" id="feed4">
                                        loading...
                                    </h2>
                                    <span id="feed4_status"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" onclick="window.location.href='/logs'">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">
                                        Identified Stages
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <img src="" id="identified_img" alt="identified_image" class="img img-fluid" />
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-6 mt-3">
                                            <h5>
                                                <strong>Stage: </strong> <div id="stage"></div>
                                            </h5>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <h5>
                                                <strong>Height: </strong> <div id="measurement"></div>CM
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<script>
    $(document).ready(function () {
        let customAlert = new CustomAlert();
        async function getdata1() {
            const response = await fetch('https://api.thingspeak.com/channels/2061897/fields/1.json?api_key=2WJYSFAYEKJ6XPRV&results=1')
            jsonData = await response.json();
            let feed = jsonData['feeds'][0]['field1']

            $("#feed1").html(feed + " mg/kg")

            if (feed === 255){
                customAlert.alert("The voltage must be between 12 and 20 volts", "No Reading")
            }

            if (feed === 0){
                customAlert.alert("Charge the battery and make sure that the voltage is greater than 12 volts", "No Reading")
            }

            if (feed>= 10 && feed <= 20){
                $("#feed1_status").html("Average");
                $("#feed1_status").css("color", "yellow");
            }
           else if (feed>= 1 && feed<= 10){
                $("#feed1_status").html("Below Average");
                $("#feed1_status").css("color", "red");
                $("#alert1").css("display", "block");
                $("#alert_content_1").html('Please increase the nitrogen nutrient to the soil like adding Ammonium sulfate or other high nitrogen fertilizer');

            }
            else if (feed>= 20 && feed<= 300){
                $("#feed1_status").html("Good");
                $("#feed1_status").css("color", "green");
            }

            console.log(jsonData['feeds'][0]['field1']);
        }

        async function getdata2() {
            const response = await fetch('https://api.thingspeak.com/channels/2061897/fields/2.json?api_key=2WJYSFAYEKJ6XPRV&results=1')
            let jsonData = await response.json();
            let feed = jsonData['feeds'][0]['field2']

            $("#feed2").html(feed + " mg/kg")

            if (feed === 255){
                customAlert.alert("The voltage must be between 12 and 20 volts", "No Reading")
            }

            if (feed === 0){
                customAlert.alert("Put the NPK Sensor in the Soil", "No Reading")
            }

            if (feed>= 20 && feed<= 40){
                $("#feed2_status").html("Average");
                $("#feed2_status").css("color", "yellow");
            }
            else if(feed>= 1 && feed<= 20){
                $("#feed2_status").html("Below Average");
                $("#feed2_status").css("color", "red");

                $("#alert2").css("display", "block");
                $("#alert_content_2").html('Please increase the phosphorous nutrient to the soil like adding Di-ammonium phosphate (DAP) or other high phosphorus fertilizer');
            }
            else if(feed>= 40 && feed<= 100){
                $("#feed2_status").html("Good");
                $("#feed2_status").css("color", "green");
            }
            console.log(jsonData['feeds'][0]['field2']);
        }

        async function getdata3() {
            const response = await fetch('https://api.thingspeak.com/channels/2061897/fields/3.json?api_key=2WJYSFAYEKJ6XPRV&results=1')
            let jsonData = await response.json();
            let feed = jsonData['feeds'][0]['field3']
            $("#feed3").html(feed + " mg/kg")

            if (feed === 255){
                customAlert.alert("The voltage must be between 12 and 20 volts", "No Reading")
            }

            if (feed === 0){
                customAlert.alert("Put the NPK Sensor in the Soil", "No Reading")
            }

            if (feed>= 150 && feed<= 250){
                $("#feed3_status").html("Average");
                $("#feed3_status").css("color", "yellow");
            }
            else if(feed>= 1 && feed<= 150){
                $("#feed3_status").html("Below Average");
                $("#feed3_status").css("color", "red");

                $("#alert3").css("display", "block");
                $("#alert_content_3").html('Please increase the potassium nutrient to the soil like adding Potassium Chloride or other high potassium fertilizer');

            }
            else if(feed>= 250 && feed<= 800){
                $("#feed3_status").html("Good");
                $("#feed3_status").css("color", "green");
            }
            console.log(jsonData['feeds'][0]['field3']);
        }

        async function getdata4() {
            const response = await fetch('https://api.thingspeak.com/channels/2061897/fields/4.json?api_key=2WJYSFAYEKJ6XPRV&results=1')
            let jsonData = await response.json();
            let feed = jsonData['feeds'][0]['field4']
            $("#feed4").html(feed + " %")

            if (feed === 0){
                customAlert.alert("Please put the moisture Sensor to the soil", "No Reading")
            }
            if (feed>= 21 && feed<= 50){
                $("#feed4_status").html("Dry");
                $("#feed4_status").css("color", "red");

                $("#alert4").css("display", "block");
                $("#alert4").html('Please water the soil');
            }
            else if(feed>= 0 && feed<= 40){
                $("#feed4_status").html("Dry");
                $("#feed4_status").css("color", "red");

                $("#alert4").css("display", "block");
                $("#alert_content_4").html('The sensor detecting moisture from air');

            }
            else if(feed>= 51 && feed<= 300){
                $("#feed4_status").html("Wet");
                $("#feed4_status").css("color", "green");
            }
            console.log(jsonData['feeds'][0]['field4']);
        }

        async function getSoil() {
            const response = await fetch('/getData')
            let jsonData = await response.json();
            let stage = jsonData['stage'];
            let measurement = jsonData['measurement'];
            let upload_file = jsonData['upload_file'];

            $("#stage").html(stage)
            $("#measurement").html(measurement)


            $("#identified_img").attr('src', upload_file)

        }
        getdata1();
        getdata2();
        getdata3();
        getdata4();
        getSoil();

        setInterval(function (){
            getdata1();
            getdata2();
            getdata3();
            getdata4();
            getSoil();
        }, 60000)

    })
</script>
</body>
</html>
