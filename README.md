# cloudobs
cloudobs ismini verdiğim bu depo üzerinde şirketlerin kpi değerleri hakkında raporlar sunan web tabanlı bulut bir proje gerçekleştireceğiz.
Veritabanı ismimiz  : cloudobs
Veritabanı şifresi  : izmir2247
Tablo ismimiz       : kullanici
Sütun Başlıkları    : id, email, pssword

Öncelikle uygulamamızın ana sayfasını oluşturan index.php dosyamızı oluşturduk. Bu dosyayı düzenledikten sonra içerisine bir "Giriş Yap" butonu ekledik.
Giriş Yap butonuna tıkladığımızda sayfa uyekontrol.php bağlantısı üzerinden Giriş Paneli sayfasına yönleniyor.
Giriş Panelinde bizi Giriş Yap ve Kayıt Ol formaları karşılıyor. 
Kayıtlı üye "Giriş" butonuna tıklayınca girisyap.php bağlantısı üzerinden veritabanı sorgusunun yapıldığı sayfaya yönleniyor,  giriş bilgileri bu sayafaya POST ediliyor ve gerekli sorgulama olumlu sonuçlanınca dashboard.php bağlantısı üzerinden Kontrol Paneline yönleniyor.
Kayıtlı olmayan üye "Kayıt" butonuna tıklayınca kayitol.php bağlantısı üzerinden kayıt veritabanı insert işleminin yapıldığı sayfaya yönleniyor ve gerekli eşleştirmeler yapılıp veritabanı bağlantısı sağlandıktan sonra veritabanına ekleniyor ve Giriş Panelinde Giriş Yap Formuna giderek imleç e-posta kutusuna gidiyor.
Burada doğru bilgiler girilerek giriş yapılıyor ve kontrol paneline gidiliyor.
Kontrol panelinde bizi Gösterge Değerleri ve Gösterge Başlıkları karşılıyor. 
Profil Düzenle Butonuna basarak da giriş bilgilerini değiştirmek için uyebilgidegis.php bağlantısı üzerinden girilen güncel kullanıcı bilgileri veritabanına POST ediliyor ve UPDATE işlemi olumlu sonuçlanınca "Bilgileriniz güncellendi..." yazısı ekranda gösteriliyor
