<<<<<<< HEAD
# order
  
=======
## Order
Frontend sayfasına ulaşmak için url   .../order şeklinde girilmelidir.
Backend sayfasına ulaşmak için url    .../admin/order şeklinde girilmelidir.
Frontend sayfasında crud işlemi için   .../order/order/ şeklinde girilmelidir.
Backend sayfasında crud işlemi için   .../admin/order/order/ şeklinde girilmelidir.

# Kurulum
Order modülü portal uygulamasına bağlıdır.Bu yüzden https://github.com/kouosl/portal adresinden portalın kurulduğundan emin olduktan sonra portal dosyasındaki composer.json dosyasında 

    "repositories"
    
    '{
	 "type": "vcs",
	 "url": "https://github.com/xeldarin/order.git"
	  }'
ve

	  "require"
	  '"kouosl/order": "dev-master",'
   
   olacak şekilde eklenmelidir.Bu kodlar sayesinde composer modülümüzü gerekli olarak görüp bileşenleri dosyaya ekleyecektir.
   
   İkinci adımda @app/backend/config/main.php ve @app/frontend/config/main.php dosyalarında
   	
	'modules'
   	'order' => [
			'class' => 'kouosl\order\Module'
			],
  şeklinde eklenmelidir.Bu adımlardan sonra portal klasöründe komut satırını açarak 
      
      composer update 
      
   komutu yazılır ve modülümüz portal dosyasına yüklenir. 
# Veri tabanı kurulum
Modülümüzün içindeyken

	'yii migrate/create order'
yazıldıktan sonra 

	"@app\console\migrations"
konumundaki dosyanın adı kopyalanır ve modülümüzün içinde bulunan migration klasöründeki dosyanın adıyla değiştirilir ve iç kısmındaki isim de değiştirilir.
Daha sonra modülün içerisindeyken

	'php yii migrate --migrationPath=@vendor/kouosl/order/migrations --interactive=0'
komutu yazılır ve veri tabanımızı başarılı bir şekilde kendi sunucumuza taşımış oluruz.
   
# Modül amacı
   Adminlerin giriş yaptıktan sonra anket ekleme,silme,düzenleme,arama gibi işlemleri yapması amaçlanmıştır.
   Kullanıcıların ise giriş yaptıktan sonra anketi cevaplandırması,düzenleme,arama,silme işlemleri yapması amaçlanmıştır.
   Yalnız yii'de radio button olayını public function içine atıp "create" kısmında kullanamadığım için default viewi düzenleyemedim.
>>>>>>> d3a76e577d0f3b7a8e84bd12d0a51e58ce713276
