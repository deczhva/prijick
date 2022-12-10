<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemuning</title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">

<link rel="stylesheet" href="assets/css/shared/iconly.css">
<script src="https://kit.fontawesome.com/ad42868426.js" crossorigin="anonymous"></script>

</head>

<body style="background-color: #E7F6F2">
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active rounded-end" style="background-color: #A5C9CA">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo m-2">
                            <a href="/" style="color: #395B64">Posyandu</a>
                        </div>
                    </div>
                </div>
                <hr style="color: white">
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        
                        <li
                            class="sidebar-item active">
                            <a href="/" class='sidebar-link' style="background-color: #395B64">
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li 
                            class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Data</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a class="sidebar-link" href="/balita">Data Balita</a>
                                </li>
                                <li class="submenu-item ">
                                    <a class="sidebar-link" href="/lansia">Data Lansia</a>
                                </li>
                                <li class="submenu-item ">
                                    <a class="sidebar-link" href="/vitamin">Data Vitamin A</a>
                                </li>
                                <li class="submenu-item ">
                                    <a class="sidebar-link" href="/kader">Data Kader</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li
                            class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Laporan</span>
                            </a>
                            <ul class="submenu ">
                                </li>
                                <li class="submenu-item ">
                                    <a href="/lap-timbang">Laporan Penimbangan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/lap-sppd">Laporan SPPD</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/lap-kegiatan">Laporan Kegiatan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/lap-kwitansi">Kwitansi</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="sidebar-title">Pages</li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="auth-login.html">Login</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-register.html">Register</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-forgot-password.html">Forgot Password</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li
                            class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-life-preserver"></i>
                                <span>Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="sidebar" class="active" style="float: right">
            <div class="sidebar-wrapper active rounded-end" style="background-color: #A5C9CA">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo m-2">
                            <a href="/" style="color: #395B64">Posyandu</a>
                        </div>
                    </div>
                </div>
                <hr style="color: white">
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        
                        <li
                            class="sidebar-item active">
                            <a href="/" class='sidebar-link' style="background-color: #395B64">
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li 
                            class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Data</span>
                            </a>
                            <ul class="submenu active">
                                {{-- <li class="submenu-item ">
                                    <a class="sidebar-link" href="/member">Data Baru</a>
                                </li> --}}
                                <li class="submenu-item ">
                                    <a class="sidebar-link" href="/balita">Data Balita</a>
                                </li>
                                <li class="submenu-item ">
                                    <a class="sidebar-link" href="/lansia">Data Lansia</a>
                                </li>
                                <li class="submenu-item ">
                                    <a class="sidebar-link" href="/vitamin">Data Vitamin A</a>
                                </li>
                                <li class="submenu-item ">
                                    <a class="sidebar-link" href="/kader">Data Kader</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li
                            class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Laporan</span>
                            </a>
                            <ul class="submenu ">
                                </li>
                                <li class="submenu-item ">
                                    <a href="/lap-timbang">Laporan Penimbangan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/lap-sppd">Laporan SPPD</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/lap-kegiatan">Laporan Kegiatan</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="/lap-kwitansi">Kwitansi</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="sidebar-title">Pages</li>
                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="auth-login.html">Login</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-register.html">Register</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="auth-forgot-password.html">Forgot Password</a>
                                </li>
                            </ul>
                        </li>
                        
                        <li
                            class="sidebar-item  ">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-life-preserver"></i>
                                <span>Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="main">
            <header class="mb-5">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="container mt-2">
                @yield('container')
            </div>
        </div>
    </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    
<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

<script>
          
          var options = {
          series: [{
          name: 'series1',
          data: [31, 40, 28, 51, 42, 109, 100]
        }, {
          name: 'series2',
          data: [11, 32, 45, 32, 34, 52, 41]
        }],
          chart: {
          height: 350,
          type: 'area'
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        xaxis: {
          type: 'datetime',
          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
        },
        tooltip: {
          x: {
            format: 'dd/MM/yy HH:mm'
          },
        },
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
      
      
</script>

</body>

</html>