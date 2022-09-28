<?php
    //PHP ile Sayfalama
    require_once("baglan.php");

    $sayfa = $_GET["sf"];
    if($sayfa =="" || $sayfa <=0) {$sayfa = 1;}

    $sorgu = $baglan->query("select count(id) as toplam form ogrenci")->fetch();
    $toplamkayit = $sorgu["toplam"];
    $goruntuleneceksayi = 2;
    $toplamsayfa = ceil($toplamkayit/$goruntuleneceksayi);

    $baslangıc = ($sayfa - 1) * $goruntuleneceksayi;

    $sorgu = $baglan->query("select * from ogrenci order by id asc limit $baslangıc,$goruntuleneceksayi");
    foreach($sorgu as $satir) {
        echo "<div style='background:#f5f5f5;height:50px;float:left;margin:20px;padding:50px;'>
        $satir[adsoyad]<br>$satir[tckimlik]
        </div>";
    }
    echo "<div style='clear:both'></div>";
    echo "<div style='text-align:center;margin-top:50px'>";

    $oncekisayfa = $sayfa -1;
    $sonrakisayfa =$sayfa +1;
    if($oncekisayfa <=0) {$oncekisayfa = 1;}
    if($sonrakisayfa >=$toplamsayfa) {$sonrakisayfa = $toplamsayfa;}

    echo "<a href='index.php?sf=$oncekisayfa'>Geri</a>";

    for ($i=1; $i<=$toplamsayfa; $i++) {
        echo "<a href='index.php?sf=$i'>$i</a> -";
    }
    echo "<a href='index.php?sf=$sonrakisayfa'>ileri</a>";

    echo "</div>";
?>