<?php
namespace FameCode\ToDoCrud\Block;
class Main extends \Magento\Framework\View\Element\Template
{
  protected $toDoFactory;
  public function __construct(
      \Magento\Framework\View\Element\Template\Context $context,
      \FameCode\ToDoCrud\Model\TodoItemFactory $toDoFactory
  )
  {
      $this->toDoFactory = $toDoFactory;
      parent::__construct($context);
  }

  function _prepareLayout()
  {
    $todo = $this->toDoFactory->create();
    $todo->setData('item_text','Finish my Magento article')
    ->save();
  }
}
