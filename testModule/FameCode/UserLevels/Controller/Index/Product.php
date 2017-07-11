<?php
namespace FameCode\UserLevels\Controller\Index;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Context;

class World extends \Magento\Framework\App\Action\Action
{
	protected $pageFactory;

	public function __construct(Context $context, PageFactory $pageFactory) {
		$this->pageFactory = $pageFactory;
		return parent::__construct($context);
	}

    public function execute() {
        $page_object = $this->pageFactory->create();
        $page_object->addHandle('user_levels_index_product');
        return $page_object;
    }    
}