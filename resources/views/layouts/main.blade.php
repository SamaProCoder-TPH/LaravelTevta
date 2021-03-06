<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.1.0
* @link https://coreui.io
* Copyright (c) 2021 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->
<!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="{{ asset('./') }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- {{ asset('js/angular_my.js')}} -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('assets/favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('vendors/simplebar/css/simplebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/vendors/simplebar.css') }}">
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{ asset('css/examples.css') }}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="{{ asset('vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
      <!-- <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
          <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="{{ asset('assets/brand/coreui.svg#signet') }}"></use>
        </svg>
      </div> -->
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        <li class="nav-item"><a class="nav-link" href="{{ asset('index.html') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}"></use>
            </svg> Homepage</a></li>

        <!-- <li class="nav-title">Administration</li>
        <li class="nav-item"><a class="nav-link" href="{{ asset('colors.html') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-drop') }}"></use>
            </svg> User Types</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('colors.html') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-drop') }}"></use>
            </svg> Users</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('colors.html') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-drop') }}"></use>
            </svg> Grant Permission to User</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('colors.html') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-drop') }}"></use>
            </svg> Change Password</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('colors.html') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-drop') }}"></use>
            </svg> Initialize Password</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('colors.html') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-drop') }}"></use>
            </svg> Control Panel</a></li> -->
        <!-- <li class="nav-item"><a class="nav-link" href="{{ asset('typography.html') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-pencil') }}"></use>
            </svg> Typography</a></li> -->

            <!-- Administration -->


        <li class="nav-title">Administration</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset('#') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-puzzle') }}"></use>
            </svg> Administration</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/accordion.html') }}"><span class="nav-icon"></span> User Types</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/breadcrumb.html') }}"><span class="nav-icon"></span> Users</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/cards.html') }}"><span class="nav-icon"></span> Grant Permission to User</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/carousel.html') }}"><span class="nav-icon"></span> Change Password</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/collapse.html') }}"><span class="nav-icon"></span> Initialize Password</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/list-group.html') }}"><span class="nav-icon"></span> Control Panel</a></li>
          </ul>
        </li>


      <!-- Set Access -->

      <li class="nav-title">Set Access</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset('#') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}"></use>
            </svg> Set Access</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/accordion.html') }}"><span class="nav-icon"></span> Set Access Punjab Level</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/breadcrumb.html') }}"><span class="nav-icon"></span> Set Access Institute Level</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/cards.html') }}"><span class="nav-icon"></span> Set Session Accessr</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/carousel.html') }}"><span class="nav-icon"></span> Set Colleges Login Status</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/collapse.html') }}"><span class="nav-icon"></span> Initialize Password</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/list-group.html') }}"><span class="nav-icon"></span> Set Auto Attendance</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/list-group.html') }}"><span class="nav-icon"></span> Enter Strength</a></li>

          </ul>
        </li>

      <!-- File Maintenance -->


      <li class="nav-title">File Maintenance</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset('#') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-file') }}"></use>
            </svg> File Maintenance</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/accordion.html') }}"><span class="nav-icon"></span> Group/Shift Codes</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/breadcrumb.html') }}"><span class="nav-icon"></span> Centre Group</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/cards.html') }}"><span class="nav-icon"></span> Centre Codes</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/carousel.html') }}"><span class="nav-icon"></span> Qualification Codes</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/collapse.html') }}"><span class="nav-icon"></span> Trade Codes</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/list-group.html') }}"><span class="nav-icon"></span> Exam Title</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/list-group.html') }}"><span class="nav-icon"></span> Create Master/Year File</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/accordion.html') }}"><span class="nav-icon"></span> Create Session File</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/breadcrumb.html') }}"><span class="nav-icon"></span> Edit Session Dates</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/cards.html') }}"><span class="nav-icon"></span> Close Session</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/carousel.html') }}"><span class="nav-icon"></span> Set Age Limit</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/collapse.html') }}"><span class="nav-icon"></span> Set Registration No.</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/list-group.html') }}"><span class="nav-icon"></span> Set Central Trades</a></li>

          </ul>
        </li>

        <!-- Data Processing -->

        <li class="nav-title">Data Processing</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset('#') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
            </svg> Data Processing</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/accordion.html') }}"><span class="nav-icon"></span> tStudents Information</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/breadcrumb.html') }}"><span class="nav-icon"></span> Submit Students Info </a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/cards.html') }}"><span class="nav-icon"></span> Import Data to Session File</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/carousel.html') }}"><span class="nav-icon"></span> Rejected/Duplicate Students Info</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/collapse.html') }}"><span class="nav-icon"></span> Generate Registration Numbers </a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/list-group.html') }}"><span class="nav-icon"></span> Enter Students Attendance</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/list-group.html') }}"><span class="nav-icon"></span> Enter Students Result</a></li>
          </ul>
        </li>


        <!-- Reports  -->

        <li class="nav-title">Reports</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset('#') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-notes') }}"></use>
            </svg> Reports</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/accordion.html') }}"><span class="nav-icon"></span> Editing Data List</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/breadcrumb.html') }}"><span class="nav-icon"></span> Admittance Slip</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/cards.html') }}"><span class="nav-icon"></span> Attendance Sheet</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/carousel.html') }}"><span class="nav-icon"></span> Award List</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/collapse.html') }}"><span class="nav-icon"></span> Result Statement</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/list-group.html') }}"><span class="nav-icon"></span> Centre/Tradewise Summary</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/list-group.html') }}"><span class="nav-icon"></span> Print Certificates</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/accordion.html') }}"><span class="nav-icon"></span> Rejected Student's List</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/breadcrumb.html') }}"><span class="nav-icon"></span> List of Non Eligible Students</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/cards.html') }}"><span class="nav-icon"></span> Strength Summary</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/carousel.html') }}"><span class="nav-icon"></span> Session History Statistical Report</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/collapse.html') }}"><span class="nav-icon"></span> Periodic Report</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/list-group.html') }}"><span class="nav-icon"></span> Registration Alloted Report</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('base/list-group.html') }}"><span class="nav-icon"></span> Pictures List of Students</a></li>


          </ul>
        </li>

      <!-- Backup -->
      <li class="nav-title">Backup</li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset('#') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-cursor') }}"></use>
            </svg> Backup</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ asset('buttons/buttons.html') }}"><span class="nav-icon"></span> Backup of Session File</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('buttons/button-group.html') }}"><span class="nav-icon"></span> Backup of other Files</a></li>
          </ul>
        </li>

        <!-- <li class="nav-item"><a class="nav-link" href="{{ asset('charts.html') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-chart-pie') }}"></use>
            </svg> Charts</a></li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset('#') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-notes') }}"></use>
            </svg> Forms</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ asset('forms/form-control.html') }}"> Form Control</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('forms/select.html') }}"> Select</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('forms/checks-radios.html') }}"> Checks and radios</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('forms/range.html') }}"> Range</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('forms/input-group.html') }}"> Input group</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('forms/floating-labels.html') }}"> Floating labels</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('forms/layout.html') }}"> Layout</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('forms/validation.html') }}"> Validation</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset('#') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-star') }}"></use>
            </svg> Icons</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ asset('icons/coreui-icons-free.html') }}"> CoreUI Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('icons/coreui-icons-brand.html') }}"> CoreUI Icons - Brand</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('icons/coreui-icons-flag.html') }}"> CoreUI Icons - Flag</a></li>
          </ul>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset('#') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
            </svg> Notifications</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ asset('notifications/alerts.html') }}"><span class="nav-icon"></span> Alerts</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('notifications/badge.html') }}"><span class="nav-icon"></span> Badge</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('notifications/modals.html') }}"><span class="nav-icon"></span> Modals</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('notifications/toasts.html') }}"><span class="nav-icon"></span> Toasts</a></li>
          </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{ asset('widgets.html') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-calculator') }}"></use>
            </svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
        <li class="nav-divider"></li>
        <li class="nav-title">Extras</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="{{ asset('#') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-star') }}"></use>
            </svg> Pages</a>
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href="{{ asset('login.html') }}" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                </svg> Login</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('register.html" target="_top') }}">
                <svg class="nav-icon">
                  <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                </svg> Register</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('404.html') }}" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bug') }}"></use>
                </svg> Error 404</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('500.html') }}" target="_top">
                <svg class="nav-icon">
                  <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bug') }}"></use>
                </svg> Error 500</a></li>
          </ul>
        </li>
        <li class="nav-item mt-auto"><a class="nav-link" href="{{ asset('docs.html') }}">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-description') }}"></use>
            </svg> Docs</a></li>
        <li class="nav-item"><a class="nav-link nav-link-danger" href="{{ asset('https://coreui.io/pro/') }}" target="_top">
            <svg class="nav-icon">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-layers') }}"></use>
            </svg> Try CoreUI
            <div class="fw-semibold">PRO</div>
          </a></li> -->
      </ul>
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
              <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
            </svg>
          </button><a class="header-brand d-md-none" href="{{ asset('#') }}">
            <svg width="118" height="46" alt="CoreUI Logo">
              <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
            </svg></a>
          <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link">Short Courses Examination System</a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="{{ asset('#') }}">Users</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('#') }}">Settings</a></li> -->
          </ul>
          <!-- <ul class="header-nav ms-auto">
            <li class="nav-item"><a class="nav-link" href="{{ asset('#') }}">
                <svg class="icon icon-lg">
                  <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('#') }}">
                <svg class="icon icon-lg">
                  <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-list-rich') }}"></use>
                </svg></a></li>
            <li class="nav-item"><a class="nav-link" href="{{ asset('#') }}">
                <svg class="icon icon-lg">
                  <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}"></use>
                </svg></a></li>
          </ul> -->
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="{{ asset('#') }}" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('assets/img/avatars/user.jpg') }}" alt="user@email.com"></div>
              </a>
              <div class="dropdown-menu dropdown-menu-end pt-0">
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Account</div>
                </div><a class="dropdown-item" href="{{ asset('#') }}">
                  
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div>
        
        <!-- CONTENT HERE -->
        @yield('content')
      <!-- <footer class="footer">
        <div><a href="">CoreUI </a><a href="">Bootstrap Admin Template</a> © 2021 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="">CoreUI UI Components</a></div>
      </footer> -->
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/simplebar/js/simplebar.min.js') }}"></script>
    <!-- We use those scripts to show code examples, you should remove them in your application.-->
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('vendors/chart.js/js/chart.min.js') }}"></script>
    <script src="{{ asset('vendors/@coreui/chartjs/js/coreui-chartjs.js') }}"></script>
    <script src="{{ asset('vendors/@coreui/utils/js/coreui-utils.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
    </script>

  </body>
</html>