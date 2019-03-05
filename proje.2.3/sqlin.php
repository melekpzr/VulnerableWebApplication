
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
            <h1 style="font-family:courier;" ><b>SQL INJECTION</b></h1>
            <p style="font-family:verdana;font-size: 12px;" >
            Web uygulamalarında bir çok işlem için kullanıcıdan alınan veri ile dinamik SQL cümlecikleri oluşturulur. Mesela “SELECT * FROM Products” örnek SQL cümleciği basit şekilde veritabanından web uygulamasına tüm ürünleri döndürecektir. Bu SQL cümlecikleri oluşturulurken araya sıkıştırılan herhangi bir meta-karakter SQL Injection’ a neden olabilir.
         
         <p> <h2 style="font-family:courier;">Meta-Karakter Nedir?</h2></p>
         <p style="font-family:verdana;font-size: 12px;" >
         	Meta-karakter bir program için özel anlamı olan karakterlere verilen isimdir. Compiler (derleyici) ya da Interpreter (yorumlayıcı) bu karakteri görünce ondan sonraki karakteri ona göre işler. SQL’ için kritik metakarakter (‘) tek tırnak’ tır. Çünkü iki tek tırnağın arası string olarak algılanır. Diğer bir önemli meta-karakter ise (;) noktalı virgüldür, satırın bittiğini ve yeni satır başladığını bildirir.
         </p>
          
</p>


 <p> <h2 style="font-family:courier;">SJL Injection Uygulama</h2></p>

	<p style="font-family:verdana;font-size: 12px;" >Formdan gelen kullanıcı adı ve şifre bilgisi ile ilgili SQL cümleciği oluşturulur (SELECT * FROM members WHERE user=’admin’ AND password=’sifre’ gibi)</p>
	<p style="font-family:verdana;font-size: 12px;" >

Kullanıcı adı ve şifreye bir injection denemesi yapıp neler olacağını inceleyelim. Eğer kullanıcı adı ve şifre yerine “' OR ''='” ve “' OR ''='” girersek başarılı bir şekilde üye giriş yapmış oluyoruz
	</p>
	<p style="font-family:verdana;font-size: 12px;" >
SELECT * FROM Members WHERE username = '' OR ''='' AND Password = '' OR ''=''
    </p>
	<p style="font-family:verdana;font-size: 12px;" >
Bu SQL sorgusu her zaman doğru dönecek ve  tablodaki tüm üyeleri getirecektir. Bu SQL cümleciğini tercüme edersek şu şekilde olacaktır. Tablodan username boş olanları ve password ü boş olanları getir ya da boş eşittir boş!
    </p>
	<p style="font-family:verdana;font-size: 12px;" >
Birinci ve ikinci mantıksal kontrolün kayıt döndürüp döndürmesi önemli değil çünkü üçüncü kontrol her zaman doğru olarak döneceğinden (boş her zamana boşa eşit) bu SQL cümleciği her zaman tüm kayıtları döndürecektir. Yani kayıt boş mu dolu mu diye kontrol ettiğimizde kayıt dolu olarak gözükecektir. OR kullandık dolayısıyla mantıksal sorguların herhangi bir doğru (true) olarak dönerse tüm kayıtlar dönmüş oluyor.
    </p>
	<p style="font-family:verdana;font-size: 12px;" >
Dolayısıyla bu SQL Injection' ı yaptığımızda dönen kayıtlardaki ilk kullanıcı olarak giriş yapılmış olacaktır.
    </p>
	<p style="font-family:verdana;font-size: 12px;" >
SQL Injection; SQL cümleciklerinin arasına dışarıdan girdi yaparak SQL’ i istediğiniz şekilde manipüle etmenize izin veriyor.
</p>

<br> <input style="font-family:courier; font-weight:bold;font-size:16px;"  onclick="location.href='http://localhost/proje.2.3/Sql_index.php'" type="submit" name="yonlendir" id="buton1" value="Uygulamaya Git" />
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