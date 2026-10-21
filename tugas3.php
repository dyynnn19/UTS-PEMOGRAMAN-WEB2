<?php

session_start();

if (!isset($_SESSION['tugas'])) {
    $_SESSION['tugas'] = [];
}

if (isset($_POST['tambah'])) {
    $tugas = trim($_POST['tugas']);

    if ($tugas != "") {
        $_SESSION['tugas'][] = $tugas;
    }
}

if (isset($_POST['hapus'])) {
    unset($_SESSION['tugas'][$_POST['hapus']]);
    $_SESSION['tugas'] = array_values($_SESSION['tugas']);
}
?>

<h2>To-Do List</h2>

<form method="post">
    <input type="text" name="tugas"
           placeholder="Masukkan tugas" required>
    <button type="submit" name="tambah">Tambah</button>
</form>

<h3>Daftar Tugas</h3>

<?php foreach ($_SESSION['tugas'] as $i => $tugas) { ?>
    <p>
        <?= htmlspecialchars($tugas) ?>

        <form method="post" style="display:inline">
            <button type="submit" name="hapus"
                    value="<?= $i ?>">Hapus</button>
        </form>
    </p>
<?php 
} 