<?php
namespace Magento;

class magePatchUpdate
{
	public $version = '';
	public $mage = NULL;
	public $edition = '';

	function __construct($mage = NULL) {
		$this->mage = $mage;
	}

	public function teste($value='')
	{
		echo $this->mage->getEdition();
		echo "string";
	}
}