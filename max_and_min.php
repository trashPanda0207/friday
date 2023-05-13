<?php
function maxValue($num_1, $num_2, $num_3)
{
    $numbers = array($num_1, $num_2, $num_3);
    $max_value = null;
    foreach ($numbers as $item) {
        if ($max_value == null) {
            $max_value = $item;
        }
        if ($item > $max_value) {
            $max_value = $item;
        }
    }
    return $max_value;
}

function minValue($num_1, $num_2, $num_3)
{
    $numbers = array($num_1, $num_2, $num_3);
    $min_value = null;
    foreach ($numbers as $item) {
        if ($min_value == null) {
            $min_value = $item;
        }
        if ($min_value > $item) {
            $min_value = $item;
        }
    }
    return $min_value;
}

echo "最大: " . maxValue(77, 88, 56);
echo '<br>';
echo "最小: " . minValue(77, 88, 56);