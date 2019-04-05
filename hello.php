<?php
define("NAME", "harhogefoo");
echo "hello\n";
echo print_r($argv) . "\n";
echo "Hello" . NAME;

// Array
$banban1[] = "HTML";
$banban1[] = "XHTML";
$banban1[] = "XML";
echo $banban1;

$banban2 = array("HTML", "XHTML", "XML", "XSLT");
echo $banban2;

// Hash
$fruit = array(
  "Apple" => "りんご",
  "Orange" => "みかん",
  "Grape" => "ぶどう"
);

while(list($key, $val) = each($fruit)) {
  print("index の $key は、$val です\n");
}

// Operator
$samp = 17 + 5;
echo "17 + 5 = $samp \n";

$samp = 17 - 5;
echo "17 - 5 = $samp \n";

$samp = 17 * 5;
echo "17 * 5 = $samp \n";

$samp = 17 / 5;
echo "17 / 5 = $samp \n";

$samp = 17 % 5;
echo "17 % 5 = $samp \n";

$x = 15;
echo "変数\$xに代入された値は $x です。\n";

if($x == 15) echo "\$xの値は15に等しい\n";
if($x < 10) echo "\$xの値は10より大きい\n";
if($x > 20) echo "\$xの値は20より小さい\n";
if($x >= 10) echo "\$xの値は10より大きいか等しい\n";
if($x <= 20) echo "\$xの値は20より小さいか等しい\n";
if($x != 10) echo "\$xの値は10と等しくない\n";
if($x <> 10) echo "\$xの値は10と等しくない\n";

// string
$subject = "hogepiyo";
$search = "hoge";
$replace = "bar";
$word = str_replace($search, $replace, $subject);
echo "$word\n";

// loop
$a = 0;
$lectur = array("HTML", "XHTML", "XML", "JavaScript", "PHP");
while($a < 4) {
  print($lectur[$a]."&#160\n");
  $a++;
}

for($a = 0; $a < 4; $a++) {
  $lectur = array("HTML", "XHTML", "XML", "JavaScript", "PHP");
  print($lectur[$a]). "&#160;\n";
}

$a = 0;
$lectur = array("HTML","XHTML","XML","JavaScript","PHP");
do {
  print($lectur[$a]). "&#160;\n";
  $a++;
} while($a < 4);

$a = array("Apple" => "りんご", "Orange" => "みかん", "Grape" => "ぶどう");
foreach($a as $key => $value) {
  print("$key は、$value\n");
}

// codition
$a = 10;
if ($a > 5) {
  print("変数\$aは、5よりも大きい");
}

// function
function strong($text) {
  return("<em>$text</em>\n");
}
print(strong("この文字は強調されます"));

function num($a) {
  $a = ($a + 2) + $a;
  return $a;
}

$b = 5;
print("\$bの初期値は". $b. "です\n");
$c = num($b);
print("関数の実行結果は".$c."です");

// class
class Shopping {
  var $item = "コンピュータ";
  var $price = 99800;

  function getTotal() {
    $tax = $this->price * 0.05;
    return $this->price + $tax;
  }
}

$newShopping = new Shopping();
$item = $newShopping;
print("\$itemの合計は".$item->getTotal()."円になります\n");

// date
/*
second ---- 現在の秒を定義する
mimutes --- 現在の分定義する
hours ----- 現在の時定義する
mday ------ 現在の月次の日付を定義する
wday ------ 現在の曜日番号を定義する
mon ------- 現在の月を定義する
year ------ 現在の年を定義する
yday ------ その年の通算日を定義する
weekday --- 現在の曜日の文字列を定義する
month ------- 現在の月の文字列を定義する
*/
// 今の時間を参照する getdate()
// ローカル時間
$today = getdate();
print("$today[year]年$today[mon]月$[mday]日\n");
print("今年1月1日から$today[yday]日目です\n");
print("$today[weekday] $today[month]/$today[mday]/$today[year]\n");

// 日付表現のフォーマットと時間の参照 date()関数
// getdate()関数では、連想配列から参照した日付の表現方法を示す。date()はより自由なフォーマットで表現
$today = date("Y/m/d | H:i:s\n");
print($today);
?>