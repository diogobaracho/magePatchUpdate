<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

//$mageFile = __DIR__ . '/../app/Mage.php';
//echo "$mageFile\n";
if(!file_exists('../app/Mage.php')){die("mage file not found");}

require '../app/Mage.php';
require 'loader.php';

Loader::register('Vendor/Magento','Magento');

use Magento\magePatchUpdate;

$mage = new Mage;
$updater = new magePatchUpdate($mage);

$updater->teste();