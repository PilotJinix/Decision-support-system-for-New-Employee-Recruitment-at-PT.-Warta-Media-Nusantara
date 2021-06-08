<!DOCTYPE html>
<html lang="id" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ventic : Ticketing Admin Template" />
    <meta property="og:title" content="Ventic : Ticketing Admin Template" />
    <meta property="og:description" content="Ventic : Ticketing Admin Template" />
    <meta property="og:image" content=""/>
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Ventic : Ticketing Admin Template</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{asset("assets/images/favicon.png")}}" />

    <!-- Datatable -->
    <link href="{{asset("assets/vendor/datatables/css/jquery.dataTables.min.css")}}" rel="stylesheet">

    <link href="{{asset("assets/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/jquery-nice-select/css/nice-select.css")}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("assets/vendor/chartist/css/chartist.min.css")}}">
    <!-- Style css -->
    <link href="{{asset("assets/vendor/fullcalendar/css/main.min.css")}}" rel="stylesheet">
    <link href="{{asset("assets/vendor/jquery-nice-select/css/nice-select.css")}}" rel="stylesheet">
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">

</head>

<body>
<div id="main-wrapper">
    <!--**********************************
       Nav header start
   ***********************************-->
    <div class="nav-header">
        <a href="{{route("dashboard")}}" class="brand-logo">
            <!-- <img class="logo-abbr" src="./images/logo.png" alt="">
            <div class="brand-title">Ventic</div> -->
            <svg class="logo-abbr"  width="54" height="54" viewBox="0 0 54 54" fill="none">
                <rect class="svg-logo-rect" width="54" height="54" rx="14" fill="#0E8A74"/>
                <path class="svg-logo-path" d="M13 17H24.016L31.802 34.544L38.33 17H40.948L31.972 40.8H23.54L13 17Z" fill="white"/>
            </svg>
            <svg  class="brand-title" width="97" height="25" fill="none" ><path class="svg-logo-text" d="M20.88 3.06L13.2 24H8.1L.42 3.06h4.5l5.76 16.65 5.73-16.65h4.47zm17.968 12.27c0 .6-.04 1.14-.12 1.62h-12.15c.1 1.2.52 2.14 1.26 2.82s1.65 1.02 2.73 1.02c1.56 0 2.67-.67 3.33-2.01h4.53c-.48 1.6-1.4 2.92-2.76 3.96-1.36 1.02-3.03 1.53-5.01 1.53-1.6 0-3.04-.35-4.32-1.05-1.26-.72-2.25-1.73-2.97-3.03-.7-1.3-1.05-2.8-1.05-4.5 0-1.72.35-3.23 1.05-4.53s1.68-2.3 2.94-3 2.71-1.05 4.35-1.05c1.58 0 2.99.34 4.23 1.02 1.26.68 2.23 1.65 2.91 2.91.7 1.24 1.05 2.67 1.05 4.29zm-4.35-1.2c-.02-1.08-.41-1.94-1.17-2.58-.76-.66-1.69-.99-2.79-.99-1.04 0-1.92.32-2.64.96-.7.62-1.13 1.49-1.29 2.61h7.89zm16.626-6.99c1.98 0 3.58.63 4.8 1.89 1.22 1.24 1.83 2.98 1.83 5.22V24h-4.2v-9.18c0-1.32-.33-2.33-.99-3.03-.66-.72-1.56-1.08-2.7-1.08-1.16 0-2.08.36-2.76 1.08-.66.7-.99 1.71-.99 3.03V24h-4.2V7.38h4.2v2.07c.56-.72 1.27-1.28 2.13-1.68.88-.42 1.84-.63 2.88-.63zm15.514 3.69v8.04c0 .56.13.97.39 1.23.28.24.74.36 1.38.36h1.95V24h-2.64c-3.54 0-5.31-1.72-5.31-5.16v-8.01h-1.98V7.38h1.98V3.27h4.23v4.11h3.72v3.45h-3.72zm8.871-5.43c-.74 0-1.36-.23-1.86-.69-.48-.48-.72-1.07-.72-1.77s.24-1.28.72-1.74c.5-.48 1.12-.72 1.86-.72s1.35.24 1.83.72c.5.46.75 1.04.75 1.74s-.25 1.29-.75 1.77c-.48.46-1.09.69-1.83.69zm2.07 1.98V24h-4.2V7.38h4.2zm3.07 8.31c0-1.72.35-3.22 1.05-4.5.7-1.3 1.67-2.3 2.91-3 1.24-.72 2.66-1.08 4.26-1.08 2.06 0 3.76.52 5.1 1.56 1.36 1.02 2.27 2.46 2.73 4.32h-4.53c-.24-.72-.65-1.28-1.23-1.68-.56-.42-1.26-.63-2.1-.63-1.2 0-2.15.44-2.85 1.32-.7.86-1.05 2.09-1.05 3.69 0 1.58.35 2.81 1.05 3.69.7.86 1.65 1.29 2.85 1.29 1.7 0 2.81-.76 3.33-2.28h4.53c-.46 1.8-1.37 3.23-2.73 4.29s-3.06 1.59-5.1 1.59c-1.6 0-3.02-.35-4.26-1.05-1.24-.72-2.21-1.72-2.91-3-.7-1.3-1.05-2.81-1.05-4.53z" fill="#194039"/>
            </svg>
        </a>
        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->


    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-end">
                    <div class="header-right">
                        <div class="nav-item dropdown header-profile">
                            <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                <div class="header-info me-3">
                                    <span class="fs-16 font-w600 ">{{$akun-> username}}</span>
                                    <small class="text-end fs-14 font-w400">Super Admin</small>
                                </div>
                                <img src="{{asset("assets/images/profile/admin.png")}}" width="20" alt=""/>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <span class="ms-2">Profile </span>
                                </a>
                                <a href="#" class="dropdown-item ai-icon">
                                    <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                    <span class="ms-2">Inbox </span>
                                </a>
                                <a href="{{route('logout')}}" class="dropdown-item ai-icon">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ms-2">Logout </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-025-dashboard"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route("calonpenerima")}}">Data calon Penerima</a></li>
                        <li><a href="#">Data Penerima</a></li>
                        <li><a href="#">Data Reviews</a></li>
                    </ul>

                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-013-checkmark"></i>
                        <span class="nav-text">Kriteria</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route("benefit")}}">Data Benefit</a></li>
                    </ul>
                </li>
                <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                        <i class="flaticon-022-copy"></i>
                        <span class="nav-text">Sistem SAW</span>
                    </a>
                    <ul aria-expanded="false">
                        <li><a href="{{route("tabel-normalisasi")}}">Tabel Normalisasi</a></li>
                        <li><a href="{{route("tabel-ranking")}}">Tabel Ranking</a></li>
                        <li><a href="#">Tabel Peringkat</a></li>
                    </ul>
                </li>

            </ul>
            <div class="plus-box">
                <p><strong>Sistem Penunjang Pengambilan Keputusan</strong></p>
                <p class="fs-12">© 2021 All Rights Reserved</p>
                <p class="fs-12">Made with <span class="heart"></span>MAS</p>
            </div>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">

        <div class="copyright">
            <p>Copyright © Designed &amp; Developed by <a href="https://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->

    <!--**********************************
       Support ticket button start
    ***********************************-->

    <!--**********************************
       Support ticket button end
    ***********************************-->

    @yield("content")

