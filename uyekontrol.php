<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Performans Analizi.">
  <meta name="keywords" content="finansal, operasyonel, personel, performans, analiz">
  <meta name="author" content="Hasan GÖKKAYA">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Giriş Paneli</title>
</head>
    <body>

<section>
	<header id="header">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
					<div class="col-md-4">
						<img src="logo.png" >
					</div>
                <div class="col-md-4">
                    
                </div>
				
			</div>
    </header>
</section>

<div class="container">
<nav class="navbar navbar-default">

	<div class="row">
    <!-- Daha iyi mobil görüntü için marka ve aç/kapa gruplanıyor -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Navigasyonu aç/kapa</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
   </div>
    <!-- Aç/kapa için nav kısayollarını, formu ve diğer içeriği bir araya topla -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
		<li><a href="#">Anasayfa</a></li>
		<li><a href="#">Hakkımızda</a></li>
		<li><a href="#">Modüller</a></li>
		<li><a href="#">İletişim</a></li>
		</ul>
	</div>

</nav>
</div>      
		
<div class="container">
    <div class="row" id="uyes">
        <div class="col-md-6">
<form class="form-signin" action="girisyap.php" method="POST">
<center><h2 class="form-signin-heading">Giriş Yap</h2></center>
<input type="mail" name="inputEmail" class="form-control" placeholder="e-posta" required autofocus/>
<input type="password" name="inputPassword" class="form-control" required placeholder="şifre"/>
<button class="btn btn-lg btn-danger btn-block" type="submit">Giriş</button>
</form>
</div>
        <div class="col-md-6">
<form class="form-signin" action="kayitol.php" method="POST">
<center><h2 class="form-signin-heading">Kayıt Ol</h2></center>
<input type="mail" name="inputEmail" class="form-control" placeholder="e-posta" required autofocus/>
<input type="password" name="inputPassword" class="form-control" required placeholder="şifre"/>
<button class="btn btn-lg btn-danger btn-block" type="submit">Kayıt</button>
</form>
</div>
    </div>
    </div>

<section>
<div class="container well">
	<h2><center>REFERANSLARIMIZ</center></h2>
</div>
<div id="footer">
    <div class="container">
        <div class="row">
            <h3 class="footertext">Sizin İçin:</h3>
            <br>
              <div class="col-md-4">
                <center>
                  <img src="http://oi60.tinypic.com/w8lycl.jpg" class="img-circle" alt="the-brains">
                  <br>
                  <h4 class="footertext">Destek</h4>
                  <p class="footertext">İhtiyaç duyduğunuz her konuda anında destek alın...<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="http://oi60.tinypic.com/2z7enpc.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext">İstek/Öneri</h4>
                  <p class="footertext">Hizmetimizi geliştirmemize yardımcı olun.<br>
                </center>
              </div>
              <div class="col-md-4">
                <center>
                  <img src="http://oi61.tinypic.com/307n6ux.jpg" class="img-circle" alt="...">
                  <br>
                  <h4 class="footertext">İletişim</h4>
                  <p class="footertext">7 gün 24 saat anında bize ulaşın.<br>
										Telefon : 0534 xxx xxxx<br>
										E-mail	: akinci35@gmail.com
                </center>
              </div>
            </div>
			<div class="row">
            <p><center><p class="footertext">Copyright 2017</p></center></p>
        </div>
    </div>
</div>
</section>
	
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>
