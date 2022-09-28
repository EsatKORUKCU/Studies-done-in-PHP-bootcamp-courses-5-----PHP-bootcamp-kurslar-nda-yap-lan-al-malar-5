<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Güvenlik-2</title>
</head>
<body style="padding:50px;text-align:center">
    <form method="post" action="">
        <strong>Ad soyad:</srong> <input type="text" name="adsoyad"><br><br>
        <strong>Telefon:</srong> <input type="text" name="telefon"><br><br>
        <strong>E-Posta:</srong> <input type="text" name="eposta"><br><br>
        <strong>Web Url:</srong> <input type="text" name="adres"><br><br>
        <button type="submit">Gönder</button><br><br>
    </form>
</body>
<?php
    if($_POST) {

        function guvenlik ($veri, $tip, $tur){
            if ($tip == "get") {
                if ($tur == "sayi") {
                    $sonuc = filter_input(INPUT_GET,$veri,FILTER_SANITIZE_NUMBER_INT);
                } else if($tur == "email") {
                    $sonuc = filter_input(INPUT_GET,$veri,FILTER_SANITIZE_EMAIL);
                } else if($tur == "url") {
                    $sonuc = filter_input(INPUT_GET,$veri,FILTER_SANITIZE_URL);
                }else if($tur == "karakter") {
                    $sonuc = filter_input(INPUT_GET,$veri,FILTER_SANITIZE_SPECIAL_CHARS);
                }else  {
                $sonuc = filter_input(INPUT_GET,$veri,FILTER_SANITIZE_STRING);
            }
        } else {
            if ($tur == "sayi") {
                $sonuc = filter_input(INPUT_POST,$veri,FILTER_SANITIZE_NUMBER_INT);
            } else if($tur == "email") {
                $sonuc = filter_input(INPUT_POST,$veri,FILTER_SANITIZE_EMAIL);
            } else if($tur == "url") {
                $sonuc = filter_input(INPUT_POST,$veri,FILTER_SANITIZE_URL);
            }else if($tur == "karakter") {
                $sonuc = filter_input(INPUT_POST,$veri,FILTER_SANITIZE_SPECIAL_CHARS);
            }else  {
            $sonuc = filter_input(INPUT_POST,$veri,FILTER_SANITIZE_STRING);
            }
        }
        return $sonuc;
    }

        echo "Ad soyad:" .$_POST["adsoyad"]."<br>";
        echo "Telefon:" .$_POST["telefon"]."<br>";
        echo "E-Posta:" .$_POST["eposta"]."<br>";
        echo "Adres:" .$_POST["adres"]."<br><br><br>";
    

        echo "Ad Soyad: " .guvenlik("adsoyad","post","string")."<br>";
        echo "Telefon: " .guvenlik("telefon","post","sayi")."<br>";
        echo "E-posta: " .guvenlik("eposta","post","email")."<br>";
        echo "Web Url: " .guvenlik("adres","post","url")."<br>";
    }

?>

</html>

