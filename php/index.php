<?php
$string ="This is the example";

$result = explode(" ", $string);

$result = implode("|",$result);

$result = range(0, 12);

shuffle($result);

$result = round(1.95583, 2);

$a = array("a"=>"red","b"=>"green","c"=>"red");
$result = array_unique($a);

$result = trim(" PREM KUMAR   ");

$result = urlencode("http://www.google.com?q=this is the good example");
$result = urldecode($result);

$result = htmlspecialchars('<h1>This is the good example "GOLD" </h1>');

print_r($result);
?>