<?php

//1. $a　という変数に3を、$b　という変数に7を代入して、echoを使って$a+$bの結果を表示してみましょう。
$a = 3;
$b = 7;
$ab = $a + $b;
echo $ab . "\n"; 



//2. $array_month という配列に1月〜12月の文字列を代入し、echoで8月を表示してみましょう。
$array_month = ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'];
echo $array_month[7] . "\n";
//3. $hello　という変数に　”Hello, “を $name という変数にあなたの名前を、　
//$world という変数に　”C” を代入して、各変数を連結させて “Hello, あなたの名前’s World!” と表示してみましょう。
$hello = 'Hello,';
$hello .= 'kyosuke';
$hello .= '’s World!';
echo $hello . "\n";
//4. $tech_boostに “tech “という文字列が代入されています。複合演算を使って、echo $tech_boost:と実行すると「tech boost」と表示されるように実装してみましょう。
$tech_boost = 'tech';
$tech_boost .= 'boost';
echo $tech_boost . "\n";
//5. 【応用】次のプログラムにはバグがあります。どこにバグが有るか調べて修正してみましょう。(バグは1つとは限りません。)

$a2020_calendar = [
  "January" => "1月", 
  "February" => "2月", 
  "March" => "3月", 
  "April" => "4月", 
  "May" => "5月", 
  "June" => "6月", 
  "July" => "7月", 
  "August" => "8月", 
  "September" => "9月", 
  "October" => '10月', 
  "November" => "11月", 
  "December" => "12月"
];

// 12月を表示する
echo $a2020_calendar["December"];

?>