<?php

// -------------------------2.DERS----------------------------

//-----------Koşullu ifadeler if, else, else if, switch case------------//

// $products = [
//     // array("product_id" => 1),
//     // array("product_id" => 2),
//     // array("product_id" => 3),
//     // array("product_id" => 4),
//     // array("product_id" => 5),
//     //bu şekilde de kullanabiliriz..

//     ["product_id" => 1],
//     ["product_id" => 2],
//     ["product_id" => 3],
//     ["product_id" => 4],
//     ["product_id" => 5],
// ];
// if (is_array($products)) {
//     print_r($products);
// }else {
//     print "Bu bir dizi degidir";
// }

//-------string için de-------

// $products = "product_id";

// if (is_array($products)) {
//     print_r($products);
// }else {
//     print "Bu bir dizi degidir";
// }

//--------cok boyutlu dizi------
// $products = [
//     ["product_id" => 1, "name" => "Bilgisayar", "color_code" => "SM", "color_name" => "Siyah"],
//     ["product_id" => 2, "name" => "Klavye", "color_code" => "BZ", "color_name" => "Beyaz"],
//     ["product_id" => 3, "name" => "Monitör", "color_code" => "SH", "color_name" => "Siyah"]

// ];

// $products = "product_id";

// if (is_array($products)) {
//     print_r($products);
// }else {
//     print "Bu bir dizi degidir";
// }
//--2. yöntemse--

//--------------------
// $products = null;

// if (isset($products)) {
//     print_r($products);
// }else {
//     print "Bu değişken tanımlı degidir";
// }

//---------
// $products = "";

// if (isset($products)) {
//     print_r($products);
// }else {
//     print "Bu değişken tanımlı degidir";
// }
 //isset null değilse ve varsa tanımlıysa çalıştırır


//  $products = [
//     ["product_id" => 1, "name" => "Bilgisayar", "color_code" => "SM", "color_name" => "Siyah"],
//     ["product_id" => 2, "name" => "Klavye", "color_code" => "BZ", "color_name" => "Beyaz"],
//     ["product_id" => 3, "name" => "Monitör", "color_code" => "SH", "color_name" => "Siyah"]

// ]; 
// // $products = null; //
// if (isset($products[3])) { 
//     print_r($products);
// }else if (empty($products)){
//     print "Bu değişkenin değeri boştur.";
// }else{
//     print "Herhangi bir koşul sağlanmadı";

// }


//-------------------------------
// $products = [
//     ["product_id" => 1, "name" => "Bilgisayar", "color_code" => "SM", "color_name" => "Siyah"],
//     ["product_id" => 2, "name" => "Klavye", "color_code" => "BZ", "color_name" => "Beyaz"],
//     ["product_id" => 3, "name" => "Monitör", "color_code" => "SH", "color_name" => "Siyah"]

// ]; 
// if ($products[0]["product_id"] > 2) {
//     print $products[0]["name"];
// }

//--------SWİTCH CASE--------------------

// $products = [
//     ["product_id" => 1, "name" => "Bilgisayar", "color_code" => "SM", "color_name" => "Siyah"],
//     ["product_id" => 2, "name" => "Klavye", "color_code" => "BZ", "color_name" => "Beyaz"],
//     ["product_id" => 3, "name" => "Monitör", "color_code" => "SH", "color_name" => "Siyah"]

// ]; 
// $products_name = "Monitor";
// switch ($products_name) {
//     case 'Klavye':
//         print "Ben bir klavyeyim";
//         break;
//     case 'Bilgisayar':
//         print "Ben bir bilgisayarım ";
//         break;
        
//     default:
//         print $products_name. ": default koşulu çalıştı";
//         break;
// }

//--

// $products = [
//     ["product_id" => 1, "name" => "Bilgisayar", "color_code" => "SM", "color_name" => "Siyah"],
//     ["product_id" => 2, "name" => "Klavye", "color_code" => "BZ", "color_name" => "Beyaz"],
//     ["product_id" => 3, "name" => "Monitör", "color_code" => "SH", "color_name" => "Siyah"]

// ];
// switch ($products[2]['product_id']) {
//     case 2:
//         print $products[1]['name'];
//         break;
//     case 1:
//         print $products[0]['name'];
//         break;
//     case 3:
//         print $products[2]['name'];
//         break;
              
//     default:
//         print $product_name. ': default koşulu çalıştı';
//         break;
// }




















?>