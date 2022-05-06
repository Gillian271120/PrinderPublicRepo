<?php
declare(strict_types=1);


namespace App\Service\Reservation;

use Cake\ORM\TableRegistry;
use CakeDC\Api\Service\Action\Action;

/**
 * Class DataAction
 *
 * @package CakeDC\Api\Service\Action
 */
class CabinsData extends Action
{

    /**
     * Return all curent registered cabins on DB
     *
     * @return array|bool
     */
    public function execute()
    { 
        $cabinsTable = TableRegistry::getTableLocator()->get('cabins');
        return $cabinsTable->find()->toArray(); 
    }

}
