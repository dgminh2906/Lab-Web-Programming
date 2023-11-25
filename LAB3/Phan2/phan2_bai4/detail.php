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
    <div class="container">
        <div class="col-md-12 col-lg-12 mt-2 product">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="black" href="list.php">Home</a></li>
                    <li class="breadcrumb-item"><a class="black" href="list.php">Main Category</a></li>
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
                        ?>' class="img-thumbnail" alt="">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>