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
            <a class="nav-link collapsed" href="/grafik" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Grafik</span>
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


    <body id="page-top">
        <section class="page-section bg-primary" id="about">

            <div class="container pt-3">
                <a href="<?= base_url('/admin/input_lomba'); ?>" class="btn btn-success mb-3">Tambah Data Lomba</a>
                <div class="card">
                    <div class="card-header bg-info text-white">
                        <h4 class="card-title">Informasi Lomba </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <form action="" method="post">

                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control"
                                                    placeholder="Masukan Nama atau Kategori Lomba" name="keyword">
                                                <div class="input-group-append">
                                                    <button type="submit" class="btn btn-primary mb1 bg-blue"
                                                        name="submit">
                                                        Search</button>
                                                </div>
                                            </div>
                                        </form>




                        </div>
                        <center>
                            <th>No </th>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Penyelenggara</th>
                            <th>Deadline</th>
                            <th>Counting Day</th>

                        </center>
                        <!-- <th>Bukti</th> -->

                        <th></th>
                        <th>Action</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            $nos = 0;
                            // if (isset($getInput['input']))
                            foreach ($getInput as $lom) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $lom['Title']; ?></td>
                                <td><a href="<?= $lom['link']; ?>" target="_blank">Info Selengkapnya</a></td>
                                <td><?= $lom['Penyelenggara']; ?></td>
                                <td><?= $lom['Deadline']; ?></td>
                                <center>
                                    <td> <?= $lom['curdate'] ?> Hari</td>
                                </center>
                                <center>

                                    <td>
                                        <a href="<?= base_url('admin/edit_lomba/' . $lom['id']); ?>"
                                            class="btn btn-success btn-sm mb-1">
                                            Edit</a>


                                    </td>
                                </center>

                                <td>
                                    <a href="<?= base_url('admin/delete_lomba/' . $lom['id']); ?>"
                                        onclick="javascript:return confirm('Apakah ingin menghapus info lomba ini? ?')"
                                        class="btn btn-danger btn-sm mb-1">
                                        Hapus</a>
                                </td>
                            </tr>
                            <?php $no++;
                            } ?>
                            </tr>
                        </tbody>

                        </table>
                    </div>
                </div>
            </div>
</div>
</section>
</body>