<?php
 include("ayar.php");
$sorgu=mysql_query("select * from uyeler");

echo "<table>";
 

 $i = 0 ; 
    echo '<table class="liste"><tr class="liste_tr">
    <td>KULLANICI ADI</td>

    <td>ŞİFRESİ</td>
    </tr>

    ';

while($kayit=mysql_fetch_array($sorgu)){
   
    echo '<tr>';
	 
   
    
  echo' <tr bgcolor="#FFC" class="liste_tr">

        <td>'.$kayit["username"].'</td>

        <td>'.$kayit["password"].'</td>

       </tr>';

        

       $i++;  

     }
 
echo '</table>';
 
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>

.liste{

  color:orange;

    width:50%;

 background-color:#EEE;

 border:  1px solid black;

}

.liste_tr {

    height: 40px;

 text-align: center;

    

    

}







</style>
</head>

<body>
</body>
</html>