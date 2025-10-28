<?php
$i = 0;


while(true){
    if($i==10)
        break;
    $i++;

    if($i==8)
        continue;
    echo $i. ", ";


}
echo "\n";


$count = 0;
$summa = 0;
for($x = 0; $x <= 100; $x++ ){
    if($x % 3 == 0){
        $count++;
        $summa += $x;
    }
}
echo $count;
echo "\n";
echo $summa;
echo "\n";

$a = 6589844;
$brrr = 0;
$temp = $a;

while($temp > 0){
    $brrr += $temp % 10;
    $temp = (int)($temp /10 );
}
echo "$a ning raqamlari yigindisi $brrr ga teng";


$f = 0;

while($f<0);{
    echo $f++;    
}