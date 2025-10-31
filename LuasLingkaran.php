<?php

namespace App\Math; //buat namespace untuk class LuasLingkaran

class LuasLingkaran {
    public const phi = 3.14;
    private int $jari;

    public function __construct($isiJari = 1) {
        $this->jari = $isiJari; // 5
    }

    public function tampil($nama = 'ban') {
        $rumus = LuasLingkaran::phi * ($this->jari * $this->jari);
        echo "Lingkaran {$nama} hasilnya adalah: {$rumus}";
    }

    public static function testing() {
        echo "ini dari static";
    }

    public function __destruct() {
        echo "udah ah cape";
    }
}





