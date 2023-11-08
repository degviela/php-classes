<?php
require_once ("cat.php");

$obj = new Cat();
$obj2 = new Cat();

$obj->setName("Brincis");
$obj2->setName("Mincis");

echo $obj->name;
echo "<br>";
$obj->birthday();
echo "<br>";
cat::moew();
echo "<br>";
echo "<br>";
echo $obj2->name;
echo "<br>";
$obj2->birthday();
echo "<br>";
cat::moew();
?>