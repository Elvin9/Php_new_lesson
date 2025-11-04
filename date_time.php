<?php
date_default_timezone_set("Asia/Tashkent");
echo "Sana: ".date('Y-m-d');
echo "<br>";
echo "Sana: ".date('Y.m.d');
echo "<br>";
echo "Sana: ".date(format: 'm.d.Y');
echo "<br>";
echo "Sana: ".date('d-m-y H:i:s');
echo "<br>";
echo "Sana: ".date(format: 'h:i:sa');
echo"<br>";
$d = mktime(11,56,15,8,11,2024);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
echo"<br>";
$a = strtotime("11:41am July 29  2009");
echo "Created date is ". date(format: " Y.m.d h:i:sa", timestamp: $a);
echo"<br>";
$b = strtotime("Tomorrow");
echo "Created date is ". date(format: " Y.m.d h:i:sa", timestamp: $b);
echo"<br>";
echo date(format: 'd F Y')."<br>";
echo date(format: 'd M Y')."<br>";
echo date(format: 'D M Y')."<br>";
echo time(). "<br>";
echo date('Y.m.d h:i:s', time())."<br>";

$d=strtotime("+1 year");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("+1 month");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$d=strtotime("+1 week");
echo date("Y-m-d h:i:sa", $d) . "<br>";









?>