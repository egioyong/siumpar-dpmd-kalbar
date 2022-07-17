<?php
    include "koneksi.php";
    $result = mysqli_query($db, "SELECT * FROM sppd");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>SPPD</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Contact-form-simple.css">
    <link rel="stylesheet" href="assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form-1.css">
    <link rel="stylesheet" href="assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="assets/css/info-box.css">
    <link rel="stylesheet" href="assets/css/Landing-Section-with-Call-to-Action-BS4.css">
    <link rel="stylesheet" href="assets/css/Login-Box-En.css">
    <link rel="stylesheet" href="assets/css/login-form-1.css">
    <link rel="stylesheet" href="assets/css/login-form.css">
    <link rel="stylesheet" href="assets/css/Recuperar-Password-mloureiro1973.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="dashboard.php">
                    <div class="sidebar-brand-icon rotate-n-15"><img style="width: 32px;height: 32px;" src="assets/img/file_archive_folders_icon_193943.png"></div>
                    <div class="sidebar-brand-text mx-3"><span>Siumpar</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="dashboard.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="suratmasuk.php"><i class="fas fa-table"></i><span>Surat Masuk</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="suratundangan.php"><i class="fas fa-table"></i><span>Surat Undangan</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="disposisi.php"><i class="fas fa-book-open"></i><span>Disposisi Surat</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="suratkeluar.php"><i class="fas fa-table"></i><span>Surat Keluar</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="sktim.php"><i class="fas fa-table"></i><span>SK TIM</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="spt.php"><i class="fas fa-table"></i><span>SPT</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="sppd.php"><i class="fas fa-table"></i><span>SPPD</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="operator.php"><i class="fas fa-user-circle"></i><span>Data Operator</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php"><i class="far fa-user-circle"></i><span>Logout</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button><label>Selamat Datang Admin</label>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="login.php"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Admin</span><img class="border rounded-circle img-profile" src="assets/img/file_archive_folders_icon_193943.png"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="login.php"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">SPPD</h3>
                <div class="card shadow">
                    <div class="card-header py-3">
                        <p class="text-primary m-0 font-weight-bold">Data Arsip SPPD</p>
                        <div class="col-md-12 search-table-col">
                            <div><a class="btn btn-primary btn-sm border rounded-0" role="button" style="color: rgb(255,255,255);background-color: #1400ff;" href="sppd/form_sppd.php"><i class="fa fa-plus"></i>Buat Arsip</a><a class="btn btn-primary btn-sm border rounded-0"
                                    role="button" style="color: rgb(255,255,255);background-color: #FF0000;"><i class="fa fa-print"></i>Print Arsip</a></div>
                            <hr>
                            <div style="width: 145px;">
                                <div class="dropdown"><button class="btn btn-primary btn-sm dropdown-toggle border rounded-0" data-toggle="dropdown" aria-expanded="false" type="button" style="background-color: #1400ff;color: rgb(255,255,255);">&nbsp;Cari Berdasarkan</button>
                                    <div
                                        class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#" style="width: 145px;">Tujuan</a><a class="dropdown-item" role="presentation" href="#" style="width: 145px;">Uraian Kegiatan</a><a class="dropdown-item" role="presentation"
                                            href="#" style="width: 145px;">Tgl Surat</a></div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group pull-right col-lg-4"><input type="text" class="search form-control" placeholder="Cari Arsip"></div>
                        <div>
                            <div class="table-responsive table-bordered table table-hover table-bordered results">
                                <table class="table table-bordered table-hover">
                                    <thead class="bill-header cs">
                                        <tr>
                                            <th id="trs-hd" class="col-lg-1">No.Agenda</th>
                                            <th id="trs-hd-5" class="col-lg-1">Tgl.Surat</th>
                                            <th id="trs-hd" class="col-lg-2">Nomor SPPD</th>
                                            <th id="trs-hd" class="col-lg-3">Nama</th>
                                            <th id="trs-hd" class="col-lg-2"><br>Tujuan</th>
                                            <th id="trs-hd" class="col-lg-2"><br>Uraian Kegiatan</th>
                                            <th id="trs-hd" class="col-lg-2"><br>Lama</th>
                                            <th id="trs-hd-1" class="col-lg-2">File</th>
                                            <th id="trs-hd-4" class="col-lg-2">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="warning no-result">
                                            <td colspan="12"><i class="fa fa-warning"></i>&nbsp; Data tidak ditemukan !!!</td>
                                        </tr>
                                        <?php while($list = mysqli_fetch_assoc($result)) : ?>
                                        <tr>
                                            <td><?= $list["no_agenda"]; ?></td>
                                            <td><?= $list["tgl_surat"]; ?></td>
                                            <td><?= $list["no_sppd"]; ?></td>
                                            <td><?= $list["nama"]; ?></td>
                                            <td><?= $list["tujuan"]; ?></td>
                                            <td><?= $list["kegiatan"]; ?></td>
                                            <td><?= $list["lama"]; ?></td>
                                            <td>
                                                <a  style="font-size:12px" type="button" class="btn btn-primary btn-xs" href="sppd/download.php?id=<?=  $list["id_sppd"]; ?>">Download</a>
                                            </td>
                                            <td>
                                                    <div class="btn-group border rounded-0" role="group">
                                                        <a class="btn btn-danger btn-sm border rounded-circle" type="button" href="sppd/edit.php?id=<?= $list["id_sppd"]; ?>"><i class="fa fa-edit" style="font-size: 20px;"></i></a>
                                                        <a class="btn btn-dark btn-sm border rounded-circle" type="button" href="sppd/hapus.php?id=<?= $list["id_sppd"]; ?>"><i class="fa fa-trash" style="font-size: 20px;"></i></a>
                                                    </div>
                                        
                                            </td>
                                        </tr>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                        <ul class="pagination">
                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-white sticky-footer">
        <div class="container my-auto">
            <div class="text-center my-auto copyright"></div>
        </div>
    </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>