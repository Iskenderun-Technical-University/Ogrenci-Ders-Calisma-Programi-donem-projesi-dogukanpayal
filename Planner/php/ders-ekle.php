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



$userid = $_POST["userid"];
$date = $_POST["date"];
$content = $_POST["content"];



    $sql = "INSERT INTO syllabus (userid , date , content) VALUES ('$userid' , '$date' , '$content')";
    if(mysqli_query($conn , $sql))
    {
        header("Location: ../ana-ekran/ana-ekran.php");
        exit;
        mysqli_close($conn);
    }
    else
    {
        echo "Ders Ekleme Başarısız";
        mysqli_close($conn);
    }


?>