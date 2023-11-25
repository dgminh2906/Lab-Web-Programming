<?php
echo '<table style="margin: auto auto; border: 1px solid; border-collapse:collapse; width: 20%; background-color: yellow;">';
for ($i = 1; $i <= 7; $i++) {
    echo '<tr style="text-align: center; border: 1px solid;">';
    for ($j = 1; $j <= 7; $j++) {
        echo '<td style=" text-align: center; border: 1px solid;">';
        if ($j == 1)
            echo "&nbsp" . ($i * $j) . "&nbsp";
        else
            echo $i * $j;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>