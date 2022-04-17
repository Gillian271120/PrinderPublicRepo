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
     * Update remember me and determine redirect url after user identified
     *
     * @param array $user user data after identified
     * @param bool $socialLogin is social login
     * @return array|bool
     */
    public function execute()
    { 
        $productTable = TableRegistry::getTableLocator()->get('products');
        $productTable->find()->toArray(); 

        return $productTable->find()->toArray(); 
    }

}
