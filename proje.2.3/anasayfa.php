
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
                <li><a href="anasayfa.php">Anasayfa</a></li>
                <li><a href="kurulum.php" target="_blank">Kurulum<br> Dokümantasyonu</a></li>
                <br>
                <br>
                 <br>
                <li><a href="sqlin.php" target="_blank">SQL Enjeksiyonu</a></li>
                <li><a href="xssgiris.php" target="_blank">XSS </a></li>
                <li><a href="commandin.php" target="_blank">Komut Enjeksiyonu</a></li>
                
                
            </ul>
            
        </nav>
        
        
        <div class="content">
            <div class="yaz" >
            <h1 style="font-family:courier;" ><b>Zayıf Web Uygulaması</b></h1>
            <p style="font-family:verdana;">Zayıf Web Uygulaması (ZWU) kasıtlı olarak bırakılmış güvenlik zafiyetleri içeren PHP/MySQL web uygulamasıdır.Kasıtlı olarak bırakılmış  güvenlik zafiyetlerini(vulnerability) içeren zayıf (vulnerable) web uygulamaları, uygulamalı siber güvenlik eğitimlerinde önemli bir rol oynamaktadır.2.	Web uygulaması istenilen bir programlama dili kullanılarak geliştirilebilir.
3.	Web uygulaması en az bir tarayıcı üzerinden (Chrome, Firefox, Safari veya Internet Explorer) sorunsuz bir şekilde kullanılabilmelidir.
4.	Her bir zafiyet için web uygulamasında ayrı bir sayfa geliştirilmelidir. Bir sayfada birden fazla zafiyet bulunmamalıdır.
5.	Zafiyetin bulunduğu her bir sayfada bulunan bir “yardım” bağlantısına tıklandığında pop-up şeklinde açılan bir sayfada ilgili zafiyetin sömürmek için örnek bir URL, bir paragraflık açıklaması, kaynak koddaki hangi kısımdan dolayı ve neden bu zafiyetin ortaya çıktığı, kaynak koddaki hangi değişiklikle ve nasıl bu zafiyetin engellenebileceği yazılmalıdır.
</p>
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