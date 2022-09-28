<?php
//HTACCESS KULLANIMI

Options +followSymLinks // sistemdeki linklerin izlenmesini açar sistemdeki bilgileri birbirine baglar her htaccess dosyası içine yazılır
Options -Indexes  //Dizin listelemesini kapatır index dosyası yoksa index dosyalarının içerigini listeler
Options -MultiViews // dosya dizn çakışmasını önler

RewriteEngine On // komut motoru açıldıgını söyler
ErrorDocument 403 /403.php // hata ile ilgili 403 hatası olursa kök klasöründe 403 klasörünü açar
ErrorDocument 404 /404.php // sayfa bulunamadı hatası oldugunda kök klasöründe 404.php çagrılır

RewriteCond %(HTTP_POST) ^mehmetbatal\.com$ //
RewriteRule ^(.*)$ "http\:\/\/www\.mehmetbatal\.com\/$1" [R=301,L] // mehmetbatal.com adresine girildigi zaman hangi adres olursa oolsun mutlaka http\:\/\/www\.mehmetbatal\.com\/$1 adresine git R=301 kalıcı yönlendirme yaptıgını söyler L yani last bundan önceki komutları kabul etme bu komutu kabul etme

RewriteRule ^index.html$ index.php [NC,QSA,L]  // index.html tıklanınca index.php yönlendir nc yani küçük büyük ayrımı yapma, QSA query stringleri kabul et,L yani last bundan önceki komutları kabul etme bu komutu kabul etme

RewriteRule ^haber/([0-9]+)/([a-zA-Z0-9-_]+).html$ haber.php?id=$1&tur=$2 [NC,QSA,L] // haber sılaş bir rakam gelecek 0-9 arasına sılaş harf alt tire diye bir site gelirse haber.php ye yönlendirecek ide kaçsa ona 0-9 arası türde ikinci kısmı
//örnek:haber/5/makale-8.html => haber.php?id=5&tur=makale-8

serverSignare off // sunucu imzası sunucuya erişim kapatılır

<FilesMatch "(^#.*#|\.(bak|conf|log|sql)|~)$"> // adres çubugundan bak|conf|log|sql şeklinde erişim yapılmak istendiginde
    Order allow,deny
    Deny from all 
    Satisfy all // dışarıdan gelecek saldırılara karşı korudu
</FilesMatch>

?>