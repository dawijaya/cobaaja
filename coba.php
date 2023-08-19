<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "coba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$user = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Login berhasil!";
    // Lanjutkan ke halaman selanjutnya
} else {
    echo "Username atau password salah.";
}

$conn->close();
?>
