<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab3_phan1_bai5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    $input1 = "";
    $input2 = "";
    $result = "";
    $operator = "";
    if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
        $input1 = isset($_POST['input1']) ? $_POST['input1'] : null;
        $input2 = isset($_POST['input2']) ? $_POST['input2'] : null;
        $operator = isset($_POST['operator']) ? $_POST['operator'] : null;

        if (!$input1 && $input1 != 0) {
            echo '<script>alert("Chưa nhập Input 1")</script>';
        } 
        else if (!$input2 && $input2 != 0) {
            echo '<script>alert("Chưa nhập Input 2")</script>';
        } 
        else if (!is_numeric($input1) || !is_numeric($input2)) {
            echo '<script>alert("Input phải có định dạng là số")</script>';
        } 
        else {
            switch ($operator) {
                case '1':
                    echo '<script>alert("Cần chọn phép tính")</script>';
                    $result = "";
                    break;
                case '2':
                    $result = $input1 . ' + ' . $input2 . ' = ' . ($input1 + $input2);
                    $input1 = "";
                    $input2 = "";
                    $operator = 1;
                    break;
                case '3':
                    $result = $input1 . ' - ' . $input2 . ' = ' . ($input1 - $input2);
                    $input1 = "";
                    $input2 = "";
                    $operator = 1;
                    break;
                case '4':
                    $result = $input1 . ' * ' . $input2 . ' = ' . ($input1 * $input2);
                    $input1 = "";
                    $input2 = "";
                    $operator = 1;
                    break;
                case '5':
                    if ($input2 == 0) {
                        echo '<script>alert("Input 2 phải khác 0")</script>';
                        $result = "";
                        $input2 = "";
                    } 
                    else {
                        $result = $input1 . ' / ' . $input2 . ' = ' . ($input1 / $input2);
                        $input1 = "";
                        $input2 = "";
                        $operator = 1;
                    }
                    break;
                case '6':
                    $result = $input1 . ' ^ ' . $input2 . ' = ' . ($input1 ** $input2);
                    $input1 = "";
                    $input2 = "";
                    $operator = 1;
                    break;
                case '7':
                    $result = $input1 . ' ^- ' . $input2 . ' = ' . ($input1 ** ($input2*(-1)));
                    $input1 = "";
                    $input2 = "";
                    $operator = 1;
                    break;
            }

        }
    }
    ?>

    <div class="container" style="width: 600px; background-color: gray">
        <div class="row bg-light">
            <h1 class="fw-bold text-center mt-3">CALCULATOR</h1>
        </div>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            <div class="row">
                <div class="col-lg-6 mt-2">
                    <input type="text" class="form-control mt-3" name="input1" placeholder="Input 1" value='<?php echo $input1 ?>'>
                </div>
                <div class="col-lg-6 mt-2">
                    <input type="text" class="form-control mt-3" name="input2" placeholder="Input 2" value='<?php echo $input2 ?>'>
                </div>
            </div>
            <select name="operator" class="form-select mt-3 text-center">
                <option value="1"> Operator </option>
                <option value="2" <?php if ($operator == '2') echo "selected='selected'" ?>> Cộng </option>
                <option value="3" <?php if ($operator == '3') echo "selected='selected'" ?>> Trừ </option>
                <option value="4" <?php if ($operator == '4') echo "selected='selected'" ?>> Nhân </option>
                <option value="5" <?php if ($operator == '5') echo "selected='selected'" ?>> Chia </option>
                <option value="6" <?php if ($operator == '6') echo "selected='selected'" ?>> Lũy thừa </option>
                <option value="7" <?php if ($operator == '7') echo "selected='selected'" ?>> Nghịch đảo </option>
            </select>
            <input type="submit" class="form-control btn btn-light mt-3" value="Calculate">
            <div class="row bg-light mt-3">
                <h2 class="text-center fw-bold mt-3">
                    <?php
                        echo $result;
                    ?>
                </h2>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

</html>