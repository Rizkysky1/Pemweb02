<?php
$nama_siswa = $_POST['nama_siswa'];
$mata_kuliah = $_POST['mata_kuliah'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;


echo 'Nama Siswa :' .$nama_siswa ;
echo '<br>Mata Kulia :' .$mata_kuliah ;
echo '<br>Nilai UTS :' .$nilai_uts ;
echo '<br>Nilai UAS :' .$nilai_uas ;
echo '<br>NIlai Tugas :' .$nilai_tugas ;

if ($total_nilai == "") {
    echo "";
} else if ($total_nilai >= 0 && $total_nilai <= 49) {
    echo '<br>Nilai : ' . $total_nilai . ' <br> Grade = E.';
} else if ($total_nilai >= 50 && $total_nilai <= 59) {
    echo '<br>Nilai : ' . $total_nilai . ' <br> Grade = D.';
} else if ($total_nilai >= 60 && $total_nilai <= 69) {
    echo '<br>Nilai : ' . $total_nilai . ' <br> Grade = C.';
} else if ($total_nilai >= 70 && $total_nilai <= 79) {
    echo '<br>Nilai : ' . $total_nilai . ' <br> Grade = B.';
} else if ($total_nilai >= 80 && $total_nilai <= 100) {
    echo '<br>Nilai : ' . $total_nilai . ' <br> Grade = A.';
} 

else{
    echo '<br>Nilai : ' . $total_nilai . ' Jangan Suka-Suka Kau Memasukkan Nilai TU.';
}
?>