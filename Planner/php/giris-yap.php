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
    echo "Bağlantı başarılı!";

    $users = array();

    $query = "SELECT * FROM users";
    $result = mysqli_query($conn , $query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $user = array(
                'id' => $row['id'],
                'username' => $row['username'],
                'password' => $row['password']
            );
            array_push($users, $user);
        }
    }

    $kullanici=false;
    session_start(); 
    $_SESSION['loggedUser'];
    $isim = $_POST["login-isim"];
    $password = $_POST["login-password"];

    for($i = 0 ; $i<count($users) ; $i++)
    {
        if($users[$i]["username"] == $isim && $users[$i]["password"] == $password)
        {
            $kullanici = true;
            $_SESSION['loggedUser'] = $users[$i]["id"];
            
            break;
        }
    }
    if($kullanici == true )
    {
        header("Location: ../ana-ekran/ana-ekran.php");
        exit;
    }
    else
    {
        echo "Kullanici Bulunamadı !";
    }

?>