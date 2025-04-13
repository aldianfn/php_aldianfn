<?php
include 'soal3a.php';

// Simpan inputan search user
$nama = isset($_GET['nama']) ? $conn->real_escape_string($_GET['nama']) : '';
$alamat = isset($_GET['alamat']) ? $conn->real_escape_string($_GET['alamat']) : '';
$hobi = isset($_GET['hobi']) ? $conn->real_escape_string($_GET['hobi']) : '';

// Ambil semua data tabel person dengan join tabel hobi
$sql = "SELECT * FROM person JOIN hobi ON hobi.person_id = person.id";

// Tambahkan kondisi sesuai dengan input yang user isi
if (!empty($nama)) {
    $sql .= " AND person.nama LIKE '%$nama%'";
}

if (!empty($alamat)) {
    $sql .= " AND person.alamat LIKE '%$alamat%'";
}

if (!empty($hobi)) {
    $sql .= " AND hobi.hobi LIKE '%$hobi%'";
}

$results = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3 PHP</title>
</head>

<body>
    <!-- Tampil data dalam tabel -->
    <table border="1" style="border-collapse:collapse;">
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hobi</th>
        </tr>
        <?php
        if ($results->num_rows > 0) {
            while ($row = $results->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["alamat"] ?></td>
                    <td><?= $row["hobi"] ?></td>
                </tr>
            <?php
            }
        } else { ?>
            <tr>
                <td colspan="3">Data tidak ditemukan.</td>
            </tr>
        <?php } ?>
    </table>

    <!-- Form search -->
    <form method="get" style="border: 1px solid black; margin-top: 30px; padding: 0 15px; display:inline-block">
        <div style="display: grid;place-items:center;margin-bottom:5px">
            <h3>Cari Data</h4>
        </div>
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>
        <div style="margin: 10px 0;">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat">
        </div>
        <div>
            <label for="hobi">Hobi</label>
            <input type="text" name="hobi" id="hobi">
        </div>
        <div style="display: grid;place-items:center">
            <button type="submit" style="margin-top:10px">SEARCH</button>
        </div>
    </form>
</body>

</html>