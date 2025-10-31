<?php

//panggil file LuasLingkaran.php di folder yang sama
require_once('./LuasLingkaran.php');

//akses namespace
use App\Math\LuasLingkaran;

$lingkaran = new LuasLingkaran(5);
// $lingkaran->jari = 5; //isi property jari
$lingkaran->tampil('roda'); //panggil method

LuasLingkaran::testing(); //panggil static method

