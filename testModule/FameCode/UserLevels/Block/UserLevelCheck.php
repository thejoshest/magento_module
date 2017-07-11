<?php
namespace FameCode\UserLevels\Block;

use Magento\Customer\Model\Session;
use Magento\Framework\View\Element\Template;

class UserLevelCheck extends Template
{
    protected $customerSession;

    public function __construct (
        Session $customerSession
    ) {
        $this->_customerSession = $customerSession;
    }

    public function getGroupId() {
        if($this->_customerSession->isLoggedIn()):
            $customerGroup=$this->_customerSession->getCustomer()->getGroupId();
            if($customerGroup === '0'):
                
            endif;
        endif;
    }

}
