<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pekerjaan 2</title>
</head>
<body>
    
<?php
// Inisialisasi data siswa
$nama = "Fanji Dzahwan Zulfikar";
$kelas = "X RPL 2";
$nilaiHarian = 95;
$nilaiUTS = 80;
$nilaiUAS = 85;

// Menghitung nilai harian, uts, uas, dan nilai akhir
$nilaiHarian = $nilaiHarian * 30 / 100;
$nilaiUTS = $nilaiUTS * 30 / 100;
$nilaiUAS = $nilaiUAS * 40 / 100;
$nilaiAkhir = $nilaiHarian + $nilaiUTS + $nilaiUAS;

// Menentukan predikat nilai
if ($nilaiAkhir >= 90) {
    $predikat = "A+";
} elseif ($nilaiAkhir >= 85) {
    $predikat = "A";
} elseif ($nilaiAkhir >= 80) {
    $predikat = "B+";
} elseif ($nilaiAkhir >= 76) {
    $predikat = "B";
} elseif ($nilaiAkhir >= 60) {
    $predikat = "C";
} elseif ($nilaiAkhir >= 40) {
    $predikat = "D";
} elseif ($nilaiAkhir >= 0) {
    $predikat = "E";
} else {
    $predikat = "Anda tidak mendapatkan predikat";
}


?>

<h2>==== Program Menghitung Nilai Akhir ====</h2>
<p>Nama : <?php echo $nama; ?></p>
<p>Kelas : <?php echo $kelas; ?></p>
<p>Nilai harian : <?php echo $nilaiHarian; ?></p>
<p>Nilai UTS : <?php echo $nilaiUTS; ?></p>
<p>Nilai UAS : <?php echo $nilaiUAS; ?></p>
<p>Nilai Akhir : <?php echo $nilaiAkhir; ?></p>
<p>Predikat nilai : <?php echo $predikat; ?></p>


</body>
</html>