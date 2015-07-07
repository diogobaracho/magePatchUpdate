<?php
$mageFile = __DIR__ . '/../../app/Mage.php';
if(!file_exists($mageFile)){die("mage file not found");}
require $mageFile;

//VERSION
$m = new Mage;
$version = trim($m->getVersion());
echo $version;