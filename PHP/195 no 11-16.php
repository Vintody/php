<?php
$a = 100;

function test() {
    $a = 500;
    echo "$a <br>";
}

echo "$a <br>";
test();
echo "$a <br>";


// File 12
function tambah($satu, $dua) {
    $hasil = $satu + $dua;
    return $hasil;
}

$a = tambah(6, 10);
echo $a;



//13
function tambah($satu,$dua){
    $hasil = $satu + $dua;
    echo $hasil;
}

$a = tambah(6,10);
$b = tambah($a,9);
echo $b;

//14
function tambah($satu,$dua){
    $hasil = $satu + $dua;
    echo $hasil;
}

echo tambah(5,7);
echo "<br>";

echo "hasil dari 6 + 9 adalah: " . tambah(6,9);
echo "<br>";

echo tambah(99,1).", bisa didapat dari 99 + 1";

//15
function tambah($satu,$dua){
    $hasil = $satu + $dua;
    echo $hasil;
}

echo tambah(5,7);

//16
function tambah_kurang($satu,$dua){
    $hasil[] = $satu + $dua;
    $hasil[] = $satu - $dua;
    return $hasil;
}

$a = tambah_kurang(100,30);

echo "100 tambah 30 = ".$a[0];
echo "<br>";
echo "100 tambah 30 = ".$a[1];  
?>