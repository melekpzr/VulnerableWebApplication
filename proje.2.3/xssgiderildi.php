<html>
<?php

$kullanici=@$_POST["id2"]; //text e yazılan veriyi alıyor

/*echo $kullanici;*/ //zafiyetten önce

//denemeeee

/*
Görüldüğü üzere text kutusuna girilen stringi direkt olarak ekrana basıyor fakat biz herhangi bir filtreleme yapmadık.Html kodu girildiğinde kutucuğa bu stringi de dirrekt olarak ekrana basacaktır.
Bu bir XSS zafiyetidir.Bu zafiyeti gidermek için 
örnek html kodu(random html tagları kullanılarak);
<b>sumeyra</b>
<marquee>sumeyra</marquee>//soldan sağa kaydırmalı yazı


Xss açıklarının zararları;
-cookie(çerez) çalıpn hedef oturuma girebilme
-meta atabilme
-SSI(server side include) aktifse sunucuda komut çalıştırabilme

peki nasıl fix edebiliriz?
PHP sistemlerde de diğer sistemlerde de mantık aynıdır,özel kararkterleri ve HTML kodlarını filtrelemek..
PHP'de şu şekilde yapılır:

strip_tags();

bunun yanı sıra başka fonksiyonlarda vardır.
htmlspecialchars(); gibi, fakat strip_tags() daha çok kullanılıyor
 
 
 meta kodu yaz ilk linke tıkla
 
  artık özel anlamlarını yitireceğinden bu karakterleri barındıran zararlı kodlar çalışmayacaktır. Bu saldırganın işini çok ama çok zorlaştırır. 
  XSS ile veri aldığımız inputlardaki değeri bu fonksiyondan geçirirsek çok büyük bir olasılıkla xss saldırısından korunmuş olacağız. 
*/

$htmlengelle=strip_tags($kullanici);
 
/*Regex de /i ifadesi büyük-küçük harflere karşı duyarsızlığı ifade ediyor. 
Yani siz aLeRt veya alert de yazsanız farketmeyecek ikisinide engelleyecektir.*/
/*echo $htmlengelle;*/

/*
görüldüğü üzere hiç bir html kod çalıştırılmıyor
*/

/*$htmlson=htmlspecialchars($kullanici);*/


echo<<<EOF
<html>
<body>

<textarea rows="10" cols="50">$htmlengelle</textarea>
</body>
</html>
EOF;

/*
Bu seferde <b<sumeyra<b> şaklinde yazdırdı,yani tüm html fonksiyonlarını text olarak yazdırdı

XSS açğını engellemenin bir başka yoluda get yerine post kullanmaktır
*/
?>



</html>