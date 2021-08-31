<?php
//問１
function double($number){
$result = $number * 2;
return $result;
}
echo double(4) . "\n";

//問２
function add($a, $b){
    $result = $a + $b;
    return $result;
}
echo add(45, 23) . "\n";

//問３
function multiple($arr){
    $result = 1;
    foreach ($arr as $result2){
    $result *= $result2;
}
return $result;
}
echo multiple(array(1, 3, 5, 7, 9)) . "\n";

//問４
function max_array($arr) {
    // とりあえず配列の最初の要素を1番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a) {
        if ($max_number < $a) {
            $max_number = $a;
          }
    //どうしたらいいかわからない・・・・
    }
    return $max_number;
    }
    echo max_array(array(1, 3, 5, 7, 9)) . "\n";

//問５
$hitotume = '<p>問５の１つ目</p><!-- Comment --> <a href="#fragment">問５の一つ目の２</a>';
echo strip_tags($hitotume);
echo "\n";
echo strip_tags($hitotume, '<p><a>');

$futatume = array("a", "b");
array_push($futatume, "a", "c");
print_r($futatume);
echo "\n";

$array1 = array("color" => "red", 2 ,4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

$nextWeek = time() + (7 * 24 * 60 * 60);
echo 'Now:' .date('Y-m-d')."\n";
echo 'Now Week:' .date('Y-m-d', $nextWeek)."\n";
date_default_timezone_set('UTC');
echo "July 1, 2000 is on a" .date("l", mktime(0, 0, 0, 7, 1, 2000));

echo date('Y-m-d H:i:s', 10);
?>