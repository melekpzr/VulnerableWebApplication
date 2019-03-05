<head>
<link rel="stylesheet" type="text/css" href="http://localhost/proje.2.3/popup-window.css" />
<script type="text/javascript" src="http://localhost/proje.2.3/jquery/jquery.js"></script>
<script type="text/javascript" src="http://localhost/proje.2.3/popup-window.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/proje.2.3/css1/textbox.css">
</head>

<body>
<!-- Anchor start -->
<button href="#" onclick="popup_window_show('#popup_window_id_71ED20CC14E4CF1757C2C4D201781797', { pos : 'tag-right-down', parent : this, x : 0, y : 0, width : 'auto' }); return false;">YARDIM</button>
<!-- Anchor end -->

<!-- Popup Window start -->
<div id="popup_window_id_71ED20CC14E4CF1757C2C4D201781797" class="popup_window_css"><table class="popup_window_css"><tr><td class="popup_window_css"><div class="popup_window_css_head"><img src="http://localhost/proje.2.3/images/close.gif" alt="" width="9" height="9" />COMMAND INJECTION</div><div class="popup_window_css_body">
	<p> <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 13px"><strong>NEDİR?</strong></h2></p>
	<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 12px">
		Command Injection, yani komut enjeksiyonu saldırganın zafiyet barındıran bir uygulama üzerinden hedef sistemde dilediği komutları çalıştırabilmesine denir. Komut ile kastedilen şey Windows'ta CMD ve Linux'ta Terminal pencerelerine girilen sistem komutlarıdır. Literatürde Shell kodlaması diye de geçer. Command Injection saldırısı büyük oranda yetersiz input denetleme mekanizması nedeniyle gerçekleşmektedir.
		
	</p>
	<p> <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 13px"><strong>SEBEBİ</strong></h2></p>
		<img src="http://localhost/proje.2.3/images/cominj1.jpg" width="600" height="300" alt="Örnek Resim">
		<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 12px">
shell_exec() fonksiyonu, içerisinde yer alan ping komutunu sunucunun komut satırı üzerinde çalıştıracaktır ve echo komutuyla da çalıştırılan komutun çıktısı ekrana yansıtılacaktır. Yukarıdaki satırda yer alan -c 4 ifadesi 4 kere ping paketi gönder anlamına gelir ve $metinKutusu değişkeni ise ekrandaki metin kutusuna girilen veriyi tutan bir değişkeni temsil eder.
$metinKutusu'na girilecek bazı operatörlerle yeni komutlar dahil edilebilmektedir. Shell (komut satırı) dilinde &amp;&amp;, | ya da || gibi operatörler, ayrıca ; gibi sonlandırıcılar shell komutlarını birbirlerinden ayıran ya da birbirlerine bağlayan özelliğe sahiptirler. İşte bu operatörler yardımıyla ping komutunun sonuna yeni bir komut eklenebilir. Böylece command injection teşebbüsünde bulunmuş olunur.</br>
	SAYFA HACKLEME : KULLANICI IP'ye aşağıdaki kod girildiği zaman sayfayı hackleyip içine resim ya da yazı kodu ekleyebiliriz</br>
	<strong>www.includekarabuk.com &amp;&amp; echo "&lt;font color=red&gt;&lt;center&gt;&lt;h1&gt;HACKED	&lt;/h1&gt;	&lt;/center&gt;	&lt;/font&gt;	&lt;br&gt;" &gt; index.php</strong>
	</p> 
	<p> <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 13px"><strong>SÖMÜRÜ LİNKİ</strong></h2></p>
<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 12px">	<i><strong>http://localhost/proje.2.3/Com_sonuc.php?ip=176.234.27.24&buton=GONDER</strong></i></br>
        Command Injection sömürüsünü test edebilmek için ip'ye girmek istenilen değer yukarıdaki kodda ip'ye yazılmalı.
</p>
<p> <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 13px"><strong>AÇIK NASIL ENGELLENİR?</strong></h2></p>
<img src="http://localhost/proje.2.3/images/cominj2.jpg" width="600" height="300" alt="Örnek Resim">
<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 12px">	Command İnjcetion'ı önlemek için önce bir $substitution dizisi oluşturulur. Bu dizide IPde bulunmasını istemediğimiz özel karakterler bulunuyor. Yazmış olduğumuz kod $target değişkeninin tuttuğu değerin içerisinde eğer bu özel karakterlerden varsa bunları siler ve $target'in arındırılmış halini $target değişkenine atar. Böylelikle IPde istemediğimiz tehlikeli karakterlerin olması önlenmiş olur. Bu da kodu Command Injectiondan kurtarır.
</p>

</div><div class="popup_window_css_foot"></div></td></tr></table></div>
<!-- Popup Window end -->



<form action="Com_sonuc.php" method="GET" >
<table align="right">

<tr>
<td style="color:#183D3E;" size=36 >KULLANICI IP</td>
<td style="color:#183D3E;" size=36 >:</td>
<td><input type="ip"  name="ip" class="kutucuk"></td>
</tr>

<tr>
<td></td>
<td></td>
<td><input  type="submit" name="buton" value="GONDER" class="buton" ></td>
</tr>



</table>
</form>
</body>



