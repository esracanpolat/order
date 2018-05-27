## survey
Frontend sayfasına ulaşmak için url   .../survey şeklinde girilmelidir.
Backend sayfasına ulaşmak için url    .../admin/survey şeklinde girilmelidir.
Frontend sayfasında crud işlemi için   .../survey/survey/ şeklinde girilmelidir.
Backend sayfasında crud işlemi için   .../admin/survey/survey/ şeklinde girilmelidir.

# kurulum
Survey modülü portal uygulamasına bağlıdır.Bu yüzden https://github.com/kouosl/portal adresinden portalın kurulduğundan emin olduktan sonra portal dosyasındaki composer.json dosyasında 

    "repositories"
    
    '{
	 "type": "vcs",
	 "url": "https://github.com/xeldarin/survey.git"
	  }'
	ve
	  "require"
	  '"kouosl/survey": "dev-master",'
   
   olacak şekilde eklenmelidir.Bu kodlar sayesinde composer modülümüzü gerekli olarak görüp bileşenleri dosyaya ekleyecektir.
   
   İkinci adımda @app/backend/config/main.php ve @app/frontend/config/main.php dosyalarında
   	
	'modules'
   	'survey' => [
			'class' => 'kouosl\survey\Module'
			],
  şeklinde eklenmelidir.Bu adımlardan sonra portal klasöründe komut satırını açarak 
      
      composer update 
      
   komutu yazılır ve modülümüz portal dosyasına yüklenir. 
# Veri tabanı kurulum
Modülümüzün içindeyken

	'yii migrate/create survey'
yazıldıktan sonra 

	"@app\console\migrations"
konumundaki dosyanın adı kopyalanır ve modülümüzün içinde bulunan migration klasöründeki dosyanın adıyla değiştirilir ve iç kısmındaki isim de değiştirilir.
Daha sonra modülün içerisindeyken

	'php yii migrate --migrationPath=@vendor/kouosl/survey/migrations --interactive=0'
komutu yazılır ve veri tabanımızı başarılı bir şekilde kendi sunucumuza taşımış oluruz.
   
# Modül amacı
   Adminlerin giriş yaptıktan sonra anket ekleme,silme,düzenleme,arama gibi işlemleri yapması amaçlanmıştır.
   Kullanıcıların ise giriş yaptıktan sonra anketi cevaplandırması,düzenleme,arama,silme işlemleri yapması amaçlanmıştır.
   Yalnız yii'de radio button olayını public function içine atıp "create" kısmında kullanamadığım için default viewi düzenleyemedim.
