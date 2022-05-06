<?php
declare(strict_types=1);


namespace App\Service\Products;

use Cake\ORM\TableRegistry;
use CakeDC\Api\Service\Action\Action;

/**
 * Class DataAction
 *
 * @package CakeDC\Api\Service\Action
 */
class DataAction extends Action
{

    /**
     * Gives all curent products of the db
     *
     * @return array|bool
     */
    public function execute()
    { 
        $productTable = TableRegistry::getTableLocator()->get('products');
        return $productTable->find()->toArray(); 
    }

}
