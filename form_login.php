<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sederhana</title>
</head>
<body>
    <h2>Login</h2>

    <form method="POST">
        <div>
            Username:
            <input type="text" name="username" required>
        </div>
        <br>

        <div>
            Password:
            <input type="password" name="password" required>
        </div>
        <br>

        <button type="submit">Login</button>
    </form>

    <?php
    if (isset($_POST['username'])) {
        $username = trim($_POST['username'] ?? '');
        $password = trim((string)($_POST['password'] ?? ''));

        if ($username === '' || $password === '') {
            echo "<script>alert('Username dan Password wajib diisi!');</script>";
        } elseif ($username === 'admin' && $password === '123') {
            echo "<h3>Login Berhasil! Selamat datang, admin</h3>";
        } else {
            echo "<script>alert('Login gagal!');</script>";
        }
    }
    ?>
</body>
</html>

