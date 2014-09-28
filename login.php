<meta charset="UTF-8">
<?php

session_start();


$username= $_POST['username'];
$password= $_POST['password'];

include ("baglan.php");
if($username && $password)  {
     
    $sorgula = mysql_query("select*from users where username = '$username' and password = '$password'");
    $verisay = mysql_num_rows($sorgula);
    
    if($verisay != 0){
        
        $_SESSION['username'] = $username;
        echo "Başarılı bir şekilde giriş yaptınız.<br/> <a href='members.php'>Profil sayfasına git.</a>";
    
        
    }
    else{
       
        echo "Kullanıcı bulunamadı.<a href='index.php'> Anasayfa </a>";
 
    }
    
    
}
else{
    echo "Kullanıcı adı veya şifre hatalı";
    include("index.php");
    
}

?>
