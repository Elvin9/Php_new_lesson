<?php
$a = " Hello\nWorld ";
$a = trim(str_replace(search: '\n', replace: '<br>', subject: $a ));

echo $a;
