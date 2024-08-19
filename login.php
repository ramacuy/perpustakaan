<?php 
include('config/koneksi.php');
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // Hash password dengan MD5

    // Query untuk memeriksa username dan password
    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE Username='$username' AND Password='$password'");
    $cek = mysqli_num_rows($data);

    // Jika ditemukan pengguna dengan username dan password yang cocok
    if($cek > 0) {
        $_SESSION['user'] = mysqli_fetch_array($data);
        echo '<script>alert("Selamat datang, login berhasil"); location.href="index.php"</script>';
    } else {
        echo '<script>alert("Username atau password salah"); location.href="login.php"</script>';
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

    <title>e-pustaka</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">
    <link href="css/style_kategori.css" rel="stylesheet">

</head>

<body class="bg-gradient-success">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="justify-conten">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <!-- <div class="col-lg-6"> -->
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">login cuy</h1>
                                    </div>
                                    <form method="post">
                                        <div class="form-group">
                                            <!-- <label for="inputusername">username</label> -->
                                             <!-- <label class="large mb-1" for="inputuseraddress">Username</label> -->
                                            <input class="form-control form-control-user" id="username" type="username"  name="username" placeholder="username">
                                        </div>
                                        <div class="form-group">
                                        <!-- <label for="inputpassword">password</label> -->
                                        <!-- <label class="large mb-1" for="inputuseraddress">password</label> -->
                                            <input class="form-control form-control-user" id="password" type="password" name="password" placeholder="password">
                                        </div>
                                        <div>
                                        <!-- <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"> -->
                                       <button type="submit" name="login" value="login" class="btn btn-success">login</button>
                                            <!-- <a class="btn btn-danger" href="register.php">register</a>   -->
                                        </div>
                                        
                                          <hr>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">belum punya akun?</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
               </div>

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