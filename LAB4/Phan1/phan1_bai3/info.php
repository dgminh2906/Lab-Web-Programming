<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_COOKIE['username'])) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4_phan1_bai3_Info</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-white" style="width: 400px">
        <div class="row">
            <h2 class="fw-bold text-center mt-4">INFORMATION</h2>
        </div>

        <div class="row">
            <div class="col-lg-12" style="height: 200px">
                <h6 class="fw-bold text-center mt-3">Welcome
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo $_SESSION['username'];
                    }
                    else if (isset($_COOKIE['username'])) {
                        echo $_COOKIE['username'];
                    }
                    ?>!
                </h6>
                <div class="text-center">
                    <a class="form btn btn-danger mt-3" href="logout.php" role="button">Logout</a><br>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>