<?php
require "blank.php";

class Bar 
{
    use Bank;
}

$obj = new Bar;

$obj->abc();
echo "<br>";
$obj->efg();

?>