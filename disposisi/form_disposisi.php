<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Tambah Disposisi</title>
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
            <form id="contactForm" style="padding:15px;" action="proses_tambah.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend class="text-center"><i class="fas fa-book-open"></i>Form Disposisi Surat</legend>
                </fieldset>
                <div class="form-row" style="margin-left:0px;margin-right:0px;padding:10px;">
                    <div class="col-12 col-md-6" id="message" style="padding-right:20px;padding-left:20px;">
                        <div class="form-group has-feedback">
                            <label for="asal_surat">Asal Surat</label>
                            <input class="form-control" type="text" id="asal_surat" name="asal_surat"  placeholder="Asal Surat">
                        </div>
                        <div class="form-group has-feedback">
                            <label for="from_email">Nomor Surat</label>
                            <input class="form-control" type="text" id="no_surat"  name="no_surat"  placeholder="Nomor Surat">
                        </div>
                        <div class="form-row">
                            <div class="col-sm-6">
                                <div class="form-group has-feedback">
                                    <label for="tgl_terima">Tgl.Surat</label>
                                    <input class="form-control" type="date" name="tgl_surat"></div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="tgl_naik">Tgl.Terima Surat</label>
                                    <input class="form-control" type="date" name="tgl_diterima">
                                </div>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="from_name">Nomor Agenda</label>
                            <input class="form-control" type="text" id="no_agenda" name="no_agenda"  placeholder="Nomor Agenda">
                        </div>
                    </div>
                    <div class="col-12 col-md-6" id="message-1" style="padding-right:20px;padding-left:20px;">
                        <div class="form-group has-feedback"><label for="from_name">Sifat</label>
                            <div class="form-check">
                                
                                <label class="form-check-label" for="formCheck-1"><input class="form-check-input" type="checkbox" id="formCheck-1" name="sifat[]" value="Penting">Penting</label>
                            </div>
                            <div class="form-check">
                                
                                <label class="form-check-label" for="formCheck-2" ><input class="form-check-input" type="checkbox" id="formCheck-1" name="sifat[]" value="Segera">Segera</label>
                            </div>
                            <div class="form-check">
                            <label class="form-check-label" for="formCheck-3" ><input class="form-check-input" type="checkbox" id="formCheck-1" name="sifat[]" value="Rahasia">Rahasia</label>
                        </div>
                        </div>
                        <div class="form-group has-feedback"><label for="from_name">Diteruskan</label>
                            <div class="form-check">
                                <label class="form-check-label" for="formCheck-1" > <input class="form-check-input" type="checkbox" id="formCheck-1" name="diteruskan[]" value="Sekretaris DPMD">Sekretaris DPMD</label>
                            </div>
                            <div class="form-check">
                                
                                <label class="form-check-label" for="formCheck-2"><input class="form-check-input" type="checkbox" id="formCheck-1" name="diteruskan[]" value="Kabid Pemerintahan Desa">Kabid Pemerintahan Desa</label>
                            </div>
                            <div class="form-check">
                                
                                <label class="form-check-label" for="formCheck-3"><input class="form-check-input" type="checkbox" id="formCheck-1" name="diteruskan[]" value="Kabid Penataan dan Kerjasama Desa">Kabid Penataan dan Kerjasama Desa</label>
                            </div>
                            <div class="form-check">
                                
                                <label class="form-check-label" for="formCheck-4" ><input class="form-check-input" type="checkbox" id="formCheck-1" name="diteruskan[]" value="Kabid Pembangunan dan Pemberdayaan Desa">Kabid Pembangunan dan Pemberdayaan Desa</label>
                            </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="from_name">Dengan Hormat :</label>
                            <div class="form-check">
                                
                                <label class="form-check-label" for="formCheck-1" ><input class="form-check-input" type="checkbox" id="formCheck-1" name="hormat[]" value="Tanggapan dan Saran">Tanggapan dan Saran</label>
                            </div>
                            <div class="form-check">
                              
                                <label class="form-check-label" for="formCheck-2" > <input class="form-check-input" type="checkbox" id="formCheck-1" name="hormat[]" value="Proses lebih lanjut">Proses lebih lanjut</label>
                            </div>
                            <div class="form-check">
                               
                            <label class="form-check-label" for="formCheck-3"> <input class="form-check-input" type="checkbox" id="formCheck-1" name="hormat[]" value="Koordinasi/Konfirmasi">Koordinasi/Konfirmasi</label>
                        </div>
                        </div>
                        <div class="form-group has-feedback">
                            <label for="from_name">Catatan</label><textarea class="form-control" name="catatan" placeholder="Catatan"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <hr><input type="file" name="file"></div>
                        <div class="form-group">
                            <button class="btn btn-primary active btn-block" style="background-color: rgb(0,90,255);" type="submit" name="tambah">Tambah Data <i class="fa fa-chevron-circle-right"></i></button><a class="btn btn-primary active btn-block" role="button" style="background-color:#303641;"
                                href="../disposisi.php">Kembali<i class="fa fa-chevron-circle-left"></i></a></div>
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