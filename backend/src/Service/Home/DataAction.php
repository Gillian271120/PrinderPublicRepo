<?php
declare(strict_types=1);


namespace App\Service\Home;

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
     * Example of usage of API
     *
     * @return array|bool
     */
    public function execute()
    {
        
/*      Añadir algo a la base de datos:
        debug($this->getData());exit; 
        $usersTable = TableRegistry::getTableLocator()->get('Users');
        $usersTable->find();
        
        Esto sobre todo
        $usersTable->newEmptyEntity(); 
        */
        return [
            'title' => 'Whatever',
        ];
    }

}
