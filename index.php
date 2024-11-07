<?php
$variable = "Eren CennetKuşu";
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
$args1 = 30;
$args2 = 20;
if($args1 === $args2){
    print "esittir";
}else if($args1 > $args2){
    print $args1 .' : Büyüktür.';
}else if($args1 < $args2){
    print $args1 .' : küçüktür'. $args2;
}
?>