<?php
echo "ida\n";
$nimi = "matti\n";
echo $nimi; 
$tervehdys = "moi miten menee $nimi";
echo "missä olet " . $nimi . "?\n";
$nimet = ["ida","matti\n","keijo\n"];
echo $nimet[1];
$age = 5;
if($age >= 18){
echo "olet täysi-ikäinen";
} else {
    echo "olet vielä lapsi\n";
} 

function tervehdi() {
    echo "heipat\n";
}
tervehdi();

//function tervehdi ($nimi){
 //   return "heippa $nimi \n";
//}

//print(tervehdi("ida"));
//print(tervehdi("matti"));

echo (5 * 5)/2; 

echo 5 ** 2;
