<?php
namespace FameCode\ToDoCrud\Model\ResourceModel\ToDoItem;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('FameCode\ToDoCrud\Model\ToDoItem','FameCode\ToDoCrud\Model\ResourceModel\ToDoItem');
    }
}
