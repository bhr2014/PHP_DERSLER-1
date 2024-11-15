<?php
// /--------DÖNGÜLER FOR, FOREACH, WHİLE---------------

$products = [
    ["product_id" => 1, "name" => "Bilgisayar", "color_code" => "SM", "color_name" => "Siyah"],
    ["product_id" => 2, "name" => "Klavye", "color_code" => "BZ", "color_name" => "Beyaz"],
    ["product_id" => 3, "name" => "Monitör", "color_code" => "SH", "color_name" => "Siyah"]

];

for ($i=0; $i < 5 ; $i++) { 
    print $i ."<hr/>";
}

//---

for ($i=0; $i < count($products)  ; $i++) { 
    print_r ($products[$i]);
    print $i ."<hr/>";
}

// ------------FOREACH----------
$products = [
    ["product_id" => 1, "name" => "Bilgisayar", "color_code" => "SM", "color_name" => "Siyah"],
    ["product_id" => 2, "name" => "Klavye", "color_code" => "BZ", "color_name" => "Beyaz"],
    ["product_id" => 3, "name" => "Monitör", "color_code" => "SH", "color_name" => "Siyah"]

];

foreach ($products as $key => $value) {
    print_r ($key);
    print "<hr/>";
    print_r($value);
    print "<hr/>";

}

// ----------

$products = [
    ["product_id" => 1, "name" => "Bilgisayar", "color_code" => "SM", "color_name" => "Siyah"],
    ["product_id" => 2, "name" => "Klavye", "color_code" => "BZ", "color_name" => "Beyaz"],
    ["product_id" => 3, "name" => "Monitör", "color_code" => "SH", "color_name" => "Siyah"]

];

foreach ($products as $key => $product) {
    print $product["product_id"]. "<hr/>";
    print $product["name"]. "<hr/>";
    print $product["color_code"] . "<hr/>";
    print $product["color_name"]. "<hr/>";

    print "<hr/>";

}

// ----------------WHİLE DÖNGÜSÜ--------------

$products = [
    ["product_id" => 1, "name" => "Bilgisayar", "color_code" => "SM", "color_name" => "Siyah"],
    ["product_id" => 2, "name" => "Klavye", "color_code" => "BZ", "color_name" => "Beyaz"],
    ["product_id" => 3, "name" => "Monitör", "color_code" => "SH", "color_name" => "Siyah"]

];
$a = 1;
while ($a <= 10) {
   print $products[0]["product_id"];
   $a++;
}
// -----

$products = [
    ["product_id" => 1, "name" => "Bilgisayar", "color_code" => "SM", "color_name" => "Siyah"],
    ["product_id" => 2, "name" => "Klavye", "color_code" => "BZ", "color_name" => "Beyaz"],
    ["product_id" => 3, "name" => "Monitör", "color_code" => "SH", "color_name" => "Siyah"]

];
$a = 0;
while ($a <= 10) {
   print $products[$a]["product_id"] . $products[$a]["name"];
   $a++;
}

?>