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
<div id="popup_window_id_71ED20CC14E4CF1757C2C4D201781797" class="popup_window_css"><table class="popup_window_css"><tr><td class="popup_window_css"><div class="popup_window_css_head"><img src="http://localhost/proje.2.3/images/close.gif" alt="" width="9" height="9" />XSS - Cross Site Scripting</div><div class="popup_window_css_body"> 
<p> <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 13px"><strong>NEDİR?</strong></h2></p>
	<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 12px">Bu açık türü de nerdeyse tüm web application açık türleri gibi, Input Validation eksikliğinden kaynaklanır. Yani dışarıdan kullanıcının girebildiği parametrelerin filtrelenmemesinden kaynaklanır. Bildiğiniz gibi sql injection da bu sebeple ortaya çıkmaktadır. Ama bu saldırı türünde sayfada "html" veya "javascript" kodları çalıştırmak mümkündür. Açığa sebebiyet verecek karakterler webmasterın sayfayı kodlarken ne şekilde kodladığına göre değişir ancak en yaygınları ( ", ' , < , > ) karakterleridir.</p>
	
	<p> <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 13px"><strong>SEBEBİ</strong></h2></p>
	<img src="http://localhost/proje.2.3/images/zaafiyetli.jpeg" width="600" height="250" alt="Örnek Resim">

	<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 12px">
	Bu stored xss zafiyetidir.Bu zafiyet kullanın textbox kutularına girdiği stringlerin kontrol edilmemesi yani filtrelenmemesinden kaynaklanan bir açıklıktır. İlgili metin alanına herhangi html taglarını kullanarak yazdığımız bir girdide veri tabanına taglar ile kayıt yapar ve adminin kullanıcıları gördüğü pencere listelendiğinde kaydı html tag'ine uygun bir biçimde yaptığı görülür.	
	</p>
	
	<p> <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 13px"><strong>SÖMÜRÜ LİNKİ</strong></h2></p>
	<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 12px">
		<i> http://localhost/proje.2.3/ekle.php?ad=	&lt;h1&gt;person&lt;/h1&gt;&sifre=123456&gonder=Kaydet </i>
	</p>
	
	<p> <h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 13px"><strong>AÇIK NASIL ENGELLENİR?</strong></h2></p>
   	<img src="http://localhost/proje.2.3/images/zaafiyetsiz.jpeg" width="600" height="250" alt="Örnek Resim2">
<p style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', 'serif';font-size: 12px">	
	Bu zafiyeti gidermek için ilgili metin kutusuna girilecek olan stringleri html taglarından ve özel karakterlerden ayırmak yani filtreleme yapmak. Bu filtremeleri yapmada iki fonksiyonumuz var:</br>

1-)strip_tags($degisken);</br>

2-)htmlspecialchars($degisken);</br>

Bunları kullanılark ilgili alan girilen stringleri özel karakterlerden ve html tag'larından ayırmış oluyoruz. XSS açğını engellemenin bir başka yoluda get yerine post kullanmaktır Bu işlemin veri tabanına kayıt kısmında gerçekleşmesi gereklidir;</br>

1-) ekle.php sayfasında 8 ve 9.satırlarda şu değişikliklerin</br>

$ad=strip_tags($_GET["ad"]);</br>

$sifre=strip_tags($_GET["sifre"]);</br>

2-)ekle.php sayfasında 5 8 ve 9. satırlarda</br>

if ($_POST)</br>

$ad=$_POST["ad"];</br>

$sifre=$_POST["sifre"];</br>

3-)ekle.php sayfasında 26.satırda</br>

method="get" kodunda get yerine "post"</br>

yazılması ile zafiyet giderilmiş olur.
	</p>
</div><div class="popup_window_css_foot"></div></td></tr></table></div>
<!-- Popup Window end -->
</body>


<?php
include("ayar.php");
if ($_GET){
	
	//GET ile formdan değerler geldiyse
    $ad=$_GET["ad"];
    $sifre=$_GET["sifre"];    
    $kontrol=mysql_query("insert into uyeler (username,password) values ('$ad','$sifre')") or die(mysql_error());
	//$sql="insert into uyeler(username,password) values('".$ad."','".$sifre."')";
    if ($kontrol)
	{//Sorgu başarılı bir şekilde çalıştırıldıysa
	    echo "Kayıt Başarılı";
		echo "<center><br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else{
	    echo "Kayıt Esnasında Bir Sorun Oluştu! <br><a href=javascript:history.back(-1)>Geri Don</a></center>";
	
    }
}
else

{//Sayfa ilk defa açılıyorsa
?>
 <table align="right">  
   <form name="form1" method="get" action="ekle.php">

<tr>
<td>KULLANICI ADI</td>
<td>:</td>
<td><input type="text" name="ad" class="kutucuk"></td>
</tr>
<tr>
<td>ŞİFRE</td>
<td>:</td>
<td><input type="text" name="sifre" class="kutucuk"></td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="gonder" value="KAYDET" class="buton"></td>
</tr>
</form>
   
    
<form name="form2" method="post" action="listele.php">
<tr>
<td></td>
<td></td>
<td><input onclick="location.href='http://localhost/proje.2.3/listele.php'" type="submit" name="listelee" id="buton5" value="LISTELE" class="buton" ></td>
</tr>
</form>
</table>

<?php
}
?>




<!doctype html>
<html>
<head>
<script language="javascript"> function pop(){ window.open("popup.html","acılacaksayfa","width=400,height=400,menubar=0,toolbar=0,resizable=0"); } </script> 
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

</html>
