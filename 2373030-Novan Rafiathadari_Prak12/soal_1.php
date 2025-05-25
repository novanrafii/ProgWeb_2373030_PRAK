<?php
$name = $_POST['name'] ?? '';
$position = $_POST['position'] ?? '';
$password = $_POST['password'] ?? '';
$confirmPassword = $_POST['confirmPassword'] ?? '';

$errors = [];

if (empty($name)) {
    $errors[] = "Input Nama belum di isi!";
}
if (empty($password)) {
    $errors[] = "Input Password belum di isi!";
}
if (empty($confirmPassword)) {
    $errors[] = "Input Confirm Password belum di isi!";
}
if (!empty($password) && !empty($confirmPassword) && $password !== $confirmPassword) {
    $errors[] = "Password dan Confirm Password belum sama!";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>2373030-Prak12-Novan Rafiathadari-Soal 1</title>
  <style>
    .box {
      width: 400px;
      margin: 50px auto;
      padding: 20px;
      border: 2px solid #999;
      font-family: Arial;
    }

    h3 {
      text-align: center;
    }

    table {
      width: 100%;
    }

    .error {
      color: red;
      font-weight: bold;
    }

    a {
      color: blue;
      text-decoration: underline;
    }

    a:hover {
      color: red;
    }

    .tooltip {
      position: relative;
      display: inline-block;
    }

    .tooltip .tooltiptext {
      visibility: hidden;
      background-color: #555;
      color: #fff;
      border-radius: 5px;
      padding: 5px;
      position: absolute;
      z-index: 1;
      bottom: 125%; 
      left: 50%;
      margin-left: -60px;
      opacity: 0;
      transition: opacity 0.3s;
      width: 160px;
      text-align: center;
    }

    .tooltip:hover .tooltiptext {
      visibility: visible;
      opacity: 1;
    }
  </style>
</head>
<body>
  <div class="box">
    <?php if (!empty($errors)): ?>
      <h3 class="error">Terjadi Kesalahan:</h3>
      <ul class="error">
        <?php foreach ($errors as $e): ?>
          <li><?= htmlspecialchars($e) ?></li>
        <?php endforeach; ?>
      </ul>
    <?php else: ?>
      <h3>Data yang Anda Masukkan!</h3>
      <table>
        <tr>
          <td>Name</td>
          <td>: <?= htmlspecialchars($name) ?></td>
        </tr>
        <tr>
          <td>Position</td>
          <td>: <?= htmlspecialchars($position) ?></td>
        </tr>
      </table>
    <?php endif; ?> 
    <br>
    <div class="tooltip">
      <a href="Soal_1.html">back</a>
      <span class="tooltiptext">Back akan kembali ke halaman awal!!!</span>
    </div>
  </div>
</body>
</html>
