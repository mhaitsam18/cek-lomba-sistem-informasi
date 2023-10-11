<link href="/startbootstrap-sb-admin-2-gh-pages/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
    type="public/css2">
<link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

<!-- Custom styles for this template-->
<link href="/startbootstrap-sb-admin-2-gh-pages/css/sb-admin-2.min.css" rel="stylesheet">
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Beranda Admin</div>
        </a>
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Dashboard</div>
        </a>


        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="/grafik">
                <!-- <a class="nav-link" href="grafik.php"> -->
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Lihat Grafik</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">

        </div>



        <!-- Nav Item - Utilities Collapse Menu -->


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Login Screens:</h6>
                    <a class="collapse-item" href="login.html">Login</a>
                    <a class="collapse-item" href="register.html">Register</a>
                    <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="404.html">404 Page</a>
                    <a class="collapse-item" href="blank.html">Blank Page</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="/admin/tambah_lomba">
                <!-- <a class="nav-link" href="/startbootstrap-sb-admin-2-gh-pages/charts.html"> -->
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Kelola Data Informasi Lomba</span>
            </a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="/admin">
                <i class="fas fa-fw fa-table"></i>
                <span>Kelola Data Mahasiswa</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->


    </ul>
    <!-- End of Sidebar -->




    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">
        <link href="/css/bootstrap.min.css" rel="stylesheet">

        <title><?= $title; ?></title>
    </head>

    <body>
        <div class="container">
            <h2 class="text-center mt-3 mb-4">GRAFIK KATEGORI LOMBA DAN KELAS </h2>

            <div class="row">
                <!-- Area Chart -->
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow mb-4" id="grap">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Grafik Kategori Lomba </h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="myBarChart"></canvas>
                            </div>
                        </div>
                        <div class="card-footer"></div>
                    </div>
                </div>

                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- ----Card Header - Dropdown---- -->
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Grafik Kelas</h6>
                        </div>
                        <!-- ---- Card Body----- -->
                        <div class="card-body">
                            <div class="chart-pie pt-2 pb-2">
                                <canvas id="myPieChart"></canvas>
                            </div>
                        </div>

                        <div class="card-footer"></div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="<?= base_url(); ?>/jquery.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="<?= base_url(); ?>/chart.js/Chart.min.js"></script>

        <script>
        // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito',
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';
        // Bar Chart Example
        var ctx = document.getElementById("myBarChart");
        var myBarChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [<?php foreach ($kategori_mahasiswa as $key => $kategori) {
                                    echo "'" . $kategori['kategori'] . "',";
                                } ?>],
                datasets: [{
                    label: "Jumlah",
                    backgroundColor: "#4e73df",
                    hoverBackgroundColor: "#2e59d9",
                    borderColor: "#4e73df",
                    data: [<?php foreach ($kategori_mahasiswa as $key => $kategori) {
                                    echo "'" . $kategori['jumlah'] . "',";
                                } ?>],
                    borderWidth: 1
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{

                        gridLines: {
                            display: false,
                            drawBorder: false,
                        },
                        ticks: {
                            maxTicksLimit: 60
                        },
                        maxBarThickness: 25,
                        ///ukuran Bar grafik
                    }],
                    yAxes: [{
                        ticks: {
                            min: 1,
                            maxTicksLimit: 10,
                            padding: 5,

                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#FF0000",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
            }
        });


        // Pie Chart Example
        var ctx = document.getElementById("myPieChart"); // Selector yang akan digunakan untuk menampilkan pie

        var myPieChart = new Chart(ctx, {
            type: 'pie', // Tipe grafik yang akan ditampikan
            data: {
                labels: ["d3si 4304", "d3si 4501", "d3si 4504"],
                datasets: [{
                    data: [<?php foreach ($kelas_mhs as $key => $kelas) {
                                    echo "'" . $kelas['jumlah'] . "',";
                                } ?>],
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'], // Warna background grafik pie
                    hoverBackgroundColor: ['#2e59d9', '#17a673',
                        '#2c9faf'
                    ], // Warna background grafik pie ketika disentuh
                    hoverBorderColor: "rgba(234, 236, 244, 1)", //  Warna border grafik pie ketika disentuh

                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                    responsive: true,
                    maintainAspectRatio: false,
                },

                cutoutPercentage: 70,
            },
        });
        </script>
    </body>

    </html>