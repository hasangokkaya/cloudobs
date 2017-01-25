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
  <title>Kontrol Paneli</title>
</head>

<body>
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
          <a class="navbar-brand" href="#">CloudObs</a>
        <!-- Aç/kapa için nav kısayollarını, formu ve diğer içeriği bir araya topla -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Yardım</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Ara...">
          </form>
        </div>
      </div>
    </nav>
	
<div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
			<li><a href="profilbilgi.php" class="buton">Profil Düzenle</</li>  
			<li><a href="#"></a></li>
          </ul>
        </div>

		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header"><center>Gösterge Değerleri</center></h1>

          <div class="row placeholders">
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="saat.png" width="200" height="200" class="img-circle img-responsive" alt="Generic placeholder thumbnail">
              <h4>A - Availability</h4>
              <span class="text-muted">Kullandırım, Sistemin ne kadar kullandırıldığıdır</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="hata.png" width="200" height="200" class="img-circle img-responsive" alt="Generic placeholder thumbnail">
              <h4>MTBF - Mean Time Between Failures</h4>
              <span class="text-muted">Ortalama Hata Süresi, Sistemdeki hataların ortalama süresidir</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="tamir.png" width="200" height="200" class="img-circle img-responsive" alt="Generic placeholder thumbnail">
              <h4>MTTR - Mean Time To Repair</h4>
              <span class="text-muted">Ortalama Tamir Süresi,Sistemin tamiri için geçen oralama süredir</span>
            </div>
            <div class="col-xs-6 col-sm-3 placeholder">
              <img src="bakim.png" width="200" height="200" class="img-circle img-responsive" alt="Generic placeholder thumbnail">
              <h4>UA - Unplanned Availability</h4>
              <span class="text-muted">Planlanmamış Kullandırım, Planlanmamış / Beklenmedik olarak karşılaşılan problemler ve bu problemlere müdahale için geçen süredir.</span>
            </div>
          </div>

          <h2 class="sub-header"><center>Gösterge Başlığı</center></h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>A</th>
                  <th>MTBF</th>
                  <th>MTTR</th>
                  <th>UA</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>oran</td>
                  <td>%90</td>
                  <td>%8</td>
                  <td>%1</td>
                  <td>%1</td>
                </tr>
                <tr>
                  <td>mevcut</td>
                  <td>90</td>
                  <td>8</td>
                  <td>1</td>
                  <td>1</td>
                </tr>
				<tr>
                  <td>hedef</td>
                  <td>100</td>
                  <td>100</td>
                  <td>100</td>
                  <td>100</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
	  </div>
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </body>
</html>
