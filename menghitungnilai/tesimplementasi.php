<?php
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$absen = $_POST['absen'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

$nilai_absen = $absen * 0.1;
$nilai_tugas = $tugas * 0.2;
$nilai_uts = $uts * 0.3;
$nilai_uas = $uas * 0.4;

$nilai_akhir = $nilai_absen + $nilai_tugas + $nilai_uts + $nilai_uas;

if($nilai_akhir >= 90){
    $grade = "A";
}
elseif($nilai_akhir >= 80){
    $grade = "B";
}
elseif($nilai_akhir >= 70){
    $grade = "C";
}
elseif($nilai_akhir >= 50){
    $grade = "D";
}
else{
    $grade = "E";
}

echo "
<i><h1>Hasil Nilai Akhir Mahasiswa Umc</h1></i>
<p>Nama Mahasiswa&nbsp;&nbsp;: $nama <br>
Matakuliah&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $matkul <br>
Nilai Absen&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b>$absen</b><br>
Nilai Tugas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b>$tugas</b><br>
Nilai UTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b>$uts</b><br>
Nilai UAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <b>$uas</b><br>

<h4>Nilai Akhir&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $nilai_akhir</h4>
<h4>Grande&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: $grade</h4>
</p>
";
?>
<link rel="stylesheet" href="/css/desain.css" type="text/css">