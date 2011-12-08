<?php

$myFile = "in.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
fwrite($fh, $_POST["say"] . "\n");
fclose($fh);

header("Location: /");

?>
