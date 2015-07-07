<?php
$mageFile = __DIR__ . '/../../app/Mage.php';
if(!file_exists($mageFile)){die("mage file not found");}
require $mageFile;


//const EDITION_COMMUNITY    = 'Community';
//const EDITION_ENTERPRISE   = 'Enterprise';
//const EDITION_PROFESSIONAL = 'Professional';
//const EDITION_GO           = 'Go';

$m = new Mage;
$edition = trim(strtolower($m->getEdition()));
echo $edition;
