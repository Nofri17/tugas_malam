<?php
$nama = $_POST['nama_lengkap'];
$nilai_absen = $_POST['nilai_absen'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];

$nilai_akhir = ($nilai_absen * 0.3) + ($nilai_uts * 0.3) + ($nilai_uas * 0.4);

if ($nilai_akhir == 100 || $nilai_akhir >= 80) {
    $grade = "A";
} else if ($nilai_akhir >= 70 || $nilai_akhir < 80) {
    $grade = "B";
} else if ($nilai_akhir >= 60 || $nilai_akhir < 70) {
    $grade = "C";
} else if ($nilai_akhir >= 50 || $nilai_akhir < 60) {
    $grade = "D";
} else if ($nilai_akhir < 50) {
    $grade = "E";
} else {
    $grade = "-";
}

echo "Nilai Akhir " . $nama . " Adalah " . $nilai_akhir .
    " dan Grade yang di Peroleh " .  $grade;