</div>

</body>

<!--**********************************
        Scripts
    ***********************************-->

<!-- Required vendors -->
<script src="{{asset("assets/vendor/global/global.min.js")}}"></script>
<script src="{{asset("assets/vendor/moment/moment.min.js")}}"></script>
<script src="{{asset("assets/vendor/chart.js/Chart.bundle.min.js")}}"></script>
<script src="{{asset("assets/vendor/bootstrap-datetimepicker/js/moment.js")}}"></script>
<script src="{{asset("assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js")}}"></script>

<script src="{{asset("assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js")}}"></script>

<!-- Datatable -->
<script src="{{asset("assets/vendor/datatables/js/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("assets/js/plugins-init/datatables.init.js")}}"></script>

<!-- Chart piety plugin files -->
<script src="{{asset("assets/vendor/peity/jquery.peity.min.js")}}"></script>

<!-- Apex Chart -->
<script src="{{asset("assets/vendor/apexchart/apexchart.js")}}"></script>

<!-- Dashboard 1 -->
<script src="{{asset("assets/js/dashboard/dashboard-1.js")}}"></script>

<script src="{{asset("assets/js/custom.min.js")}}"></script>
<script src="{{asset("assets/js/deznav-init.js")}}"></script>
<script src="{{asset("assets/js/demo.js")}}"></script>
<script src="{{asset("assets/js/styleSwitcher.js")}}"></script>



