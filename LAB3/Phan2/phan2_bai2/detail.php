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
    <title>Lab3_Phan2_bai2</title>
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
                            <a href="#" class="list-group-item list-group-item-secondary text-center bold">Category</a>
                            <?php
                            $sql = "SELECT * FROM products";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<a href='detail.php?id=" . $row["id"] . "'" . "class='list-group-item list-group-item-action'>" . $row["name"] . "</a>";
                                }
                            }
                            ?>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-12">
                        <div class="list-group ms-1">
                            <a href="#" class="list-group-item list-group-item-secondary text-center bold">Top
                                Products</a>
                            <?php
                            $sql = "SELECT * FROM products";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<a href='detail.php?id=" . $row["id"] . "'" . "class='list-group-item list-group-item-action'>" . $row["name"] . "</a>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-lg-8">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="black" href="list.php">Home</a></li>
                        <li class="breadcrumb-item"><a class="black" href="#">Main Category</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sub Category</li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-xl-6 mt-1">
                        <div class="row mt-2">
                            <img src='<?php
                            $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                            $result = $conn->query($sql);
                            echo $result->fetch_assoc()["image"];
                            ?>' class="img-thumbnail" alt="" >
                        </div>
                        <div class="row">
                            <div class="col">
                                <img src='<?php
                                $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                $result = $conn->query($sql);
                                echo $result->fetch_assoc()["image"];
                                ?>' class="img-thumbnail mt-2" alt="">
                            </div>
                            <div class="col">
                                <img src='<?php
                                $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                $result = $conn->query($sql);
                                echo $result->fetch_assoc()["image"];
                                ?>' class="img-thumbnail mt-2" alt="">
                            </div>
                            <div class="col">
                                <img src='<?php
                                $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                $result = $conn->query($sql);
                                echo $result->fetch_assoc()["image"];
                                ?>' class="img-thumbnail mt-2" alt="">
                            </div>
                            <div class="col">
                                <img src='<?php
                                $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                                $result = $conn->query($sql);
                                echo $result->fetch_assoc()["image"];
                                ?>' class="img-thumbnail mt-2" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6 col-xl-6 mt-2">
                        <h2>
                            <?php
                            $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                            $result = $conn->query($sql);
                            echo $result->fetch_assoc()["name"];
                            ?>
                        </h2>
                        <h4>Summary:</h4>
                        <p class="des">
                            <?php
                            $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                            $result = $conn->query($sql);
                            echo $result->fetch_assoc()["description"];
                            ?>
                        </p>
                        <div class="text-center p-3">
                            <button class="btn btn-outline-secondary"> Buy Now </button>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <h4>Description:</h4>
                    <p class="des">
                        <?php
                        $sql = "SELECT * FROM `products` WHERE id = " . $_GET['id'] . ";";
                        $result = $conn->query($sql);
                        echo $result->fetch_assoc()["description"];
                        ?>
                    </p>
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
</body>

</html>