<?php

class LuasLingkaran {


    public const phi = 3.14;
    public int $jari;

    public function __construct($isiJari =1) {
        $this ->jari = $isiJari ;
    }

    public function tampil($nama){
        $rumus = LuasLingkaran:: phi *($this->jari * $this->jari) ;
        echo "Lingkaran {$nama} hasilnya Adalah :  {$rumus}";

    }

    public static function testing () {
        echo"<br>";
        echo " ini dari static";
    }

    public function __destruct () {
        echo "<br>";
        echo "udah ah cape";
    }
}
$Lingkaran = new LuasLingkaran(12);
//$Lingkaran->jari = 12;
$Lingkaran-> tampil('bola');

LuasLingkaran :: testing();