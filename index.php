<?php

require ('.\LuasLingkaran.php') ;

use App\Math\LuasLingkaran ;

$Lingkaran = new LuasLingkaran(5);
//$Lingkaran->jari = 5 ;
$Lingkaran-> tampil('bola');

LuasLingkaran :: testing();