<?php

$master = fopen("rest.txt", "r");
$content = fread($master, filesize("rest.txt"));
fclose($master);
echo $content;


$to_write = fopen('data.txt', 'w');
fwrite($to_write, 'Hello evevryone, I appreciate your fake cares.');
fclose($to_write);
echo "Task was successfully done";


$hi = fopen('data.txt','a');
fwrite($hi,' Farkhad is mafia here');
fclose($hi);
echo "<br>";

// Reading the file by the method which is raw to raw

$help = fopen('rest.txt', 'r');
while(!feof($help)){
    echo fgets($help)."<br>";
}
fclose($help);

// Checking aviability of files
if(file_exists('data.txt')){
    unlink('data.txt');
    echo 'File was deleted';

} else{
    echo 'it is not available';
}

echo "<br><br>";

// reading a file via easy way

$content = file_get_contents('rest.txt');
echo $content;
// writing like this
$content = file_put_contents('rest.txt', 'Hellomaleykum bratuxa whasssssup');
$content = file_put_contents('rest.txt', '  Hellomaleykum bratuxa whasssssup',FILE_APPEND);


$log = date('Y.m.d H:i:s' . "User logged to system \n");
file_put_contents("log.txt",$log, FILE_APPEND);

?>