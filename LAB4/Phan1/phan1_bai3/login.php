<?php
session_start();
$username = "admin";
$password = "1";
$msg = "";
if (isset($_SESSION['username'])) {
    $msg = "";
    header('location: info.php');
} else {
    if (isset($_COOKIE['username'])) {
        $msg = "";
        header('location: info.php');
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rm_check = ((isset($_POST['remember']) != 0) ? 1 : "");
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $msg = "Cần nhập đầy đủ tài khoản và mật khẩu";
    } else if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
        if ($rm_check == 1) {
            setcookie('username', $username, time() + 3600*24*7);
            setcookie('password', $password, time() + 3600*24*7);
        }
        $msg = "";
        header('location: info.php');
    } else {
        $msg = "Tài khoản hoặc mật khẩu không chính xác";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4_phan1_bai3_Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    $username = $password = "";
    ?>
    <div class="container bg-white" style="width: 400px">
        <div class="row">
            <h2 class="fw-bold text-center mt-4">LOGIN</h2>
        </div>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
            <input type="text" class="form-control mt-3" name="username" placeholder="Username(admin)"
                value='<?php echo $username; ?>'>
            <input type="password" class="form-control mt-3" name="password" placeholder="Password(1)"
                value='<?php echo $password; ?>'>
            <div class="form-check mt-3">
                <input type="checkbox" class="form-check-input" name="remember" value="">
                Ghi nhớ đăng nhập
            </div>
            <h6 class="form-signin-heading text-center mt-2" style="font-size:12px; color:red;">
                <?php echo $msg; ?>
            </h6>
            <div class="text-center">
                <input type="submit" class="form btn btn-primary mt-2" name="submit" value="Login">
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>