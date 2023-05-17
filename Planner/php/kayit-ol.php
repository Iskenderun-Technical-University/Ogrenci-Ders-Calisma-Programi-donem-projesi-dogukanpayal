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
                'password' => $row['password'],
                'email' => $row['email']
            );
            array_push($users, $user);
        }
    }

    $kullanici=false;
    $isim = $_POST["isim"];
    $password = $_POST["password"];
    $email = $_POST["email"];

    for($i = 0 ; $i<count($users) ; $i++)
    {
        if($users[$i]["username"] == $isim )
        {
            $kullanici = true;

        }
    }

    if( $kullanici == false)
    {
        $sql = "INSERT INTO users (username , password , email) VALUES ('$isim' , '$password' , '$email')";
        if(mysqli_query($conn , $sql))
        {
            echo "Başarılı";
            mysqli_close($conn);
             header("Location: ../giris-ekrani/giris.php");
             exit;
        }
        else
        {
            echo "Başarısız";
            mysqli_close($conn);
        }
    }
    else
    {
        echo "Böyle Bir Kullanıcı Bulunuyor!!";
    }

?>