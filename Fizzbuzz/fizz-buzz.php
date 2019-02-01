<?php

$file = fopen('html.txt','r');
$Ar = fgets($file);
$Ar = fgets($file);
$Arr1 = fgets($file);
$Arr1 = str_replace("\r\n", "", $Arr1);
$limm = count($Arr1);
for ($i=7; $i++<($limm-7);)
echo $Arr1 [$i];