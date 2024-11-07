<?php
// $variable = "Eren CennetKuşu";
// $args1 = 10;
// $args2 = 20;
// // print $args1 + $args2;
// if($args1 == $args2){
//     print "esittir";
// }else{
//     print "eşit değildir";
// }
// -------------

// $args1 = 20;
// $args2 = '20';
// if($args1 === $args2){
//     print "esittir";
// }else{
//     print "eşit değildir";
// }
//-------------------
// $args1 = 30;
// $args2 = 20;
// if($args1 === $args2){
//     print "esittir";
// }else if($args1 > $args2){
//     print $args1 .' : Büyüktür.';
// }else if($args1 < $args2){
//     print $args1 .' : küçüktür'. $args2;
// }

// $veriable = "Kasım Yüksel & Eren CennetKuşu";
// $args1 = 1;
// $args2 = 20;
// // print $args1 += $args2;
// // print $args1 .= 50 ."<br>";
// print $args1 -= 50;
// -----------diziler-------------------
// $array = array(
//     "foo" => "bar",
//     "bar" => "foo",
// );
//----dizilerde bu iki yöntemde aynı, istediğimizi kullanabiliriz-----
// $array = array(
//     "foo" => "bar",
//     "bar" => "foo",
// );

// $array = [
//     "foo" => "bar",
//     "bar" => 10.1,
// ];
// // print_r($array);
// var_dump($array);
//--------------------
// $array = 
// [
//     "product" => "bilgisayar",
//     "color" => "siyah"
// ];
// print_r($array);
//-----------------------
$array = 
[
  'products'=> ["product" => "bilgisayar","color" => "siyah", "işlemci tipi" => ["i7", "RYZEN 7"]],
  'books' =>  ["product" => "Kitap","color" => "siyah"],
];
// print_r($array);
print_r($array["products"]["işlemci tipi"][0]);
?>