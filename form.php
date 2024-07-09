<!DOCTYPE html>
<html>
<head>
    <title>Pengolahan Form cara #1</title>
</head>
<body>
    <form action="" method="post" name="input">
        Nama Anda: <input type="text" name="nama"><br>
        <input type="submit" name="Input" value="Tampilkan isi TextBox"/>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Input'])) {
        if (!empty($_POST['nama'])) {
            $nama = htmlspecialchars($_POST['nama']); // Bersihkan input untuk mencegah XSS
            echo "Nama Anda: <b>$nama</b>";
        } else {
            echo "Nama tidak boleh kosong.";
        }
    }
    ?>
</body>
</html>
