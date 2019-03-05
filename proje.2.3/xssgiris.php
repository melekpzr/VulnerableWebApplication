
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
            
            <h1 style="font-family:courier;" ><b>XSS - Cross Site Scripting</b></h1>
            <p style="font-family:verdana ; font-size:12px;">
Bu açık türü de nerdeyse tüm web application açık türleri gibi, Input Validation eksikliğinden kaynaklanır.
Yani dışarıdan kullanıcının girebildiği parametrelerin filtrelenmemesinden kaynaklanır. 
Bildiğiniz gibi sql injection da bu sebeple ortaya çıkmaktadır. Ama bu saldırı türünde sayfada "html" veya "javascript" kodları çalıştırmak mümkündür.
Açığa sebebiyet verecek karakterler webmasterın sayfayı kodlarken ne şekilde kodladığına göre değişir ancak en yaygınları ( ", ' , < , > ) karakterleridir.
          <p> <h2 style="font-family:courier;"> XSS Saldırı Tipleri</h2></p>
         
         <p> <h3 style="font-family:courier; ">Reflected XSS</h3></p>
         <p style="font-size:12px;">Dışarıdan alınan parametre, filtrelenmemiş bir vaziyette sayfaya yansır. Doğal olarak dışarıdan "html" kodu alınırsa da sayfada bu kod çalışacaktır. Veya bir html tag'inin bir attribute'ünü kapatarak yeni attribute'ler (örn: onmouseover="zararlıkod") eklemek de sayfada javascript kod çalıştırmaya imkan sağlayacaktır.

Bu XSS türü chrome'un xss filtresi tarafından, webmaster bir istisna tanımlamadıysa engellenmektedir.
Chrome XSS filtresi, dışarıdan alınan parametrelerde html kodu varsa ve bu kod sayfaya yansıyorsa bu kodu çalıştırmaz.</p>
          
</p>


 <p> <h3 style="font-family:courier; ">Stored(Persistent , Kalıcı) XSS</h3></p>

<p style="font-size:12px;">Bu xss türünde saldırganın girdiği zararlı kodlar veritabanında veya bir sayfada tutulur. 
Bu veriler daha sonra açıklı sayfa ziyaret edildiğinde çalıştırılmış olur. Bu XSS türü en tehlikelisidir çünkü buna karşı chrome ve diğer tarayıcılar default ayarlarla bir önlem alamaz. 
Çünkü saldırı kodu dışarıdan yalnızca bir kez parametre olarak alınmıştır ve veritabanına işlenmiştir. Açıklı sayfalar bu kodu veritabanından çağıracağı için dışarıdan herhangi bir parametre alındığı düşünülemez. 
Bu xss türünün sıkça rastlandığı sayfalar şunlardır; kayıt formları, iletişim formları..</p>
<p style="font-size:12px;"> “DOM Tabanlı XSS, bir HTML parçasında değil DOM (Document Object Model)’da meydana gelen XSS zafiyetidir” denilebilir. 
Stored ve Reflected XSS saldırılarında, saldırı sonrası dönen sayfada XSS atağını görmek mümkünken; DOM tabanlı XSS saldırılarında HTML kaynağı ve dönen yanıt, tamamen aynı olacaktır. 
Başka bir deyişle, XSS atağı dönen sayfada bulunamaz ve sadece runtime sırasında ya da sayfanın DOM’u incelenirken gözlemlenebilir.</p>
 <p> <h3 style="font-family:courier; " >DOM XSS Saldırısı:</h3></p>
<p style="font-size:12px;"> DOM XSS saldırısı en tehlikeli XSS saldırı türüdür. JavaScript kodlarının zararlı bir şekilde kullanılması ile yapılır. Bu saldırı türünde kullanılan DOM nesneleri ile hedef web sitesinin index’i değiştirilebilir, sayfanın kodları ile oynanabilir, virüs, trojan gibi zararlı kodlar sayfaya entegre edilebilir.
 Sitede gezinirken sizi başka sayfaya yönlendirebilir.ISS kodlarıyla tehlikeli saldırılar yapılabilir.</p>

<br> <input style="font-family:courier; font-weight:bold;font-size:16px;"  onclick="location.href='http://localhost/proje.2.3/ekle.php'" type="submit" name="yonlendir" id="buton1" value="Uygulamaya Git" />
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