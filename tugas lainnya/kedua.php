<?php
// Fungsi untuk menampilkan angka genap
function tampilkan_angka_genap($mulai, $akhir) {
    // Pastikan $mulai adalah angka genap
    if ($mulai % 2 != 0) {
        $mulai++; // Jika ganjil, ubah menjadi genap
    }

    // Loop dari $mulai hingga $akhir dengan langkah 2 (untuk angka genap)
    for ($i = $mulai; $i <= $akhir; $i += 2) {
        echo $i . " ";
    }
}


echo "Angka Genap dari 1 sampai 10: ";

?>
