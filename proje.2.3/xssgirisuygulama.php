



<html>
<meta charset="utf-8">




<title>XSS AÇIĞI BULMA</title>



<form action="xsszafiyet.php" method="post">
<center>

<b>ZAFİYET ALANI</b><br>
İSİM<input type="text" name="idisim1"/>
<br><br>MESAJ:<br>

<textarea rows="5" cols="40" palceholder="mesajınızı yazınız"  name="id1"> </textarea>
<br>
<input type="submit"  value="Sömürü Yap" />
</center>


</form>

<form action="xssgiderildi.php" method="post">
<center>

<b>ZAFİYET GİDERİLDİ</b><br>
İSİM<input type="text" name="idisim2"/>
<br><br>MESAJ:<br>
<textarea rows="5" cols="40" palceholder="mesajınızı yazınız"  name="id2"> </textarea>
<br>
<input type="submit" value="Sömürü Gider" />
</center>


</form>

<br><br><br><br>



</html>
