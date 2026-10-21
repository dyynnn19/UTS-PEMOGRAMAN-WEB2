<?php

$hasil = "";

if (isset($_POST['cek'])) {
    $usia = $_POST['usia'];

    switch (true) {
        case ($usia <= 12):
            $hasil = "Anak-anak";
            break;
        case ($usia <= 17):
            $hasil = "Remaja";
            break;
        case ($usia <= 59):
            $hasil = "Dewasa";
            break;
        default:
            $hasil = "Lansia";
    }
}
?>

<h2>Kategori Usia</h2>

<form method="post">
    Masukkan usia:
    <input type="number" name="usia" min="0" required>
    <button type="submit" name="cek">Cek</button>
</form>

<?php
if (isset($_POST['cek'])) {
    echo "<p>Kategori usia: " . $hasil . "</p>";
}
?>