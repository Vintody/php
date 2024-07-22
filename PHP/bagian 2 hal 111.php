<?php
//34a

$macam2 = array("121", "joko", 44.99, "belajar php");
$macam2[10] = "Duniailkom";
$macam2[100] = "212";
$macam2[1000] = "3.14";

echo "<Pre>";
var_dump($macam2);
echo "</pre>";

//36b
$macam2 = array("121", "joko", 44.99, "belajar php");
$macam2[10] = "Duniailkom";
$macam2[100] = "212";
$macam2[1000] = "3.14";

echo "<Pre>";
var_dump($macam2);
echo "</pre>";


//37

$koordinat = array (
    array(8.2),
    array(2,4),
    array(1.7)
);
echo $koordinat[0][0];
echo "<br>";
echo $koordinat[0][1];
echo "<br>";
echo $koordinat[2][1];
echo "<br>";
//38
$koordinat =  [[8.2],[2,4],[1.7]];
echo "<pre>";
print_r($koordinat);
echo "</pre>";

//38a
$koordinat = [0][0][0];
echo "<br>";
$koordinat = [0][1][0];
echo "<br>";
$koordinat = [1][0][0];
echo "<br>";
$koordinat = [1][1][0];
echo "<br>";

//39
$siswa = array(
    "satu" => "Andri",
    "dua"  => "Joko",
    "tiga" => "sukma",
    "empat"=> "rina",
);
echo $siswa["dua"];
echo "<br>";
echo $siswa["empat"];

//40 
$siswa = [ "satu" => "Andri","dua"  => "Joko","tiga" => "sukma","empat"=> "rina"];
echo "<pre>";
print_r($siswa);
echo "</pre>";

//41
$assoc = [
    "satu" => 10000,
    "dua" => "Duniailkom",
    4 => "belajar php",
    1000 => "jadi programmer",
];

$assoc["baru"] ="Data Baru";
$assoc[99]="sembilan puluh sembilan";

$assoc[]="ini akan pakai index berapa?";
$assoc[]="123456";

echo "<pre>";
print_r($assoc);
echo "</pre>";

//42

$siswa = [
    "kelas_x" => ["santi", "yanto", "reza"],
    "kelas_xi" => ["tia","siska","nova"],
    "kelas_xii" =>["robert", "rudi", "alex"],
];

echo $siswa["kelas_xi"][0];
echo "<br>";
echo $siswa["kelas_xii"][2];
echo "<br>";
echo $siswa["kelas_x"][1];

echo "<pre>";
print_r($siswa);
echo "</pre>";

?>