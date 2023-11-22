<?php
function fibonacci($n){
    $first = 0;
    $second = 1;
    for($i = 0; $i < $n; $i++){
        $output = $first;
        $first = $second;
        $second = $output + $first;
        if (($i + 1) % 2  == 0) {
            echo "<li class='li-blue'>$output</li>";
        } 
        else {
            echo "<li class='li-red'>$output</li>";
        }
    }
}
?>