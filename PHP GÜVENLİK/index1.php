
<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Güvenlik-1</title>
</head>
<body style="padding:50px;text-align:center">
    <form method="post" action="">
        <strong>Mesaj</strong><br><br>
        <textarea name="mesaj" cols="30"  rows="10"></textarea><br><br>
        <button type="submit">Gönder</button><br><br>
    </form>   
    <?php
        if ($_POST){
            echo $_POST["mesaj"]."<br><br>";

           // echo htmlspecialchars($_POST["mesaj"]); // güvenlik için
           // echo htmlentities($_POST["mesaj"]);  // güvenlik için tüm simgeleri etkisizleşir
           // echo strip_tags($_POST["mesaj"]); // tamamen temizler
            echo str_replace(array("insert","update","delete","select","exec","union","drop","alter"),array(),$_POST["mesaj"]);
        }

    ?>
</body>
</html>