<!-- JS -->
{{--<script src="{{asset("assets/js/custom.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/demo.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/deznav-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/styleSwitcher.js")}}"></script>--}}

<!-- Dashboard -->
{{--<script src="{{asset("assets/js/dashboard/analytics.js")}}"></script>--}}


{{----}}
{{--<script src="{{asset("assets/js/dashboard/dashboard-1.js")}}"></script>--}}
{{----}}


{{--<script src="{{asset("assets/js/dashboard/event.js")}}"></script>--}}

<!-- Plugins-Init -->
{{--<script src="{{asset("assets/js/plugins-init/bs-daterange-picker-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/chartist-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/chartjs-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/clock-picker-init.js")}}"></script>--}}


{{----}}
{{--<script src="{{asset("assets/js/plugins-init/datatables.init.js")}}"></script>--}}
{{----}}

{{--<script src="{{asset("assets/js/plugins-init/flot-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/fullcalendar-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/jquery.validate-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/jquery-asColorPicker.init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/jqvmap-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/material-date-picker-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/morris-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/nestable-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/nouislider-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/pickadate-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/piety-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/select2-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/sparkline-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/sweetalert.init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/toastr-init.js")}}"></script>--}}
{{--<script src="{{asset("assets/js/plugins-init/widgets-script-init.js")}}"></script>--}}

<!-- Required vendors -->
{{----}}
{{--<script src="{{asset("assets/vendor/apexchart/apexchart.js")}}"></script>--}}


{{--<script src="{{asset("assets/vendor/bootstrap-daterangepicker/js/bootstrap-daterangepicker.js")}}"></script>--}}

{{----}}
{{--<script src="{{asset("assets/vendor/bootstrap-datetimepicker/js/moment.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js")}}"></script>--}}
{{----}}


{{--<script src="{{asset("assets/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js")}}"></script>--}}

{{----}}
{{--<script src="{{asset("assets/vendor/chart.js/Chart.bundle.min.js")}}"></script>--}}
{{----}}


{{--<script src="{{asset("assets/vendor/chartist/js/chartist.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltips.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/ckeditor/ckeditor.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/clockpicker/js/bootstrap-clockpicker.min.js")}}"></script>--}}


{{----}}
{{--<script src="{{asset("assets/vendor/datatables/js/jquery.dataTables.min.js")}}"></script>--}}
{{----}}


{{--<script src="{{asset("assets/vendor/deznav/deznav.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/dropzone/dist/dropzone.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/flot/jquery.flot.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/flot/jquery.flot.pie.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/flot/jquery.flot.resize.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/flot-spline/jquery.flot.spline.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/fullcalendar/js/main.min.js")}}"></script>--}}


{{----}}
{{--<script src="{{asset("assets/vendor/global/global.min.js")}}"></script>--}}
{{----}}


{{--<script src="{{asset("assets/vendor/highlightjs/highlight.pack.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/jquery-asColor/jquery-asColor.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/jquery-asGradient/jquery-asGradient.min.js")}}"></script>--}}


{{----}}
{{--<script src="{{asset("assets/vendor/jquery-nice-select/js/jquery.nice-select.min.js")}}"></script>--}}
{{----}}


{{--<script src="{{asset("assets/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/jquery-sparkline/jquery.sparkline.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/jquery-steps/build/jquery-steps.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/jquery-validation/jquery.validate.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/jqvmap/js/jquery.vmap.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/jqvmap/js/jquery.vmap.usa.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/jqvmap/js/jquery.vmap.world.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/lightgallery/js/lightgallery-all.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/moment/moment.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/morris/morris.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/nestable2/js/jquery.nestable.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/nouislider/nouislider.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/owl-carousel/owl.carousel.js")}}"></script>--}}


{{----}}
{{--<script src="{{asset("assets/vendor/peity/jquery.peity.min.js")}}"></script>--}}
{{----}}


{{--<script src="{{asset("assets/vendor/pickadate/jpicker.date.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/pickadate/picker.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/pickadate/picker.time.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/raphael/raphael.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/select2/js/select2.full.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/star-rating/jquery.star-rating-svg.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/svganimation/svg.animation.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/svganimation/vivus.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/sweetalert2/dist/sweetalert2.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/toastr/js/toastr.min.js")}}"></script>--}}
{{--<script src="{{asset("assets/vendor/wnumb/wNumb.js")}}"></script>--}}

</html>
