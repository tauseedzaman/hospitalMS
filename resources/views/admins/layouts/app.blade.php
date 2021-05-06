<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Laravel</title>
    <link href="http://127.0.0.1:8000/assets/vendor/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/fontawesome/css/solid.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/fontawesome/css/brands.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/css/master.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/chartsjs/Chart.min.css" rel="stylesheet">
    <link href="http://127.0.0.1:8000/assets/vendor/flagiconcss/css/flag-icon.min.css" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @livewireStyles
</head>
<body class="clinic_version">

   <div class="wrapper">
      <nav id="sidebar" class="active">
          <div class="sidebar-header">
              <img src="http://127.0.0.1:8000/assets/img/bootstraper-logo.png" alt="bootraper logo" class="app-logo">
          </div>
          <ul class="list-unstyled components text-secondary">
              <li>
                  <a href="{{ route("admins") }}"><i class="fas fa-home"></i> Dashboard</a>
              </li>
              <li>
                  <a href="{{ route("admin_docters") }}"><i class="fas fa-file-alt"></i>Docters</a>
              </li>
              <li>
                <a href="{{ route("admin_operations_report") }}"><i class="fas fa-file-alt"></i>Operation report</a>
            </li>
            <li>
                <a href="{{ route("admin_birth_report") }}"><i class="fas fa-file-alt"></i>Birth Report</a>
            </li>
            <li>
                <a href="{{ route("admin_patients") }}"><i class="fas fa-file-alt"></i>Patients</a>
            </li>
            <li>
                <a href="{{ route("nurses") }}"><i class="fas fa-file-alt"></i>Nurses</a>
            </li>
            <li>
                <a href="{{ route("employees") }}"><i class="fas fa-file-alt"></i>Employees</a>
            </li>
            <li>
                <a href="{{ route("departments") }}"><i class="fas fa-file-alt"></i>Department</a>
            </li>
            <li>
                <a href="{{ route("patient_bills") }}"><i class="fas fa-file-alt"></i>Bills</a>
            </li>
            <li>
                <a href="{{ route("patients_beds") }}"><i class="fas fa-file-alt"></i>Beds</a>
            </li>
            <li>
                <a href="{{ route("medicinesStore") }}"><i class="fas fa-file-alt"></i>Medicines Store</a>
            </li>

              <li>
                <a href="forms.html"><i class="fas fa-file-alt"></i> Forms</a>
            </li>
              <li>
                  <a href="tables.html"><i class="fas fa-table"></i> Tables</a>
              </li>
              <li>
                  <a href="charts.html"><i class="fas fa-chart-bar"></i> Charts</a>
              </li>
              <li>
                  <a href="icons.html"><i class="fas fa-icons"></i> Icons</a>
              </li>
              <li>
                  <a href="#uielementsmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-layer-group"></i> UI Elements</a>
                  <ul class="collapse list-unstyled" id="uielementsmenu">
                      <li>
                          <a href="ui-buttons.html"><i class="fas fa-angle-right"></i> Buttons</a>
                      </li>
                      <li>
                          <a href="ui-badges.html"><i class="fas fa-angle-right"></i> Badges</a>
                      </li>
                      <li>
                          <a href="ui-cards.html"><i class="fas fa-angle-right"></i> Cards</a>
                      </li>
                      <li>
                          <a href="ui-alerts.html"><i class="fas fa-angle-right"></i> Alerts</a>
                      </li>
                      <li>
                          <a href="ui-tabs.html"><i class="fas fa-angle-right"></i> Tabs</a>
                      </li>
                      <li>
                          <a href="ui-date-time-picker.html"><i class="fas fa-angle-right"></i> Date & Time Picker</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="#authmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-user-shield"></i> Authentication</a>
                  <ul class="collapse list-unstyled" id="authmenu">
                      <li>
                          <a href="login.html"><i class="fas fa-lock"></i> Login</a>
                      </li>
                      <li>
                          <a href="signup.html"><i class="fas fa-user-plus"></i> Signup</a>
                      </li>
                      <li>
                          <a href="forgot-password.html"><i class="fas fa-user-lock"></i> Forgot password</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="#pagesmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle no-caret-down"><i class="fas fa-copy"></i> Pages</a>
                  <ul class="collapse list-unstyled" id="pagesmenu">
                      <li>
                          <a href="blank.html"><i class="fas fa-file"></i> Blank page</a>
                      </li>
                      <li>
                          <a href="404.html"><i class="fas fa-info-circle"></i> 404 Error page</a>
                      </li>
                      <li>
                          <a href="500.html"><i class="fas fa-info-circle"></i> 500 Error page</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="users.html"><i class="fas fa-user-friends"></i>Users</a>
              </li>
              <li>
                  <a href="{{ route('admin_settings') }}"><i class="fas fa-cog"></i>Settings</a>
              </li>
          </ul>
      </nav>
      <div id="body" class="active">
          <nav class="navbar navbar-expand-lg navbar-white bg-white">
              <button type="button" id="sidebarCollapse" class="btn btn-light"><i class="fas fa-bars"></i><span></span></button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="nav navbar-nav ml-auto">
                      <li class="nav-item dropdown">
                          <div class="nav-dropdown">
                              <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-link"></i> <span>Quick Access</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                              <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                  <ul class="nav-list">
                                      <li><a href="" class="dropdown-item"><i class="fas fa-list"></i> Access Logs</a></li>
                                      <div class="dropdown-divider"></div>
                                      <li><a href="" class="dropdown-item"><i class="fas fa-database"></i> Back ups</a></li>
                                      <div class="dropdown-divider"></div>
                                      <li><a href="" class="dropdown-item"><i class="fas fa-cloud-download-alt"></i> Updates</a></li>
                                      <div class="dropdown-divider"></div>
                                      <li><a href="" class="dropdown-item"><i class="fas fa-user-shield"></i> Roles</a></li>
                                  </ul>
                              </div>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <div class="nav-dropdown">
                              <a href="" class="nav-item nav-link dropdown-toggle text-secondary" data-toggle="dropdown"><i class="fas fa-user"></i> <span>John Doe</span> <i style="font-size: .8em;" class="fas fa-caret-down"></i></a>
                              <div class="dropdown-menu dropdown-menu-right nav-link-menu">
                                  <ul class="nav-list">
                                      <li><a href="" class="dropdown-item"><i class="fas fa-address-card"></i> Profile</a></li>
                                      <li><a href="" class="dropdown-item"><i class="fas fa-envelope"></i> Messages</a></li>
                                      <li><a href="" class="dropdown-item"><i class="fas fa-cog"></i> Settings</a></li>
                                      <div class="dropdown-divider"></div>
                                      <li><a href="" class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                                  </ul>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div>
          </nav>
          <div class="content">
              <div class="container">


            @yield('admin_content')
                @livewireScripts
            <script src="http://127.0.0.1:8000/js/alpine.js"></script>
            <script src="http://127.0.0.1:8000/assets/vendor/jquery/jquery.min.js"></script>
            <script src="http://127.0.0.1:8000/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="http://127.0.0.1:8000/assets/vendor/chartsjs/Chart.min.js"></script>
            <script src="http://127.0.0.1:8000/assets/js/dashboard-charts.js"></script>
            <script src="http://127.0.0.1:8000/assets/js/script.js"></script>
</body>

</html>
