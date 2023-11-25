<?php
    function msg($n){
        switch($n%5){
            case 0:
                echo "Hello <br>";
                break;
            case 1:
                echo "How are you? <br/>";
                break;
            case 2:
                echo "I'm doing well, thank you <br/>";
                break;
            case 3:
                echo "See you later <br/>";
                break;
            case 4:
                echo "Goodbye <br/>";
                break;
            default:
                echo "Số nhập vào phải là số nguyên dương <br/>";
                break;
        }
    }
    msg(5);
    msg(6);
    msg(7);
    msg(8);
    msg(9);
    msg(-3);
?>