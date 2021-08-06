<?php
include 'nedmin/netting/baglan.php';

// Belirli Veriyi Seçme İşlemi
$ayarsor=$db->prepare("SELECT*FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
    'id' => 0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php
        echo $ayarcek["ayar_title"];
        ?></title>

    <meta name="description" content="<?php
    echo $ayarcek["ayar_description"];
    ?>">
    <meta name="keywords" content="<?php
    echo $ayarcek["ayar_keywords"];
    ?>">
    <meta name="author" content="<?php
    echo $ayarcek["ayar_author"];
    ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="nedmin/production/css/style.css">
    <link rel="stylesheet" href="nedmin/production/css/animate.css">
    <link rel="stylesheet" href="nedmin/production/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
        <a href="index.php" class="navbar-brand"><img width="160" src="nedmin/production/img/header.jpg"></a>
        <a href="index.php" class="navbar-brand">Şeyda'nın Bloğu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuac">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuac">

            <ul class="navbar-nav ml-auto animated bounceInRight">

                <li class="nav-item ">
                    <a href="index.php" class="nav-link"><i class="fa fa-home" aria-hidden="true"></i> ANASAYFA</a>
                </li>

                <li class="nav-item">
                    <a href="hakkımda.php" class="nav-link"><i class="fa fa-address-card" aria-hidden="true"></i> HAKKIMDA</a>
                </li>

                <li class="nav-item">
                    <a href="iletişim.php" class="nav-link"><i class="fa fa-phone" aria-hidden="true"></i> İLETİŞİM</a>
                </li>

                <li class="nav-item">
                    <a href="sorular.php" class="nav-link"><i class="fa fa-question" aria-hidden="true"></i> SORULAR VE YORUMLAR</a>
                </li>

            </ul>

        </div>

    </div>

</nav>