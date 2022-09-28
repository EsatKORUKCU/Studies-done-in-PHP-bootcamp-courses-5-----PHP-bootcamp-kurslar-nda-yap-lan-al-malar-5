<?php



//PHP'de SEFURL oluşturma ve Kullanma

//https://www.mehmetbatal.com/haber.php?id=5&tur=gundem&baslık=Deneme Haber

//https://www.mehmetbatal.com/haber/gundem/5/deneme-haber.html

//https://www.mehmetbatal.com/haber/gundem/deneme-haber,5

$adres = "http://localhost/esat";

echo "<div style='text-align:center;margin-top:50px'>
<a href='$adres/index.html'>Ana Sayfa</a> - 
<a href='$adres/hakkimizda.html'>Hakkımızda</a> -
<a href='$adres/urunler.html'>Ürünlerimiz</a> -
<a href='$adres/hizmetler.html'>Hizmetlerimiz</a> -
<a href='$adres/iletişim.html'>İletişim</a> 
</div>
<div style='text-align:center;margin-top:50px'>";

$sayfa = $_GET["sf"];
$kayitno = $_GET["id"];
$baslik = $_GET["baslik"];



if($sayfa == "hakkimizda") {
    echo "HAKKIMIZDA SAYFASININ İÇERİĞİ...";
} else if ($sayfa == 'urunler'){
    echo "<a href='$adres/urunler/1/urun-1.html'>Ürün 1</a> -
    <a href='$adres/urunler/2/urun-2.html'>Ürün 2</a> -
    <a href='$adres/urunler/3/urun-3.html'>Ürün 3</a><br><br><br>";
    switch ($kayitno) {
        case "1": echo "ÜRÜN 1 ($baslik) İÇERİĞİ..."; break;
        case "2": echo "ÜRÜN 2 ($baslik) İÇERİĞİ..."; break;
        case "3": echo "ÜRÜN 3 ($baslik) İÇERİĞİ..."; break;
        default: echo "ÜRÜNLERİMİZ SAYFASININ İÇERİĞİ..."; break;
    }
    }else if ($sayfa == "hizmetler") {
        echo "<a href='$adres/hizmetler/1/hizmet-1.html'>Hizmetler 1</a> -
        <a href='$adres/hizmetler/2/hizmet-2.html'>Hizmetler 2</a> -
        <a href='$adres/hizmetler/3/hizmet-3.html'>Hizmetler 3</a><br><br><br>";
        switch ($kayitno) {
            case "1": echo "HİZMET 1 ($baslik) İÇERİĞİ..."; break;
            case "2": echo "HİZMET 2 ($baslik) İÇERİĞİ..."; break;
            case "3": echo "HİZMET 3 ($baslik) İÇERİĞİ..."; break;
            default: echo "HİZMETLERİMİZ SAYFASININ İÇERİĞİ..."; break;
        }
    }else if ($sayfa == "iletişim") {
        echo "İLETİŞİM SAYFASININ İÇERİĞİ...";
    }


?>
/*
echo "<div style='text-align:center;margin-top:50px'>
<a href='index.php'>Ana Sayfa</a> - 
<a href='index.php?sf=hakkimizda'>Hakkımızda</a> -
<a href='index.php?sf=urunler'>Ürünlerimiz</a> -
<a href='index.php?sf=hizmetler'>Hizmetlerimiz</a> -
<a href='index.php?sf=iletişim'>İletişim</a> 
</div>
<div style='text-align:center;margin-top:50px'>";

$sayfa = $_GET["sf"];
$kayitno = $_GET["id"];
$baslik = $_GET["baslik"];

if($sayfa == "hakkimizda") {
    echo "HAKKIMIZDA SAYFASININ İÇERİĞİ...";
} else if ($sayfa == 'urunler'){
    echo "<a href='index.php?sf=urunler&id=1&baslik=urun-1'>Ürün 1</a> -
    <a href='index.php?sf=urunler&id=2&baslik=urun-2'>Ürün 2</a> -
    <a href='index.php?sf=urunler&id=3&baslik=urun-3'>Ürün 3</a><br><br><br>";
    switch ($kayitno) {
        case "1": echo "ÜRÜN 1 ($baslik) İÇERİĞİ..."; break;
        case "2": echo "ÜRÜN 2 ($baslik) İÇERİĞİ..."; break;
        case "3": echo "ÜRÜN 3 ($baslik) İÇERİĞİ..."; break;
        default: echo "ÜRÜNLERİMİZ SAYFASININ İÇERİĞİ..."; break;
    }
    }else if ($sayfa == "hizmetler") {
        echo "<a href='index.php?sf=hizmetler&id=1&baslik=hizmetler-1'>Hizmetler 1</a> -
        <a href='index.php?sf=hizmetler&id=2&baslik=hizmetler-2'>Hizmetler 2</a> -
        <a href='index.php?sf=hizmetler&id=3&baslik=hizmetler-3'>hizmetler 3</a><br><br><br>";
        switch ($kayitno) {
            case "1": echo "HİZMET 1 ($baslik) İÇERİĞİ..."; break;
            case "2": echo "HİZMET 2 ($baslik) İÇERİĞİ..."; break;
            case "3": echo "HİZMET 3 ($baslik) İÇERİĞİ..."; break;
            default: echo "HİZMETLERİMİZ SAYFASININ İÇERİĞİ..."; break;
        }
    }else if ($sayfa == "iletişim") {
        echo "İLETİŞİM SAYFASININ İÇERİĞİ...";
    }

*/
?>