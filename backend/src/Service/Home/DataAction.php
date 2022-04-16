<?php
declare(strict_types=1);


namespace App\Service\Home;

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
        /*
        Añadir algo a la base de datos:
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
