<?php
$FileName = "passwords.txt";
if (file_exists($FileName)){
$f = fopen($FileName,"r");
$r = fgets($f);
exit("pass = ".$r);
}
?>