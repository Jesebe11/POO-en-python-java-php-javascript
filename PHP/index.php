<?php
require('Account.php');
require('Car.php');

$car = new Car("LicPHP", new Account("Kam", "7769737"));
$car->printDataCar();