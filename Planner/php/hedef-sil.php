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

    $id = $_POST["id"];

    // Silme sorgusunu hazırla ve çalıştır
    $sql = "DELETE FROM goals WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../ana-ekran/ana-ekran.php");
        exit;
    } else {
        echo "Hedef Silme hatası: " . $conn->error;
    }
?>