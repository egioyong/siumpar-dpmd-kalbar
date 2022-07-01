<?php
include "../koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM user WHERE id = '$id'";

$result =mysqli_query($db,$query);
$list = mysqli_fetch_assoc($result);


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit-Operator</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Contact-form-simple.css">
    <link rel="stylesheet" href="../assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css">
    <link rel="stylesheet" href="../assets/css/ebs-contact-form-1.css">
    <link rel="stylesheet" href="../assets/css/ebs-contact-form.css">
    <link rel="stylesheet" href="../assets/css/info-box.css">
    <link rel="stylesheet" href="../assets/css/Landing-Section-with-Call-to-Action-BS4.css">
    <link rel="stylesheet" href="../css/Login-Box-En.css">
    <link rel="stylesheet" href="../assets/css/login-form-1.css">
    <link rel="stylesheet" href="../assets/css/login-form.css">
    <link rel="stylesheet" href="../assets/css/Recuperar-Password-mloureiro1973.css">
    <link rel="stylesheet" href="../assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="../assets/css/Table-With-Search.css">
</head>

<body style="background-image: url(&quot;assets/img/IMG_0247.JPG&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;">
    <section id="contact" style="padding:40px;padding-right:5px;padding-left:4px;">
        <div class="container" style="background-color: #ffffff;">

            <form id="contactForm" style="padding:15px;"  method="POST" action="proses_edit.php">
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">  
                <fieldset>
                    <legend class="text-center"><i class="fa fa-envelope"></i>&nbsp; Edit Operator</legend>
                </fieldset>
                <div class="form-row" style="margin-left:0px;margin-right:0px;padding:10px;">
                    <div class="col-12 col-md-6" id="message" style="padding-right:20px;padding-left:20px;">
                        <div class="form-group has-feedback"><label for="username">username</label>
                            <input class="form-control" type="text" placeholder="Username" name="username" value="<?php echo $list['username'] ?>"></div>
                        <div class="form-group has-feedback"><label for="password">Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Password" value="<?php echo $list['password'] ?>"></div>
                    </div>
                    <div class="col-12 col-md-6" id="message-1" style="padding-right:20px;padding-left:20px;">
                        <div class="form-group has-feedback"><label for="bidang">Bidang</label>
                            <input class="form-control" type="text" name="bidang" placeholder="Bidang" value="<?php echo $list['bidang'] ?>"></div>
                        <div class="form-group has-feedback"><label for="level">Level</label>
                            <select class="form-control" id="level" name="level">
                                <optgroup label="Pilih Level User">
                                    <option value="admin" <?php if($list['level']=="admin") echo 'selected="selected"'; ?>>admin</option>
                                    <option value="operator" <?php if($list['level']=="operator") echo 'selected="selected"'; ?>>operator</option>
                                </optgroup>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <button class="btn btn-primary active btn-block" style="background-color: rgb(0,90,255);" type="submit" name="daftar" value ="Daftar">Ubah Data <i class="fa fa-chevron-circle-right"></i></button><a class="btn btn-primary active btn-block" role="button" style="background-color:#303641;"
                                href="../operator.php">Kembali<i class="fa fa-chevron-circle-left"></i></a></div>
                    </div>
                </div>
            </form>
            
        </div>
    </section>
    <script src="../ssets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../assets/js/Table-With-Search.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>