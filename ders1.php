<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>internetprogramlama</title>
</head>
<body>
    <!--açıklama satırı  -->
    <?php
    //açıklama satırı
    /* shift+alt+a

echo :ekrana yadırma işlemi yapar. içerisinde html etiketleri kullanılabilir.
çift veya tek tırnak ile kullanılabilir.
çift tırnak içerisinde değişken içerikleri gösterilir.
nokta işareti ile birleştirme yapılabilir.
\kaçış karakteridir.özel ifadelerden önce kullanılır.

*/

echo "<h3>Aydın Adnan  Menderes Üniversitesi</h3>"; 
echo "<h4>Aydın Meslek Yükseokulu</h4>";
echo " Bilgisayar  Programcılığı"." Web Teknolojileri" ;
echo " Bilgisayar  Programcılığı"."<br>" .  " Web Teknolojileri" ;




echo "<hr> <h4> Değişken Tanımlama Kuralları </h4>";
echo"<ol>
<li> Değişken İsimleri $ ile başlar.  </li>
<li> Değişken isimleri sayısal bir idfadeyle başlayamaz. </li>
<li>Değişken isimlerinde boşluk kullanılmaz iki kelime varsa birinci_sinif birincisinif-sinif örneklerdeki kullanımlar önerilir </li>
<li>Değişken  ve dosya isimlerinde Türkçe karakter kullanılmamalıdır. </li>
<li>Değişken isimlerinde büyük-küçük harf kullanımına duyarlıdır. sayı  sayı != Sayı</li>
<li>Değişken içerisinde eğer metinsel bir ifade varsa çift tırnak (\") vrya (') kullanılır. </li>
 <li>Değişken içerisinde eğer sayısal bir ifadde varsa tırnak kullanılmadan yazılır. </li>
<li> değişkenin ismi , değişkenin içeriğini ifade etmelidir</li></ol>";



echo "<hr> <h4>Değişken tanımlama örnekleri</h4>";
$isim = "RAMAZAN";
$soyisim = "Kara";
$yas = 20;

echo $isim . " ". $soyisim;
echo "<br>";
echo "$isim $soyisim"; 
$üni = "Adnan Menderes";
$numara = "216001057";
/* Uygulama : 
üniversite-myo-ad-soyad-numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.
girilen bu değişkenllerin değerlerini bir html tablo içerisinde gösteriniz. */





?>
  <table>
      <tr>
         <td>üniversite</td>
         <td>ad</td>
         <td>soyad</td>
        
         <td>numara</td>
                </tr>
      <tr>
         <td><?=$üni?></td>
        
         
        <td><?=$isim?></td>
    
    <td><?=$soyisim?></td>
    <td><?=$numara?></td>

</tr>
   </table>








    </body>
</html>