
<!DOCTYPE html>
<html>
    
    <head>
        <link href="font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vulnurable Web Uygulamaları</title>
       	<link rel="stylesheet" href="css1/style1css.css"/>
    </head>
    
<body>
        
<header> 
       
            
        </header>
        
        <nav>
            
            <a href="#" class="nav-toggle-btn"><i class="fa fa-arrow-right fa-4x" aria-hidden="true"></i></a>
            
            <img id="resim" src="kou.png">
            <ul>
                <li><a href="anasayfa.php" >Anasayfa</a></li>
                <li><a href="#" target="_blank">Kurulum<br> Dokümantasyonu</a></li>
                <br>
                <br>
                 <br>
                <li><a href="#" target="_blank">SQL Enjeksiyonu</a></li>
                <li><a href="xssgiris.php" target="_blank">XSS </a></li>
                <li><a href="#" target="_blank">Komut Enjeksiyonu</a></li>
                
                
            </ul>
            
        </nav>
        
        
        <div class="content">
            <div class="yaz" >
            <h1 style="font-family:courier;" ><b>COMMAND INJECTION</b></h1>
            <p style="font-family:verdana; font-size: 12px">
Command Injection, yani komut enjeksiyonu saldırganın zafiyet barındıran bir uygulama üzerinden hedef sistemde dilediği komutları çalıştırabilmesine denir. Komut ile kastedilen şey Windows'ta CMD ve Linux'ta Terminal pencerelerine girilen sistem komutlarıdır. Literatürde Shell kodlaması diye de geçer. Command Injection saldırısı büyük oranda yetersiz input denetleme mekanizması nedeniyle gerçekleşmektedir.
         <p> <h2 style="font-family:courier;">Command Injection Saldırısı Nasıl Yapılır?</h2></p>
         <p style="font-family:verdana; font-size: 12px">
         	Metin kutusuna gireceğiniz bir IP adresi ya da bir domain adresi sonucu ekrana 4 tane ping paketinin belirtilen adrese gönderildiğini göreceksiniz. 
			</p>
			<p style="font-family:verdana; font-size: 12px">
Buradan şu tespite varmanız gerekir: Eğer ping paketleri gönderiliyor ve alınıyorsa - ki çıktı bunu söylüyor - bu durumda web uygulaması sunucu tarafında CMD ya da Terminal komutları çalıştırıyor demektir. Bu tespitten sonra ikinci tespit etmeniz gereken nokta ise metin kutusuna girdiğiniz IP ya da domain adresinin sunucu tarafındaki CMD/Terminal komutlarına eklendiği ve bu şekilde CMD/Terminal komutlarının çalıştırıldığıdır. Çünkü çıktıya dikkat edecek olursanız metin kutusuna girilen adresin aynısı çıktıda da mevcuttur. Yani ping paketleri metin kutusundaki adrese gönderilmiştir.
    </p>
	<p style="font-family:verdana; font-size: 12px">
Bu tür bir hizmet veren web uygulamasında eğer metin kutusu denetlemeye tabi tutulmamışsa saldırgan komut satırı kodlama bilgisini kullanarak var olan ping komutunun yanına kendi komutunu ekleyebilir. Böylelikle ping komutunu çalıştıran sunucu istemeden saldırganın gönderdiği komutu da çalıştıracaktır ve ekrana yansıtacağı çıktının içinde saldırganın eklediği komutun çıktısı da yer alacaktır. 
</p>
		</br>
			<p style="font-family:verdana; font-size: 12px">
echo shell_exec('ping -c 4 ' . $metinKutusu);
</p>
		</br>
			<p style="font-family:verdana; font-size: 12px">
shell_exec() fonksiyonu, içerisinde yer alan ping komutunu sunucunun komut satırı üzerinde çalıştıracaktır ve echo komutuyla da çalıştırılan komutun çıktısı ekrana yansıtılacaktır. Yukarıdaki satırda yer alan -c 4 ifadesi 4 kere ping paketi gönder anlamına gelir ve $metinKutusu değişkeni ise ekrandaki metin kutusuna girilen veriyi tutan bir değişkeni temsil eder. Şimdi bu PHP kodunu gördükten sonra command injection'ı daha iyi idrak edebiliriz. $metinKutusu'na girilecek bazı operatörlerle yeni komutlar dahil edilebilmektedir. Eğer shell (komut satırı) diline biraz vakıfsanız bilirsiniz ki &&, | ya da || gibi operatörler, ayrıca ; gibi sonlandırıcılar shell komutlarını birbirlerinden ayıran ya da birbirlerine bağlayan özelliğe sahiptirler. İşte bu operatörler yardımıyla ping komutunun sonuna yeni bir komut ekleyeceğiz. Böylece command injection teşebbüsünde bulunmuş olacağız.

         </p>
          
</p>




<br> <input style="font-family:courier; font-weight:bold;font-size:16px;"  onclick="location.href='http://localhost/proje.2.3/ComInj.php'" type="submit" name="yonlendir" id="buton1" value="Uygulamaya Git" />
            </div>
</div>
        
        
       

        
        
        

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script type="text/javascript">
        
        (function() {
            
            var bodyEl = $('body'),
                navToggleBtn = bodyEl.find('.nav-toggle-btn');
            
            navToggleBtn.on('click', function(e) {
                bodyEl.toggleClass('active-nav');
                e.preventDefault();
            });
            
            
            
        })();
        
        
    </script>
        

</body>
    <footer class=" footer-caner1 ">

<div class="footer-left">
<p><B>Zayıf Web Uygulaması v1.0.1</B></p>
    <br>
    <p>Melek Pazarbaşı</p>
    <p>Sümeyra Çakmak</p>
    
</div>
</footer>
    
    
</html>