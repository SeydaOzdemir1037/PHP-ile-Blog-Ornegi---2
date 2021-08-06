<?php
try{

    $db =new PDO("mysql:host=localhost;dbname=e-ticaret;charset=utf8",'root','root');
    //echo "veritabanı bağlantısı başarılı";
}

catch(PDOException $e){
    echo $e->getMessage();
}

?>