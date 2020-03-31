<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <?php include 'partials/head.php' ?>
</head>

<body class="bg-dark">

    <div style="width: 50%" class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <div class="form-label-group">
                            <input name="username" type="text" class="form-control" required="required" autofocus="autofocus">
                            <label>Username</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input name="password" type="password" class="form-control" required="required">
                            <label>Password</label>
                        </div>
                    </div>
                    <button class="btn btn-primary btn-block" name="login">Login</button>
                </form>
                <?php
                if (isset($_POST['login'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    include 'koneksi.php';

                    $cek = $koneksi->query("SELECT * FROM tb_admin WHERE admin_username = '$username' AND admin_password = '$password'");
                    $pecah = $cek->fetch_assoc();
                    $validasi = $cek->num_rows;

                    if ($validasi >= 1) {
                        session_start();
                        $akun = $_SESSION['admin'] = $pecah;

                        echo "<script>
            alert('anda berhasil login');
            window.location='index.php';
            </script>";
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <!-- <?php include 'partials/script.php' ?> -->

</body>

</html>