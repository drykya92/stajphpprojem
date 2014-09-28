<meta charset="UTF-8">
<?php


session_start();
$username = $_SESSION['username'];

session_destroy();

echo "Başarılı bir şekilde çıkış yaptınız.<a href='index.php'> Anasayfa </a>";

?>
