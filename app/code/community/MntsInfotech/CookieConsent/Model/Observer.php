<?php
class MntsInfotech_CookieConsent_Model_Observer
{
    public function prepareLayoutBefore(Varien_Event_Observer $observer)
   {
       if (Mage::getStoreConfig('mntsinfotechcookieconsent/general/enabled')!=1) {
           return $this;
       }
 
       /* @var $block Mage_Page_Block_Html_Head */
       $block = $observer->getEvent()->getBlock();
        
       if ("head" == $block->getNameInLayout()) {
           foreach (Mage::helper('cookieconsent')->getFiles() as $file) {
               //$block->addJs(Mage::helper('cookieconsent')->getJQueryPath($file));
               $block->addItem('skin_js', Mage::helper('cookieconsent')->getJQueryPath($file));
           }
       }
 
       return $this;
   }
}