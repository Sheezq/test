<?php
function bubbleSort($array) {
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {

        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                // Swap $array[$j] and $array[$j + 1]
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }

    }
    return $array;
}

$array = [4, 7, 6, 2, 8, 9, 3];
var_dump($array);
$sortedArray = bubbleSort($array);
echo "<pre>";
print_r($sortedArray);
echo "</pre>";
?>
