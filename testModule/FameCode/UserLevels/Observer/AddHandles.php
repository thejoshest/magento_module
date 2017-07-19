<?php
 
namespace FameCode\UserLevels\Observer;
 
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Customer\Model\Session as CustomerSession;
 
class AddHandles implements ObserverInterface
{
 
    protected $customerSession;
 
    public function __construct(
        CustomerSession $customerSession
    ) {
        $this->customerSession = $customerSession;
    }
 
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $layout = $observer->getEvent()->getLayout();

        $theSessionNumber = $this->customerSession->getGroupId();

        if ($theSessionNumber === 0) {
            $layout->getUpdate()->addHandle('customer_logged_out');
        } else if ($theSessionNumber === 1) {
            $layout->getUpdate()->addHandle('customer_logged_in');
        }

        /*if ($this->customerSession->getCustomer()->getGroupId() === 0) {
            $layout->getUpdate()->addHandle('customer_group_logged_out');
        } else if ($this->customerSession->getCustomer()->getGroupId() === 1) {
            $layout->getUpdate()->addHandle('customer_group_lvl1');
        } else if ($this->customerSession->getCustomer()->getGroupId() === 2) {
            $layout->getUpdate()->addHandle('customer_group_lvl2');
        } else if ($this->customerSession->getCustomer()->getGroupId() === 3) {
            $layout->getUpdate()->addHandle('customer_group_VIP');
        }*/
    }
}
?>