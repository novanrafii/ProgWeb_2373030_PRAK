<?php
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$isAdmin = ($username === 'admin' && $password === 'admin');
?>

<!DOCTYPE html>
<html>
<head>
  <title>2373030-Prak12-Novan Rafiathadari-Soal 2</title>
</head>
<body>
  <div style="text-align: center; margin-top: 100px; font-family: Arial">
    <?php if ($isAdmin): ?>
      <h2>Login berhasil!</h2>
      <h3>Selamat datang, <span style="color: blue"><b>admin.</b></span></h3>
      <a href="Soal_2.html" style="color: purple; text-decoration: none;">kembali ke halaman login</a>
    <?php else: ?>
      <h3>
        <span style="color: red;">Username : <?= htmlspecialchars($username) ?></span>
        <span style="color: black;">Tidak Terdaftar!</span>
      </h3>
      <a href="Soal_2.html" style="color: purple; text-decoration: none;"><b>kembali ke halaman login</b></a>
    <?php endif; ?>
  </div>
</body>
</html>