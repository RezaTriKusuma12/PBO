<?php

class LuasLingkaran {


    public const phi = 3.14;
    public int $jari;

    public function tampil($nama){
        $rumus = LuasLingkaran:: phi *($this->jari * $this->jari) ;
        echo "Lingkaran {$nama} hasilnya Adalah :  {$rumus}";

    }

    public static function testing () {
        echo"<br>";
        echo " ini dari static";
    }
}
$Lingkaran = new LuasLingkaran();
$Lingkaran->jari = 12;
$Lingkaran-> tampil('bola');

LuasLingkaran :: testing();