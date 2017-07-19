<?php
namespace FameCode\UserLevels\Block;
 
class LoggedOut extends \Magento\Framework\View\Element\Template
{
 
    protected $storeManager;
    protected $coreHelper;
 
    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        $storeManager,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
 
    public function getLoggedOutContent()
    {
        return '';
    }
 
}