<?php

$kime = "esatkorukcu64@gmail.com"
$konu = "php Mail";
$mesaj = "<b>Örnek</b> 
<i>Mesaj</i> 
<s>İçerigi</s> 
<a href=''>Google</a>";

$detay = "Mime-Version: 1.0\r\n
Content-Type:text/html;Charset-Utf8\r\n
From: batalms@hotmail.com\r\n  // kimden gönderildi
Reply-to: batalms@hotmail.com\r\n   /// geri döndürülecek e mail
Cc: batalms@yandex.com\r\n  // karbon kopyası
Bcc: batalms@gnail.com\r\n
x-Mailer: PHP/".phpversion( );

//phpMailer Kütüphanesi

if (mail($kime, $konu, $mesaj,$detay)) {
    echo "E-posta Gönderildi.";
} else {
    echo "Hata oluştu";
}

?>