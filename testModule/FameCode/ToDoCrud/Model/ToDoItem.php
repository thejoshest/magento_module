<?php
namespace FameCode\ToDoCrud\Model;
class ToDoItem extends \Magento\Framework\Model\AbstractModel implements \FameCode\ToDoCrud\Api\Data\ToDoItemInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'famecode_todocrud_todoitem';

    protected function _construct()
    {
        $this->_init('FameCode\ToDoCrud\Model\ResourceModel\ToDoItem');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
