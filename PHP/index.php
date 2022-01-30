<?php
require_once("car.php");
require_once("uberX.php");
require_once("account.php");
require_once("uberPool.php");

$uberX = new uberX("CVB123",new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->printDataCar();
$uberPool = new uberPool("rte123",new Account("Andrea", "4356"), "Chevrolet", "Spark")
$uberPool->printDataCar();
?>