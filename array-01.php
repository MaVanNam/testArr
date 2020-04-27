<?php
$arr1 = [1, 2, 3, 3];
if (!empty($arr1)) {
    foreach ($arr1 as $key => $value) {
        echo $key . ":" . $value . " </br>";
    }
} else {
    echo "mang trong";
}