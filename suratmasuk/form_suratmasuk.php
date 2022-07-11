<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tambah Surat Masuk</title>
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
            <form id="contactForm" style="padding:15px;" action="proses_tambah.php" method="POST" enctype="multipart/form-data">
                <fieldset>
                    <legend class="text-center"><i class="fa fa-envelope"></i>&nbsp; Form Surat Masuk</legend>
                </fieldset>
                <div class="form-row" style="margin-left:0px;margin-right:0px;padding:10px;">
                    <div class="col-12 col-md-6" id="message" style="padding-right:20px;padding-left:20px;">
                        <div class="form-group has-feedback">
                            <label for="no_agenda">Nomor Agenda</label>
                            <input class="form-control" type="text" id="no_agenda"  name="no_agenda" placeholder="Nomor Agenda">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="asal_surat">Asal Surat</label>
                            <input class="form-control" type="text" id="asal_surat"  name="asal_surat" placeholder="Asal Surat">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="perihal">Perihal</label>
                            <textarea class="form-control" placeholder="Perihal" name="perihal"></textarea>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="no_tgl_surat">Nomor dan Tgl Surat</label>
                            <textarea class="form-control" placeholder="Nomor dan Tgl Surat" name="no_tgl_surat"></textarea>
                        </div>
                    </div>
                    <div class="col-12 col-md-6" id="message-1" style="padding-right:20px;padding-left:20px;">
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <label for="tgl_terima">Tgl.Terima Surat</label>
                                    <input class="form-control" type="date" name="tgl_terima">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tgl_naik">Tgl.Naik Surat</label
                                    ><input class="form-control" type="date" name="tgl_naik">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tgl_turun">Tgl.Turun Surat</label>
                                    <input class="form-control" type="date" name="tgl_turun">
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="bidang">Turun Ke Bidang</label>
                            <input class="form-control" type="text" id="bidang"  name="bidang"  placeholder="Turun Ke Bidang">
                        </div>
                        <div class="form-group">
                            <label for="file">File</label><hr>
                            <input type="file" name="file">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary active btn-block" style="background-color: rgb(0,90,255);" type="submit" name="tambah">Send <i class="fa fa-chevron-circle-right"></i></button>
                            <a class="btn btn-primary active btn-block" role="button" style="background-color:#303641;" href="../suratmasuk.php">Kembali<i class="fa fa-chevron-circle-left"></i></a>
                        </div>
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
    <script src="../ assets/js/theme.js"></script>
</body>

</html>