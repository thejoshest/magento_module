<?php
class FameCode_UserLevels_Model_Observer{
 public function addHandler($observer)
    {
        $loggedIn = Mage::getSingleton('customer/session')->isLoggedIn();
    if($loggedIn):
    $groupId = Mage::getSingleton('customer/session')->getCustomerGroupId();
    //Get customer Group name
      $group = Mage::getModel('customer/group')->load($groupId);
      //echo $group->getCode();
        $observer->getEvent()->getLayout()->getUpdate()
             ->addHandle('customer_group_'.strtolower($group->getCode()));
    endif;
    }

}
