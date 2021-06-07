Tüm Dosyalar Proje adlı dosyanın içerisindedir.

Projede html,css, js, php uzantılı dosyalar kullanılmıştır.

Kodu çalıştırmak için Visual Studio Code konsoluna ihtiyacınız var. Konsolun bilgisayara kurulumu yapıldıktan sonra gerekli uzantılara ihtiyacımız var. Uzantıları VSCode arayüzünün sol tarafının en aşağı kutucuğuna tıklayarak indirmeye başlayabilirsiniz.

HTML ve CSS için gerekli uzantılar; 

1. HTML CSS Support
2. HTML Snippets
3. Code Runner
4. Prettier
5. Open in browser
6. Live Server

PHP için gerekli uzantılar;

1. PHP Intelephense (Nasıl etkin hale getirileceği uzantının açıklamasınıda bulunmaktadır.)
2. PHP Server

VSCode konsolunda dosyaların çalışmaları için gerekli başlıca uzantılar bunlardır.

Bu işlemlerden sonra HTML dilini konsola tanıtmak için VSCode ayarlarına girdikten sonra yukarı sağ tarafta bulunan 'Open Settings (JSON)' kısmına giriniz. Ardından süslü parantez içine;
      
 "code-runner.executorMap": {

MacOS için ; "html": "cd $dir && open -a 'Google Chrome' $fileName",
Windows için ; "html": "cd $dir && start chrome $dir && $fileName",

}

Komutlarını giriniz ve kodun çalıştırılması için bunlara yeterli olacaktır.

Daha sonra veri tabanı phpmyadmin içinde bulunup bir server aracılığıyla php uzantılı dosya ile görüntülenmektedir. Bu işlemi yapabilmek için XAMPP ya da MAMP gibi ugyulamara ihtiyacımız var bunların kurulumlarını gerçekleştirdikten sonra localhost uzantılarına da dikkat ederek config ayarları yapılmalıdır. 

Phpmyadmin'e giriş yapıldıktan sonra 'veri_setleri' adında bir database oluşturduktan sonra içine 'Projects/data' klasörünün içindeki .ods uzantılı tüm dosyalar tek tek içeri aktarılmalıdır. Yeni veri eklemek üzere bir sayfa daha bulunmaktadır, bunu için veri_setleri veritabanının içine 'insert01' adlı bir tablo daha eklenmeldir. Tablonun sütun isimlerini 'insert.php' dosyasının içinden takip edebilirsiniz.

Phpmyadmin'e de veri tabanı ve veri setleri tanıtıldıktan sonra proje çalıştırılmaya hazırdır. Server başlatmak için herhangi bir php uzantılı dosyaya girip sağ tıklayıp 'Serve project' tıklandıktan sonra 'anasayfa.html' dosyasının içine de sağ tıklayıp 'open in default browser' ile çalıştırmaya başlayabilirsiniz ardından sorunsuz çalışacaktır.  


NOT*: XAMPP ya MAMP herhangi bir server sağlayacısını çalıştırmayı unutmayınız.
NOT**: .csv uzantılı veri seti yüklemek için bir 'veri_seti.html' dosyası bulunmaktadır. Eğer anasayfada çalışmıyor ise 'veri_seti.html' dosyasını live server ile açmayı unutmayınız.

Herhangi bir sorunlar karşılaşılırsa iletişim bilgilerim ;

1. mertkarababa@ogrenci.beykoz.edu.tr
2. alazkarababa@gmail.com
3. 05552 00 22 709