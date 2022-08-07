<?php

class Hewan {
    public $bisa_terbang = "Tidak Bisa Terbang";
}

class Kucing extends Hewan{
    function bersuara()
    {
        return "Meoooooong";
    }
}

class Anjing extends Hewan {
    function bersuara()
    {
        return " Guk Guk";

    }
}

class Elang extends Hewan{
    public $bisa_terbang = "Bisa Terbang";
    function bersuara()
    {
        return "Miiip";
    }
}

class Angsa extends  Hewan{
    public $bisa_terbang = "Bisa Terbang";
    function bersuara()
    {
        return "Kwaaak";
    }
}


$momo = new kucing;
$momo ->jumlah_kaki = 4;
echo "Momo adalah Kucing <br>";
echo " Punya Kaki Sebanyak <br>";
echo $momo ->jumlah_kaki."<br>";
echo $momo->bisa_terbang."<br>";
echo "Suaranya :".$momo->bersuara()."<br>";

echo "<hr>";

$doggo = new anjing;
$doggo->jumlah_kaki = 4;
echo "Doggo Adalah Anjing <br>";
echo " Punya Kaki Sebanyak <br>";
echo  $doggo->jumlah_kaki."<br>";
echo $doggo->bisa_terbang."<br>";
echo "Suaranya :".$doggo->bersuara()."<br>";

echo "<hr>";

$zya = new Elang;
$zya->jumlah_kaki = 2;
echo "Zya Adalah Elang <br>";
echo " Punya Kaki Sebanyak <br>";
echo $zya->jumlah_kaki."<br>";
echo $zya->bisa_terbang."<br>";
echo "Suaranya :".$zya->bersuara()."<br>";

echo "<hr>";

$masha = new Angsa;
$masha->jumlah_kaki = 2;
echo "Masha Adalah Angsa <br>";
echo " Punya Kaki Sebanyak <br>";
echo $masha->jumlah_kaki."<br>";
echo $masha->bisa_terbang."<br>";
echo "Suaranya :".$masha->bersuara()."<br>";