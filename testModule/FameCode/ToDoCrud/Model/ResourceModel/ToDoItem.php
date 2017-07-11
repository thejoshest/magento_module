<?php
namespace FameCode\ToDoCrud\Model\ResourceModel;
class ToDoItem extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('famecode_todocrud_todoitem','famecode_todocrud_todoitem_id');
    }
}
