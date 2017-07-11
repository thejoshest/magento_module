<?php
namespace FameCode\ToDoCrud\Api;

use FameCode\ToDoCrud\Api\Data\ToDoItemInterface;
use Magento\Framework\Api\SearchCriteriaInterface;

interface ToDoItemRepositoryInterface 
{
    public function save(ToDoItemInterface $page);

    public function getById($id);

    public function getList(SearchCriteriaInterface $criteria);

    public function delete(ToDoItemInterface $page);

    public function deleteById($id);
}
