<?php
require_once "../_config/config.php";

// Cek apakah sesi user sudah ada
if (isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url('dashboard/index.php') . "'</script>";
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login - EMR Kasih</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url(); ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: url('<?= base_url('_assets/images/hal_login.jpg'); ?>') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Arial', sans-serif;
            color: #fff;
            position: relative;
            margin: 0;
            padding: 0;
        }
        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Transparansi latar belakang */
            z-index: 1;
        }
        #wrapper {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
            z-index: 2;
        }
        .login-form {
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        .login-header {
            margin-bottom: 25px;
            font-size: 24px;
            font-weight: bold;
            color: #fff;
        }
        .form-control {
            background-color: rgba(255, 255, 255, 0.8);
            border: none;
            border-radius: 10px;
            margin-bottom: 15px;
            height: 45px;
            color: #333;
        }
        .form-control:focus {
            background-color: rgba(255, 255, 255, 0.9);
        }
        .btn-primary {
            width: 100%;
            background-color: #ff6b6b;
            border-color: #ff6b6b;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(255, 107, 107, 0.2);
        }
        .btn-primary:hover {
            background-color: #ff4757;
            border-color: #ff4757;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <div class="login-form">
            <div class="login-header">SELAMAT DATANG DI HALAMAN LOGIN APLIKASI REKAM MEDIS</div>
            <?php
                 if(isset($_POST['login'])){
                    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                    $pass = (trim(mysqli_real_escape_string($con, $_POST['pass'])));

                    $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($con));
                    if(mysqli_num_rows($sql_login) > 0){
                        $_SESSION['user'] = $user;
                        echo "<script>window.location='".base_url("dashboard/index.php")."'</script>";
                     { ?>
                            <div class="alert alert-danger alert-dismissable" role="alert">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                <strong>Login gagal!</strong> Password salah.
                            </div>
                        <?php
                        }
                    } else { ?>
                        <div class="alert alert-danger alert-dismissable" role="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <strong>Login gagal!</strong> Username tidak ditemukan.
                        </div>
                    <?php
                    }
                }
            ?>
            <form action="" method="post" class="navbar-form">
                <input type="text" name="user" class="form-control" placeholder="Username" required="" autofocus="">
                <input type="password" name="pass" class="form-control" placeholder="Password" required="">
                <input type="submit" name="login" class="btn btn-primary" value="Login">
            </form>
        </div>
    </div>

    <script src="<?= base_url('_assets/js/jquery.js'); ?>"></script>
    <script src="<?= base_url('_assets/js/bootstrap.min.js'); ?>"></script>

</body>
</html>

<?php ?>
