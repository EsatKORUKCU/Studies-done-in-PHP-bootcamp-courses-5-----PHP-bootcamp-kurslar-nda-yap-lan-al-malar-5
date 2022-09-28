<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Filtreleme</title>
</head>
<body style="padding:50px;text-align:center">
    <form method="post" action="">
        <strong>Veri</strong><br><br>
        <input type="text" name="veri"><br><br>
        <button type="submit">Gönder</button><br><br>
    </form>
    <?php
        /*
        if (filter_has_var(INPUT_POST,"veri")) { //belirtilen değişkenin olup olmadıgını kontrol etmek için kullanılır
            echo "Veri var!";
        }  else {
            echo "Veri yok!";
        }
        */

        
        //$veri = "Mehmet'in arabası çok güzel";
        //$veri = "http://mehmetbatal.com";
        //FILTER VALIDATE (INT,FLOAT,IP,URL,EMAİL,BOOL)// dogrulama yapmak için
        //FILTER SANITIZE (NUMBER_INT,NUMBER_FLOAT,URL,EMAIL,STRING,SPECIAL_CHARS) //gereksiz karakterleri temizlemek için 
        /*
        if (filter_var($veri,FILTER_VALIDATE_URL)){ 
            echo "$veri bir tam url!";
        } else {
            echo "$veri bir tam url degil!";
        }
        */
        /*
        echo $veri."<br><br>";
        $veri = filter_var($veri,FILTER_SANITIZE_SPECIAL_CHARS);
        echo $veri;
        */

        // INPUT_GET, INPUT_POST, INPUT_COOKIE, INPUT_SERVER
         //FILTER VALIDATE (INT,FLOAT,IP,URL,EMAİL,BOOL)// dogrulama yapmak için
        //FILTER SANITIZE (NUMBER_INT,NUMBER_FLOAT,URL,EMAIL,STRING,SPECIAL_CHARS) //gereksiz karakterleri temizlemek için 
        $veri = filter_input(INPUT_POST,"veri",FILTER_SANITIZE_NUMBER_FLOAT);
        echo $veri;

        //echo $_POST["veri"];
    ?>
</body>
</html>

