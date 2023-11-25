<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "shop";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>Lab3_Phan2_bai4</title>
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
                <a class="navbar-brand" href="list.php">Site Title</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav ms-5">
                        <li class="nav-item">
                            <a href="#" class="nav-link">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Follow us</a>
                        </li>
                    </ul>
                </div>

                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-2 bg-white">
                <div class="row">
                    <div class="col-md-6 col-lg-12">
                        <div class="list-group ms-1 mt-1">
                            <a href="list.php" class="list-group-item list-group-item-secondary text-center bold">Category</a>
                            <?php
                            $sql = "SELECT * FROM products";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<a href='#' id='" . $row["id"] . "' class='list-group-item list-group-item-action'> " . $row["name"] . "</a>";
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-12">
                        <div class="list-group ms-1">
                            <a href="list.php" class="list-group-item list-group-item-secondary text-center bold">Top
                                Products</a>
                            <?php
                            $sql = "SELECT * FROM products";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<a href='#' id='" . $row["id"] . "' class='list-group-item list-group-item-action'>" . $row["name"] . "</a>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-8 product">
                <h3 class="mt-1">Top Products</h3>
                <div class="row">
                    <?php
                    $sql = "SELECT * FROM products";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo
                            "
                            <div class='col-md-6 col-lg-6 col-xl-4 mt-4'>
                                <a href='#' id='" . $row["id"] . "' class='link-dark link-underline link-underline-opacity-0'>
                                    <div class='card text-center'>
                                            <img class='card-img-top' src='" . $row["image"] . "' alt='Card image' height='200'>
                                            <div class='card-body'>
                                                <p class='card-text fw-bold'>" . $row["name"] . "</p>
                                                <p class='card-text text-muted'>Price " . $row["price"] . "$</p>
                                                <a href='#' id='" . $row["id"] . "'class='btn btn-outline-secondary'>Buy Now</a>
                                                </div>
                                    </div>
                                </a>
                            </div> ";
                        }
                    }
                    ?>
                </div>

                <div class="row mt-3">
                    <ul class="pagination justify-content-end ">
                        <li class="page-item ">
                            <a class="page-link text-black" href="#">Prev</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-black" href="#">1</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-black" href="#">2</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-black" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link text-black" href="#">Next</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="d-none d-xl-block col-xl-2">
                <div class="row row-above">
                    <div class="col-lg-12" style="height: 600px">
                        <img src="image/sale.png" alt="ads">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12" style="height: 200px"></div>
                </div>
            </div>
        </div>
        <footer class="bg-light text-center">
            <div class="p-3">Footer Information...
                <br>
                <a class="blue" href="#">Link 1</a> |
                <a class="black" href="#">Link 2</a> |
                <a class="blue" href="#">Link 3</a>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script>
        $(document).ready(function () {
            $(".list-group-item-action, .btn-outline-secondary, .link-dark").click(function () {
                id = $(this).attr('id');
                $.ajax({
                    url: "detail.php?id=" + id,
                    success: function (result) {
                        $(".product ").html(result);
                    }
                });
            });
        });
    </script>
</body>

</html>