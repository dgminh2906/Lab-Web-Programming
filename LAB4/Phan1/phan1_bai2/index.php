<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab4_phan1_bai2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container bg-white" style="width: 600px">
        <div class="row">
            <h2 class="fw-bold text-center mt-4">Quản lý Cookie của website</h2>
        </div>

        <form>
            <input type="text" class="form-control mt-3" id="name" placeholder="Name">
            <input type="text" class="form-control mt-3" id="value" placeholder="Value">
        </form>

        <div class="row">
            <div class="col text-center">
                <button class="btn btn-success mt-3" onclick="setCookie()"> Add</button>
            </div>
            <div class="col text-center">
                <button class="btn btn-warning mt-3" onclick="setCookie()"> Edit</button>
            </div>
            <div class="col text-center">
                <button class="btn btn-danger mt-3" onclick="deleteCookie()"> Delete</button>
            </div>
            <div class="col text-center">
                <button class="btn btn-secondary mt-3" onclick="showCookie()"> Show</button>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-12 text-center">
                <table class="table table-striped table-dark">
                    <!-- <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Value</th>
                    </tr> -->
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="demo.js"></script>
</body>

</html>