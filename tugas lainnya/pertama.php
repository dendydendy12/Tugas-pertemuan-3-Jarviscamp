<?php
// Fungsi untuk menampilkan angka ganjil
function tampilkan_angka_ganjil($mulai, $akhir) {
    // Pastikan $mulai adalah angka ganjil
    if ($mulai % 2 == 0) {
        $mulai++; // Jika genap, ubah menjadi ganjil
    }

    // Loop dari $mulai hingga $akhir dengan langkah 2 (untuk angka ganjil)
    for ($i = $mulai; $i <= $akhir; $i += 2) {
        echo $i . " 1";
    }
}

echo "Angka Ganjil dari 1 sampai 10: ";
tampilkan_angka_ganjil(1, 10);
?>
