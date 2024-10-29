<?php
session_start();
include 'koneksi.php';
if (isset($_POST['login'])) {
    $email = $_POST['email']; // untuk mengambil nilai dari input
    $password = $_POST['password'];

    $queryLogin = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
    // mysli_num_row() : untuk melihat total data di dalam table
    if (mysqli_num_rows($queryLogin) > 0) {
        $rowLogin = mysqli_fetch_assoc($queryLogin);
        if ($password == $rowLogin['password']) {
            $_SESSION['nama'] = $rowLogin['nama'];
            $_SESSION['id'] = $rowLogin['id'];
            header("location:profile.php");
        } else {
            header("location:login.php?login=gagal");
        }
    } else {
        header("location:login.php?login=gagal");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="" style="background-image: url('img/5.jpg'); background-size: cover;">

    <div class="container col-md-4" style="margin-top: 150px;">
        <div class="">
            <div class="authentication-inner">
                <!-- Register -->
                <div class="card bg bg-transparent" style="backdrop-filter: blur(5px);">
                    <div class="card-body">
                        <h4 class="mb-2 fw-bold text-white" align="center">WELCOME!</h4>

                        <form id="formAuthentication" class="mb-3" method="POST">
                            <div class="mb-3">
                                <label for="email" class="form-label text-white">Email or Username</label>
                                <input
                                    type="email"
                                    class="form-control bg bg-transparent text-white"
                                    style="border-radius: 70px;"
                                    id="email"
                                    name="email"
                                    placeholder="Masukan Email Anda" required
                                    autofocus />
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <label class="form-label text-white" for="password">Password</label>
                                </div>
                                <input
                                    type="password"
                                    class="form-control bg bg-transparent text-white"
                                    style="border-radius: 70px;"
                                    id="password"
                                    name="password"
                                    placeholder="Masukan Password" required
                                    autofocus />
                                </div>
                            </div>
                            <div class="mb-3 ms-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="form-check-label text-white" for="remember-me"> Remember Me </label>
                                </div>
                            </div>
                            <div class="mb-3" align="center">
                                <button name="login" class="btn btn-outline-light text-white d-grid w-50 mt-5 fw-bold" style="letter-spacing: 4px; border-radius: 70px;" type="submit">LOGIN</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- /Register -->
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>