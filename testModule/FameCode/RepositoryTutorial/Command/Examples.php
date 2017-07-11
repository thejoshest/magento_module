<?php
namespace FameCode\RepositoryTutorial\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Examples extends Command
{
    protected function configure()
    {
        $this->setName("ps:examples");
        $this->setDescription("A command the programmer was too lazy to enter a description for.");
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
      $repo = $this->objectManager->get('Magento\Catalog\Model\ProductRepository');
      $search_criteria = $this->objectManager->create(
          'Magento\Framework\Api\SearchCriteriaInterface'
      );
      $result = $repo->getList($search_criteria);
      $products = $result->getItems();
      foreach($products as $product)
      {
          echo $product->getSku(),"\n";
      }
    }

    protected $objectManager;
    public function __construct(
        \Magento\Framework\ObjectManagerInterface $objectManager,
        \Magento\Framework\App\State $appState,
        $name=null
    )
    {
        $this->objectManager = $objectManager;
        $appState->setAreaCode('frontend');
        parent::__construct($name);
    }

}
