<meta charset="UTF-8">
<?php

session_start();
$username = $_SESSION['username'];
if ($username) {
    
    echo" Sayın $username, Hoşgeldiniz.<a href='logout.php'> Çıkış Yap.</a>";
    
}
else{
    echo "Giriş Yapmadınız. <a href='index.php'> Anasayfa </a>";
}


?>
