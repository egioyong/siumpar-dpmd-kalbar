 <?php
require "../koneksi.php";
$result = mysqli_query($db, "SELECT * FROM user");
 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Data Operator dan Kepala Dinas</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../assets/css/Contact-form-simple.css">
    <link rel="stylesheet" href="../assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="../assets/css/ebs-contact-form-1.css">
    <link rel="stylesheet" href="../assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="../assets/css/info-box.css">
    <link rel="stylesheet" href="../assets/css/Landing-Section-with-Call-to-Action-BS4.css">
    <link rel="stylesheet" href="../assets/css/Login-Box-En.css">
    <link rel="stylesheet" href="../assets/css/login-form-1.css">
    <link rel="stylesheet" href="../assets/css/login-form.css">
    <link rel="stylesheet" href="../assets/css/Recuperar-Password-mloureiro1973.css">
    <link rel="stylesheet" href="../assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="../assets/css/Table-With-Search.css">
</head>

<body id="page-top">
    
            <div class="container-fluid">
                
                <div class="card shadow">
                    <div class="card-header py-3">
                        <div class="col-md-12 search-table-col">
                        <center><p class="text-primary m-0 font-weight-bold">Data Operator&nbsp;</p></center>
                            
                            <hr>
                            
                                <div class="table-responsive table-bordered table table-hover table-bordered results">
                                    <table class="table table-bordered table-hover">
                                        <thead class="bill-header cs">
                                            <tr>
                                                <th id="trs-hd" class="col-lg-2">Username</th>
                                                <th id="trs-hd" class="col-lg-3">Password</th>
                                                <th id="trs-hd" class="col-lg-2"><br>Bidang</th>
                                                <th id="trs-hd" class="col-lg-2"><br>Level</th>
                                            </tr>
                                        </thead>
                                        <tbody>      
                                            <?php while($list = mysqli_fetch_assoc($result)) : ?>
                                            <tr>    
                                                <td><?= $list["username"]; ?></td>
                                                <td><?= $list["password"]; ?></td>
                                                <td><?= $list["bidang"]; ?></td>
                                                <td><?= $list["level"]; ?></td>
                                                </td>
                                            </tr>
                                            <?php endwhile; ?>
                                        </tbody>
                                    </table>
                                    <script>
                                        windows.print();
                                    </script>
                                    
                                </div>
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
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../assets/js/Table-With-Search.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>