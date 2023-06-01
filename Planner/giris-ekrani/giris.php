<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoşgeldiniz</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/giriscss.css">
    <!-- Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;400;500;600;900&family=Montserrat:ital,wght@0,100;0,400;0,500;0,900;1,900&display=swap" rel="stylesheet">
    <!-- Animasyon -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body>
    <!-- İlk Görünen Karşılama Ekranı -->
    <div class="welcoming-paragraph">
        <div class="top-part animate__animated animate__fadeInDown">
            <p class="merhaba animate__animated animate__fadeInDown">Merhaba</p>
            <p id="motivasyonSozu" class="animate__animated animate__fadeIn"></p>
        </div>
                <div class="buttons">
                    <button class="kayit animate__animated animate__slideInLeft" onclick="kayitOlBackgroundPopUp() , kayitOlPopUp()">Kayıt Ol</button>
                    <button class="giris animate__animated animate__slideInRight" onclick="kayitOlBackgroundPopUp() , girisYapPopUp()">Giriş Yap</button>
                </div>
    <!-- Kayıt ve Giriş Ekranı Genel Kutusu-->
    <div class="register-login-screen animate__animated animate__fadeIn" id="kayit-ol-background-formu">
        <!-- Kayıt Ekranı -->
        <form class="register-screen animate__animated animate__fadeInDown" id="kayit-ol-formu" action="../php/kayit-ol.php" method="post">
            <div class="heading">
                <p>Kayıt ol</p>
            <div>
            <div class="label-input-box">
                <label for="register-username">Kullanıcı Adı</label>
                <div class="input-box">
                    <input type="text" id="register-username" name="isim" onkeyup="kayitOlKontrol()">
                </div>
            </div>
            <div class="label-input-box">
                <label for="register-email">E-Mail</label>
                <div class="input-box">
                    <input type="email" id="register-email" name="email">
                </div>
            </div>
            <div class="label-input-box">
                <label for="register-password1">Şifre</label>
                <div class="input-box">
                    <input type="password" id="register-password1" name="password" onkeyup="kayitOlKontrol()">
                </div>
            </div>
            <div class="label-input-box">
                <label for="register-password2">Şifre</label>
                <div class="input-box">
                    <input type="password" id="register-password2" name="password2" onkeyup="kayitOlKontrol()">
                </div>
            </div>
            <div class="register-button">
                <button id="kayitOlButton" disabled> Kayıt Ol </button>
            </div>
            <div class="outside-kayıt-basarili-p">
                <div class="kayit-basarili-p">
                    <p> Başarıyla Kayıt Oldunuz </p>
                </div>
            </div>
        </form>
        <!-- Giriş Ekranı -->
        <form class="login-screen animate__animated animate__fadeInDown" id="giris-yap-formu" action="../php/giris-yap.php" method="post">
            <p> Giris Yap </p>
            <div class="label-input-box">
                <label for="login-username">Kullanıcı Adı</label>
                <div class="input-box">
                    <input type="text" id="login-username" name="login-isim">
                </div>
            </div>
            <div class="label-input-box">
                <label for="login-password">Şifre</label>
                <div class="input-box">
                    <input type="password" id="login-password" name="login-password">
                </div>
            </div>
            <div class="login-button">
                <button>Giris Yap</button>

            </div>
        </form>
    </div>
    

    <script src="giris.js"></script>
</body>

</html>