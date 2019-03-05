<head>
<link rel="stylesheet" type="text/css" href="http://localhost/proje.2.3/popup-window.css" />
<script type="text/javascript" src="http://localhost/proje.2.3/jquery/jquery.js"></script>
<script type="text/javascript" src="http://localhost/proje.2.3/popup-window.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/proje.2.3/css1/textbox.css">

</head>

<body>
<!-- Anchor start -->
<button href="#" onclick="popup_window_show('#popup_window_id_71ED20CC14E4CF1757C2C4D201781797', { pos : 'tag-right-down', parent : this, x : 0, y : 0, width : 'auto' }); return false; ">YARDIM</button>
<!-- Anchor end -->

<!-- Popup Window start -->
<div id="popup_window_id_71ED20CC14E4CF1757C2C4D201781797" class="popup_window_css"><table class="popup_window_css"><tr><td class="popup_window_css"><div class="popup_window_css_head"><img src="http://localhost/proje.2.3/images/close.gif" alt="" width="9" height="9" />SQL INJECTION</div><div class="popup_window_css_body">  
	<p> <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 13px"><strong>NEDİR?</strong></h2></p>
	<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 12px">Web sayfalarına gönderilen girdilere SQL sorgu/komut'ları enjekte etme taktiğidir. Çoğu web uygulaması web kullanıcısından parametreler alır ve veritabanına SQL sorguları yapar. Örneğin, bir kullanıcı login olurken, web sayfası kullanıcının girdiği kullanıcı adı ve şifreyi alarak geçerli olup olmadığını kontrol için SQL veritabanına sorgular. SQL Injection ile, özel hazırlanmış bir kullanıcı adı ve/veya şifre alanı ile SQL sorgusunda değişiklik yaparak farklı sonuçlar elde edebiliriz.</p>
	<p> <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 13px"><strong>SEBEBİ</strong></h2></p>
	<img src="http://localhost/proje.2.3/images/sqlin1.jpg" width="600" height="100" alt="Örnek Resim">
	<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 12px"> 
		Kod “username” ve “password” form değişkenlerinin değerlerini alıyor. SQL cümleciğinin içerisine yerleştirip kullanıcı kontrolü yapıyor. Kullanıcının girdiği username ve password veritabanında kayıtlıysa sisteme giriyor.</br>
    Kullanıcı adı ve şifre yerine “' OR ''='” ve “' OR ''='” girersek başarılı bir şekilde üye giriş yapmış oluyoruz. </br>
	<strong>"select * from uyeler where username=''OR''='' and password=''OR''='' "</strong> </br>
    Bu SQL cümleciğini tercüme edersek uyeler tablosundan username boş olanları ve password ü boş olanları getir ya da boş eşittir boş!
</br>
Birinci ve ikinci mantıksal kontrolün kayıt döndürüp döndürmesi önemli değil çünkü üçüncü kontrol her zaman doğru olarak döneceğinden bu SQL cümleciği her zaman tüm kayıtları döndürecektir. </br>
Dolayısıyla bu SQL Injection'ı yaptığımızda dönen kayıtlardaki ilk kullanıcı olarak giriş yapılmış olacaktır.
</br>
SQL cümleciklerinin arasına dışarıdan girdi yaparak SQL’ i istediğiniz şekilde manipüle edebildiğimiz için bu açık oluştu.
	</p>
<p> <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 13px"><strong>SÖMÜRÜ LİNKİ</strong></h2></p>
<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 12px">	<strong>http://localhost/proje.2.3/login.php?kadi=1111&sifre=1111&buton=GIRIS</strong></br>
Veritabanına SQl Injectionla girebilmek için kadi=1111 ve sifre=1111 olan yere girmek istediğimiz kullanıcı adı ve şifreyi girmemiz yeterlidir.</br></br>
Örnek:<i> http://localhost/proje.2.3/login.php?kadi='OR''='&sifre='OR''='&buton=GIRIS </i> olarak girersek başarılı bi şekilde sisteme girmiş oluruz.

</p>
<p> <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 13px"><strong>AÇIK NASIL ENGELLENİR?</strong></h2></p>
   	<img src="http://localhost/proje.2.3/images/sqlin2.jpg" width="600" height="80" alt="Örnek Resim2">
<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 12px">	SQL Injectionla dışarıdan koda eklediğimiz meta karakterlerle SQL'i manipüle edebiliyoruz. Bu açığı önlemek için de karakter kontrolü yapmamız ve bu karakterlerin girilmesi halinde hata verecek bir kod eklememiz gerekiyor. Yukarıdaki kod ile kullanıcı adı ve şifreyi kullanıcıdan aldıktan sonra kullanıcı adında ve şifrede özel karakter olup olmadığını kontrol eder ve kontrole göre işlem yaparak bu açığı engellemiş oluruz.</br></br>
<strong>
$kadi = mysqli_real_escape_string( trim($_GET["kadi"]) );</br>
$sifre = mysqli_real_escape_string( trim($_GET["sifre"]) ); 
</strong></br>
Bu işlem de kullanıcı adından ve şifreden gelen yasaklı karakterleri kullanıcı adı ve şifreden kaldırır. Yukarıdaki kodun yerine kullanılabilir.


</p>
</div><div class="popup_window_css_foot"></div></td></tr></table></div>
<!-- Popup Window end -->
</body>


<form action="login.php" method="GET">
<table align="right">
<tr>
<td>KULLANICI ADI</td>
<td>:</td>
<td><input type="text" name="kadi" class="kutucuk"></td>
</tr>
<tr>
<td>ŞİFRE</td>
<td>:</td>
<td><input type="password" name="sifre" class="kutucuk"></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="buton" value="GIRIS" class="buton"></td>
</tr>
</table>
</form>