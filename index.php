<?php

echo  "1, 8, 5, 77, 13, 9, 7, 4, 51, 52, 17, 27";
echo '<hr>';
$arr = [1, 8, 5, 77, 13, 9, 7, 4, 51, 52, 17, 27];
$reuslt = insertSort($arr);
print_r($reuslt);

function insertSort(array $arr)
{
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }

    for ($i = 1; $i < $count; $i++) {
        $cur_val = $arr[$i];
        $j = $i - 1;

        while (isset($arr[$j]) && $arr[$j] > $cur_val) {
            $arr[$j + 1] = $arr[$j];
            $arr[$j] = $cur_val;
            $j--;
        }
    }

    return $arr;
}


$s = array(5, 4, 3, 2, 1);
echo '<hr>';

if ($s[0]> $s[1][2][3][4]) {
    echo $s[1], $s[2], $s[3], $s[4], $s[0];
    echo '<hr>';
}
else {
    echo $s[0], $s[1],$s[2], $s[3],$s[4];
    echo '<hr>';
}

if ($s[1]> $s[2][3][4]) {
    echo $s[2], $s[3], $s[4], $s[1], $s[0];
    echo '<hr>';
}
else {
    echo $s[1], $s[2], $s[3], $s[4],$s[0];
    echo '<hr>';
}

if ($s[2]> $s[3][4]) {
    echo $s[3], $s[4], $s[2], $s[1], $s[0];
    echo '<hr>';
}
else {
    echo $s[2], $s[3], $s[4], $s[1],$s[0];
    echo '<hr>';
}
if ($s[3]> $s[4]) {
    echo $s[4], $s[3], $s[2], $s[1], $s[0];
    echo '<hr>';
}
else {
    echo $s[3], $s[4], $s[2], $s[1],$s[0];
    echo '<hr>';
}

?>