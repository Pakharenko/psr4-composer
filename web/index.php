<?php

error_reporting(E_ALL); 
ini_set('display_errors', 1);


require __DIR__ . '/../vendor/autoload.php';

$app = new pro\app\App();

$data1 = new pro\app\Data1();
echo $data1->get();

$data2 = new pro\app\Data2();
echo $data2->get();

