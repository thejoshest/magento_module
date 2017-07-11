<?php

namespace FameCode\UserLevels\Controller;

abstract class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * Magicproduct factory.
     *
     * @var \Magiccart\Magicproduct\Model\MagicproductFactory
     */
    protected $_magicproductFactory;
    protected $_session;
    protected $_resultPageFactory;

    /**
     * Index constructor.
     *
     * @param \Magento\Framework\App\Action\Context                                $context
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Customer\Model\Session $session,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
        $this->_session = $session;
    }
}
