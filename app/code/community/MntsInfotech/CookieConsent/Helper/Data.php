<?php
class MntsInfotech_CookieConsent_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
    * Name library directory.
    */
  
   /**
    * List files for include.
    *
    * @var array
    */
   protected $_files = array(
       'jquery-1.10.2.min',
	   'cookieconsent'
   );
   
   public function getFiles(){
      if(Mage::getStoreConfig('mntsinfotechcookieconsent/speed/enabled')==1) {
        unset($this->_files[0]);
      }
      return $this->_files;
   }
   
   public function getJQueryPath($file){
       return "js/mntsinfotech/".$file.".js";
   }
}
