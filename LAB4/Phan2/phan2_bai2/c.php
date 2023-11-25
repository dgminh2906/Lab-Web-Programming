<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4_phan2_bai2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <div class="container bg-light" style="width: 600px">
        <div class="row mt-4">
            <h2 class="fw-bold text-center mt-2">EDIT PRODUCTS</h2>
        </div>

        <form method="post" action="" id="update_product">

            <input type="text" id="name" class="form-control mt-3" name="name" placeholder="Name" value="">
            <input type="text" id="des" class="form-control mt-3" name="des" placeholder="Description" value="">
            <input type="text" id="price" class="form-control mt-3" name="price" placeholder="Price" value="">
            <input type="text" id="img" class="form-control mt-3" name="img" placeholder="Image" value="">

            <div class="row">
                <div class="col">
                    <input type="submit" class="form-control btn btn-success mt-3" name="submit" value="Submit">
                </div>
                <div class="col">
                    <a class="form-control btn btn-secondary mt-3" href="a.php">Read Products</a>
                </div>
            </div>
        </form>
    </div>
    <script>
        $(document).ready(function () {
            var productId = <?php echo $_GET['edit_id'] ?>;
            console.log(productId);
            $.ajax({
                url: "web_services/getOne.php?edit_id=" + productId,
                type: "GET",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    $("#name").val(data.name);
                    $("#des").val(data.description);
                    $("#price").val(data.price);
                    $("#img").val(data.image);
                },
                error: function (err) {
                    console.log(err);
                }
            });
            $("#update_product").on("submit", function (e) {
                e.preventDefault();
                if ($("#name").val() == "" || $("#name").val().length < 5 || $("#name").val().length > 40) alert("Invalid Name");
                else if ($("#des").val() == "" || $("#des").val().length > 5000) alert("Invalid Description");
                else if ($("#price").val() == "" || isNaN($("#price").val())) alert("Invalid Price");
                else if ($("#img").val() == "" || $("#img").val().length > 255) alert("Invalid Image");
                else {
                    var product = {
                        id: productId,
                        name: $("#name").val(),
                        description: $("#des").val(),
                        price: $("#price").val(),
                        image: $("#img").val()
                    }
                    $.ajax({
                        url: "web_services/update.php?edit_id=" + productId,
                        type: "POST",
                        contentType: "application/json; charset=utf-8",
                        dataType: "json",
                        data: JSON.stringify(product),
                        success: function (data) {
                            console.log(data);
                            alert("Update Successfully");
                            window.location.href = "a.php";
                        },
                        error: function (err) {
                            console.log(err);
                        }
                    })
                }
            })
        })
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>