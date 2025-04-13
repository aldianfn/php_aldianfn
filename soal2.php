<?php
// Jika form pertama telah terisi tampilkan form kedua (umur)
if (isset($_POST['form']) && $_POST['form'] == '1') {
    // Simpan value nama
    $name = $_POST['name'];
?>
    <form method="post" style='border:1px solid black; display:inline-block; padding:4px'>
        <div style="margin-bottom: 20px;">
            <label for="age">Umur Anda: </label>
            <input type="number" name="age" required>
            <!-- Value untuk menandakan bahwa form kedua (value 2) telah terisi -->
            <input type="hidden" name="form" value="2">
            <!-- Simpan nama yang telah diinput sebelumnya -->
            <input type="hidden" name="name" value="<?= $name; ?>">
        </div>
        <button type="submit">SUBMIT</button>
    </form>
<?php
    // Jika form kedua telah terisi tampilkan form ketiga (hobi)
} else if (isset($_POST['form']) && $_POST['form'] == '2') {
    // Simpan value nama dan umur
    $name = $_POST['name'];
    $age = $_POST['age'];
?>
    <form method="post" style='border:1px solid black; display:inline-block; padding:4px'>
        <div style="margin-bottom: 20px;">
            <label for="hobby">Hobi Anda: </label>
            <input type="text" name="hobby" required>
            <!-- Value untuk menandakan bahwa form ketiga (value 3) telah terisi -->
            <input type="hidden" name="form" value="3">
            <!-- Simpan nama dan umur yang telah diinput sebelumnya -->
            <input type="hidden" name="name" value="<?= $name; ?>">
            <input type="hidden" name="age" value="<?= $age; ?>">
        </div>
        <button type="submit">SUBMIT</button>
    </form>
<?php
} else if (isset($_POST['form']) && $_POST['form'] == '3') {
    // Simpan value nama, umur dan hobi
    $name = $_POST['name'];
    $age = $_POST['age'];
    $hobby = $_POST['hobby'];
    // Tampil hasil input ketiga form
    echo "<div style='border:1px solid black; display:inline-block; padding:4px'>";
    echo "<p>Nama: $name</p>";
    echo "<p>Umur: $age</p>";
    echo "<p>Hobi: $hobby</p>";
    echo "</div>";
} else {
?>
    <!-- Tampilan default form nama -->
    <form method="post" style='border:1px solid black; display:inline-block; padding:4px'>
        <div style="margin-bottom: 20px;">
            <label for="name">Nama Anda: </label>
            <input type="text" name="name" required>
            <!-- Value untuk menandakan bahwa form pertama (value 1) telah terisi -->
            <input type="hidden" name="form" value="1">
        </div>
        <button type="submit">SUBMIT</button>
    </form>
<?php
}
