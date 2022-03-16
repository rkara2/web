<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-2</title>
</head>
<body>
  <?php
  
  echo "<hr><h4> Tırnak İşaretleri Arasındaki Farklar </h4>";
  echo "Adnan Menderes Üniversitesi";
  $üni="Adnan Menderes Üniversitesi";
  echo "Değişken İçeriği";
  echo "<br>";
  /* Değişkenin ismini yazdırır*/
  echo "1-Kazandığınız Üniversite:" . '$üni'; 
  echo "<br>";
  /* Değişkenin içeriğini yazdırır */
  echo "2-Kazandığınız Üniversite:" . "$üni"; 
  echo "<br>";
  /* Değişkenin içeriğini yazdırır*/
  echo "3-Kazandığınız Üniversite:"  .  $üni;
  echo "<br>";


echo "<hr><h4>Temel Maetematiksel İşlemler</h4>" ;

echo "<h5>Toplama işlemleri </h5>" ;

$sayi1 = 10;
$sayi2 = 20;
echo '$sayi1 + $sayi2 = ' . ($sayi1 + $sayi2);
echo "<br>";
echo "$sayi1 + $sayi2 = " .  ($sayi1 + $sayi2);
$sonuc = $sayi1 + $sayi2;
echo "$sayi1 + $sayi2 = $sonuc";
echo"<br>";

echo "<h5>Çıkarma işlemleri </h5>" ;
$sayi1 = 10;
$sayi2 = 20;
echo '$sayi1 - $sayi2 = ' . ($sayi1 - $sayi2);
echo "<br>";
echo "$sayi1 - $sayi2 = " .  ($sayi1 - $sayi2);
$sonuc = $sayi1 + $sayi2;
echo "$sayi1 - $sayi2 = $sonuc";

echo "<h5>Çarpma işlemleri </h5>" ;
$sayi1 = 10;
$sayi2 = 20;
echo '$sayi1 * $sayi2 = ' . ($sayi1 * $sayi2);
echo "<br>";
echo "$sayi1 * $sayi2 = " .  ($sayi1 * $sayi2);
$sonuc = $sayi1 + $sayi2;
echo "$sayi1 * $sayi2 = $sonuc";

echo "<h5>Bölme işlemleri </h5>" ;
$sayi1 = 10;
$sayi2 = 20;
echo '$sayi1 / $sayi2 = ' . ($sayi1 / $sayi2);
echo "<br>";
echo "$sayi1 / $sayi2 = " .  ($sayi1 / $sayi2);
$sonuc = $sayi1 + $sayi2;
echo "$sayi1 / $sayi2 = $sonuc";


echo"<h5>Üst Alma İşlemleri (pow)</h5>";

$x=3;
$y=2;
echo "Değişken Tipi: $y >>> " . (gettype($y)) . "<br>" ;
echo "$x<sup>$y</sup>=" . (pow($x, $y));





echo " <h5>Karekök Alma İşlemleri (sqrt)</h5>";
$x=36;
$karekök=sqrt($x);
echo "$x'in karekökü: $karekök";

echo " <h5>Mutlak Değer İşlemi (abs)</h5>";
$x=(-4);
$mutlak=abs($x);
echo "$x'in mutlak değeri: $mutlak";

echo "<h5> Taban Değişim İşlemi(base_convert(x,taban1,taban2))</h5>";
echo"27 sayısının 2'lik tabandaki karşılığı" . base_convert(27, 10, 2);
echo"<br>";
$sayi=30;
$taban=10;
$yenitaban=2;
$sonuc=base_convert($sayi,$taban,$yenitaban);
echo"($sayi)<sub>$taban</sub> : ($sonuc)<sub>$yenitaban</sub> ";

echo "<h5> Mod İşlemi (fmod(x,y))</h5>";
$x=20;
$y=4;
$mod=fmod($x, $y);
echo "$x mod $y =$mod";
echo" $x Sayısı: " . (fmod($x,2)==0) ? "Çifttir." : "Tektir";

echo"<h5>Yuvarlama İşlemi(round(x,y))</h5>";
$x=15.135;
echo "$x Bir Ondalık Basamak Yuvarlanması: " . round($x ,1);



echo"<h5> Yuvarlama İşlemi(floor))</h5>";
/*Her zaman en yakın aşağı tam sayı değerine yuvarlama işlemi yapar*/

$x =15.315;
echo"$x : " . floor($x);

echo"<h5> Yuvarlama İşlemi(ceil))</h5>";
/*Her zaman en yakın yukarı tam sayı değerine yuvarlama işlemi yapar*/

$x =15.315;
echo"$x : " . ceil($x);

echo "<h5> Rastgele Sayı Üretme (rand())</h5>" ;
echo "10-100 arasında ratgele değer:" . rand(10,100);

for ($i = 0; $i < 10;$i++) {
   echo "<br>$i eleman:" . rand(10,100); 
}
/*çereeeeez*/













?>
</body>
</html>