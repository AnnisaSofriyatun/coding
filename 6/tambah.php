<?php
session_start();
require __DIR__ . '/koneksi.php';
$sql = "INSERT INTO categories (id, name)
VALUES ('".$_POST['id']."', '".$_POST['name']."')";
if (mysqli_query($conn, $sql)) {
    $_SESSION['pesan'] = 'Karyawan Berhasil ditambah';
    header('Location:index.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>