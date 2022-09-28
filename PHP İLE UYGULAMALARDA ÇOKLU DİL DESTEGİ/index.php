<?php
    require_once("baglan.php");
    if(isset($_GET["dil"])){
        $dil = $_GET["dil"];
    } else {
        $dil = "tr";
    }

    if(file_exists("$dil.php")) {
        require_once("$dil.php");
    } else {
        require_once("tr.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ile Çoklu Dil Destegi</title>
</head>
<body stle="text-align:center;padding-top:50px">
    <a href="index.php?dil=tr">Türkçe</a> //
    <a href="index.php?dil=en">İngilizce</a> //
    <a href="index.php?dil=de">Almanca</a> //
    <br><br><br>

    <a herf="#"><?php echo $menu["anasayfa"]; ?></a> -
    <a herf="#"><?php echo $menu["hakkimizda"]; ?></a> -
    <a herf="#"><?php echo $menu["urunlerimiz"]; ?></a> -
    <a herf="#"><?php echo $menu["hizmetlerimiz"]; ?></a> -
    <a herf="#"><?php echo $menu["iletişim"]; ?></a> -
    <br><br><br>

    <h2><?php echo $anasayfa["baslik"]; ?></h2>
    <h3><?=$anasayfa["slogan"];?></h3>
    
    <?php
        $sorgu = $baglan->query("select * from urunler");
        foreach($sorgu as $satir) {
            $baslik = $satir["baslik_".$dil];
            $aciklama = $satir["aciklama_".$dil];
            echo "$baslik: $aciklama<br><br>";
        }
    ?>

</body>
</html>