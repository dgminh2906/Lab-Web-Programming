<?php
    echo "Các số lẻ từ 0 đến 100 <br/>";
    echo "a. Dùng vòng lặp for: <br/>";
    for ($i = 1; $i<100; $i+=2){
        echo $i ." ";
    }
    echo "<br/> b. Dùng vòng lặp while: <br/>";
    $i=1;
    while ($i < 100){
        echo $i ." ";
        $i+=2;
    }
?>