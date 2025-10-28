<?php
$login = "admin";
$parol = 5644789;


$alo = 90;
$yaxshi = 70;
$qoniqarli = 50;
$baho = 26;

if($baho >= $alo) {
    echo "Sizning baho a'lo ";
} elseif ($baho >= $yaxshi) {
    echo "Sizning baho yaxshi";
} elseif ($baho >= $qoniqarli ) {
    echo "sizning baho qoniqarli lein ishlash kerak";
} else {
    echo "Imtihondan yiqildingiz";
}
echo "\n";
$son = -1;

if ($son > 0) {
    echo " son musbat";
} elseif ( $son ==0 ){
    echo "bu son nol" ;
}elseif( $son < 0) {
    echo " bu son manfiiy";

}
echo "\n";
 $son1 = 4;
 if ($son1 % 2 == 0) {
    echo "bu son juft";
 }else {
    echo "bu son toq";
 }
 echo "\n";
$yil = 2060;
if (($yil % 4 == 0 && $yil % 100 !== 0) || ($yil % 400 == 0)){
    echo "bu yil kabisa yili";
} else {
    echo "bu yil kabisa yili emas";
}

$xarid = 100000;
$xarid_foizi = $xarid/100;
$foiz_20 = $xarid_foizi * 20;
$foiz_10 = $xarid_foizi * 10;
$foiz_5 = $xarid_foizi * 5;

if ($xarid >= 500000){
    echo "sizning xardingiz $xarid";
    echo "sizning 20% fozilik chegirma yutdingiz va bu $foiz_20 ga teng";
    echo " jami summa $xarid - $foiz_20 = ". $xarid-$foiz_20;
} elseif ($xarid >= 200000){
    echo "sizning xardingiz $xarid";
    echo "sizning 10% fozilik chegirma yutdingiz va bu $foiz_10 ga teng";
    echo " jami summa $xarid - $foiz_10 = ". $xarid-$foiz_10;
} elseif ( $xarid >= 100000){
    echo "sizning xardingiz $xarid";
    echo "\n";
    echo "sizning 5% fozilik chegirma yutdingiz va bu $foiz_5 ga teng";
    echo "\n";
    echo " jami summa $xarid - $foiz_5 = ". $xarid-$foiz_5;

} else {
    echo "Afsuski sizda chegirma yo'q";
}


