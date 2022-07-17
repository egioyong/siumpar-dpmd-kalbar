<?php
include "../koneksi.php";
    $id = $_GET['id'];
    $query = "SELECT * FROM sktim WHERE id_sktim = '$id'";

    $result =mysqli_query($db,$query);
    $list = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit SK-TIM</title>
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

<body style="background-image: url(&quot;../assets/img/IMG_0247.JPG&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;">
    <section id="contact" style="padding:40px;padding-right:5px;padding-left:4px;">
        <div class="container" style="background-color: #ffffff;">
            <form id="contactForm" style="padding:15px;" action="proses_edit.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend class="text-center"><i class="fa fa-envelope"></i>&nbsp; Edit SK TIM</legend>
                    <input type="hidden" name="id_sktim" value="<?= $_GET['id'] ?>"> 
                </fieldset>
                <div class="form-row" style="margin-left:0px;margin-right:0px;padding:10px;">
                    <div class="col-12 col-md-6" id="message" style="padding-right:20px;padding-left:20px;">
                        <div class="form-group has-feedback">
                            <label for="no_agenda">Nomor Agenda</label>
                            <input class="form-control" type="text" id="no_agenda"  name="no_agenda"  placeholder="Nomor Agenda" value="<?php echo $list['no_agenda'] ?>">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="no_sk">Nomor SK</label>
                            <input class="form-control" type="text" id="no_sk"  name="no_sk"  placeholder="Nomor SK" value="<?php echo $list['no_sk'] ?>">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="tanggal">Tanggal</label>
                            <input class="form-control" type="date" name="tanggal" value="<?php echo $list['tgl_surat'] ?>">
                        </div>
                    </div>
                    <div class="col-12 col-md-6" id="message-1" style="padding-right:20px;padding-left:20px;">
                        <div class="form-group has-feedback">
                            <label for="tentang">Tentang</label>
                            <textarea class="form-control" placeholder="Tentang" name="tentang"><?php echo $list['tentang'] ?></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="tujuan">Tujuan</label>
                            <input class="form-control" type="text" placeholder="Tujuan" name="tujuan" value="<?php echo $list['tujuan'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="comments">File</label><hr>
                            <input type="file" name="file"><?php echo $list['file']?>
                            <input type="hidden" name="old" value="<?php echo $list['file']?>">
                            <hr>
                        <div class="form-group"><button class="btn btn-primary active btn-block" style="background-color: rgb(0,90,255);" type="submit" name="ubah">Ubah Data<i class="fa fa-chevron-circle-right"></i></button><a class="btn btn-primary active btn-block" role="button" style="background-color:#303641;"
                                href="../sktim.php">Kembali<i class="fa fa-chevron-circle-left"></i></a></div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../assets/js/Table-With-Search.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>