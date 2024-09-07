<?php
// Cek apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Mengambil nilai dari input form
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $perguruanTinggi = htmlspecialchars($_POST['perguruanTinggi']);
    $prodi = htmlspecialchars($_POST['prodi']);
    $hobi = isset($_POST['hobi']) ? $_POST['hobi'] : [];
    $password = htmlspecialchars($_POST['password']);

    // Validasi input 
    if (empty($username) || empty($email) || empty($perguruanTinggi) || empty($prodi) || empty($password)) {
        echo "Semua field harus diisi! <br>";
    } else {
        echo "<h2>Hasil Pendaftaran:</h2>";
        echo "Username: $username <br>";
        echo "Email: $email <br>";
        echo "Perguruan Tinggi: $perguruanTinggi <br>";
        echo "Program Studi: $prodi <br>";

        // Menampilkan hobi yang dipilih
        if (!empty($hobi)) {
            echo "Hobi: " . implode(", ", $hobi) . "<br>";
        } else {
            echo "Hobi: Tidak ada yang dipilih <br>";
        }
        echo "Password: ****** <br>";
    }
}
?>
