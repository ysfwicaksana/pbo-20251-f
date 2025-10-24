<?php

class LuasLingkaran {
    public const phi = 3.14;
    public int $jari;

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} hasilnya adalah: {$rumus}";
    }

    public static function testing() {
        echo "ini dari static";
    }
}

$lingkaran = new LuasLingkaran();
$lingkaran->jari = 5;
$lingkaran->tampil('roda'); //panggil method

LuasLingkaran::testing(); //panggil static method



