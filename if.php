<?php
$a = -2;
$b = 2;
$c = 5;
$d = 8;
if($a<0){
    echo "Bu son noldan kichik";

}
echo "\n";
echo $b > 0 ?? "Yes";
echo "\n";
echo $a>0 ? "yes": "no";
echo "\n";
if($a<0 && $b>0){
    echo '2ala shart ham bajarildi';
}
echo "\n";
if($c>5 || $d<9){
    echo '1ta shart bajarildi';
}
echo "\n";
if($a>0){
    echo "yes of course";

}else{
    echo "not really";
}
echo "\n";
if($a>$b){
    echo "yes";
}elseif($c>4){
    echo "that's truuue babee";
}else{
    echo "no bro no neveeer";
}