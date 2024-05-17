<?php 
$nilai1 = 5;
$nilai2 = 10;
if ($nilai1 == $nilai2) {
echo "Nilai 1 lebih besar dari  nilai 2" ;
}
elseif ($nilai1 > $nilai2) {
    echo "Nilai 1 lebih besar dari nilai 2";
}
else {
    echo "Jawban tidak diketahui";
}
echo "<br>";
// memampilkan hari tanggal tahun
echo date('Y-m-d');
// akhir
$day = date('D');
echo "Hari ini adalah $day";

if ($day == "Sat") {
    echo "Kelas Jarvis Dimulai";

}
elseif ($day == "Mon") {
    echo "Kelas Jarvis Dimulai";

}
else {
    echo "Jawaban tidak diketahui";

}
?>