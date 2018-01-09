<?php
class SoftwareKeep_Popup_Helper_Data extends Mage_Core_Helper_Abstract
{
	public function getPopupText()
	{
		return Mage::getStoreConfig('softwarekeep_popup/popup_configuration/popup_text', Mage::app()->getStore()->getId());
	}
}
	 