<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
</head>
<body>
    <h2>Form Biodata</h2>

    <form method="POST">
        <div>
            Nama:
            <input type="text" name="nama" required>
        </div>
        <br>

        <div>
            Umur:
            <input type="number" name="umur" required>
        </div>
        <br>

        <div>
            Alamat:
            <input type="text" name="alamat" required>
        </div>
        <br>

        <button type="submit">Kirim</button>
    </form>

    <?php
    if (isset($_POST['nama'])) {
        $nama = trim($_POST['nama'] ?? '');
        $umur = trim((string)($_POST['umur'] ?? ''));
        $alamat = trim($_POST['alamat'] ?? '');

        if ($nama === '' || $umur === '' || $alamat === '') {
            echo "<script>alert('Semua data harus diisi!');</script>";
        } else {
            $nama = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
            $umur = htmlspecialchars($umur, ENT_QUOTES, 'UTF-8');
            $alamat = htmlspecialchars($alamat, ENT_QUOTES, 'UTF-8');

            echo "<h3>Hasil:</h3>";
            echo "<p>Nama: {$nama}</p>";
            echo "<p>Umur: {$umur}</p>";
            echo "<p>Alamat: {$alamat}</p>";
        }
    }
    ?>
</body>
</html>

