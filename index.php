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
// $array = 
// [
//   'products'=> ["product" => "bilgisayar","color" => "siyah", "işlemci tipi" => ["i7", "RYZEN 7"]],
//   'books' =>  ["product" => "Kitap","color" => "siyah"],
// ];
// // print_r($array);
// print_r($array["products"]["işlemci tipi"][0]);
//-----------------------------
// $a = 10;
// $b = 20;
// print ($a > $b) ? "Büyüktür." : "Değildir.";

// $a = null;
// $b = 20;
// //null kontrol
// print $a ?? "Değersiz";
// $a = "";
// $b = 20;
// //dolu boş kontrol
// print $a ?? "Değersiz";


//--------------------DÖNGÜLER ( foreach, for, while)-----------------
// $array = 
// [
//     "product" => "bilgisayar",
//     "color" => "siyah"
// ];
// foreach ($array as $key => $value) {
//     if ($key !== 'product') {
//         print 'Anahtar: ' .$key .', Değer: ' .$value."<hr/>";
//     }
// }

// --------for-------
// for ($i=0; $i < 15; $i++) { 
//     print $i ."<hr/>";
// }

// $array = 
// [
//      "bilgisayar",
//      "siyah",
// ];
// print count($array);
// exit;
// for ($i=0; $i < count($array); $i++) { 
//     print $array[$i] . "<hr/>";
// }

//---------While----------
// $array = 
//     [
//         "bilgisayar",
//         "siyah",
//         "kitap",
//         "defter",
//         "Kalem",
//         "Çanta",
//     ];
// $a = 0;
// while ($a <= 5){
//     print $array[$a] ."<hr/>";
//     $a++;
// }

// --------------------------
// $array = 
//     [
//         "bilgisayar",
//         "siyah",
//         "kitap",
//         "defter",
//         "Kalem",
//         "Çanta",
//     ];
//     // $new_array = array_map(function ($item){
//     //     return $item = "";

//     // }, $array);
//     // var_dump($new_array);

//     $new_array = array_map(function ($item){
//         return "Kırtasiye : " .$item;

//     }, $array);
//     var_dump($new_array);

// $string = "Bilgisayar,Kitap,Defter,Kalem,Silgi,Çanta";
// $array = explode(",",$string);
// print_r($array);

//-------------------//
// $array = 
//     [
//         "bilgisayar",
//         "siyah",
//         "kitap",
//         "defter",
//         "Kalem",
//         "Çanta",
//     ];
//     $string = implode(',',$array);
// print_r($string); 


require_once __DIR__."/config.php";

?>