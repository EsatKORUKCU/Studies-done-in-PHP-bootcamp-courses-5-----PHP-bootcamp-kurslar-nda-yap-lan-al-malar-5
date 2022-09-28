//sqlite manager extension // googledan aratıp google kroma eklenti olarak kur

<?php
    //PHP ile SQLite Veritabanı Kullanımı

    require_once("baglan.php");

    /*
    $sorgu = $baglan->prepare("insert into ogrenci values(?,?,?,?)");
    $sorgu->execute(array("5","Ali Veli","999999","Marmaris - Muğla"));
    if ($sorgu->rowCount()>0){
        echo "Kayıt Eklendi!";
    } else {
        echo "Kayıt Eklenemedi!";
    }
    */
    /*
    $sorgu = $baglan->prepare("update ogrenci set adsoyad=?, tckimlik=?, adres=?, where id=?");
    $sorgu->execute(array("Degişik Ad","Degişik TC","Degişik - Adres", "2"));
    if ($sorgu->rowCount() > 0) {
        echo "Kayıt Güncellendi!<br><br>";
    } else {
        echo "Kayıt Güncellenemedi!<br><br>";
    }
    */

    $sorgu = $baglan->prepare("delete from ogrenci where id=?");
    $sorgu->execute(array("3"));
    if ($sorgu->rowCount() > 0) {
        echo "Kayıt Silindi!<br><br>";
    } else {
        echo "Kayıt Silinemedi!<br><br>";
    }


    $sorgu = $baglan->query("select * from ogrenci");
    foreach($sorgu as $satir) {
        echo "ID: $satir[id]<br>
        Adı Soyadı: $satir[adsoyad]<br>
        TC Kimlik: $satir[tckimlik]<br>
        Adres: $satir[adres]<br><br>";
    }
    
    
?>