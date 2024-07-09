<?php
if (isset($_POST['Input'])) {
    if (!empty($_POST['nama'])) {
        $nama = htmlspecialchars($_POST['nama']); // Bersihkan input untuk mencegah XSS
        echo "Nama Anda: <b>$nama</b>";
    } else {
        echo "Nama tidak boleh kosong.";
    }
} else {
    echo "Form tidak dikirim dengan benar.";
}
?>
