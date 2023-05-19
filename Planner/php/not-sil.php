<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ana-proje";

    // mysqli objesi oluşturma
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Bağlantıyı kontrol etme
    if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
    }
    echo "";

    $id = $_POST["id"];

    // Silme sorgusunu hazırla ve çalıştır
    $sql = "DELETE FROM notes WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../calisma-ekrani/calisma-ekranı.php");
            exit;
    } else {
        echo "Silme hatası: " . $conn->error;
    }
?>