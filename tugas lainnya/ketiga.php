<?php
// Fungsi untuk menghitung aritmatika
function hitung_aritmatika($operasi, $angka1, $angka2) {
    // Penanganan pembagian dengan nol
    if ($operasi == 'bagi' && $angka2 == 0) {
        echo "Tidak dapat membagi dengan nol";
        return;
    }

    // Melakukan operasi sesuai dengan input
    if ($operasi == 'tambah') {
        echo "Hasil penjumlahan dari $angka1 dan $angka2 adalah: " . ($angka1 + $angka2) . "<br>";
    } elseif ($operasi == 'kurang') {
        echo "Hasil pengurangan dari $angka1 dan $angka2 adalah: " . ($angka1 - $angka2) . "<br>";
    } elseif ($operasi == 'bagi') {
        echo "Hasil pembagian dari $angka1 dengan $angka2 adalah: " . ($angka1 / $angka2) . "<br>";
    } elseif ($operasi == 'kali') {
        echo "Hasil perkalian dari $angka1 dengan $angka2 adalah: " . ($angka1 * $angka2) . "<br>";
    } else {
        echo "Operasi tidak valid";
    }
}

// Contoh penggunaan:
hitung_aritmatika('tambah', 5, 3);
hitung_aritmatika('kurang', 5, 3);
hitung_aritmatika('bagi', 10, 2);
hitung_aritmatika('kali', 5, 3);
?>
