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
class StoreData extends Action
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
        $clientTable = TableRegistry::getTableLocator()->get('clients');
        $reservationTable = TableRegistry::getTableLocator()->get('reservations');
        //Aquí iría las validaciones
        $data = $this->getData();
        $data['date'] = date("Y-m-d", strtotime($data['date']));
        //Crea una entidad vacía
        $reservation = $reservationTable->newEmptyEntity();
        //Lo de abajo te dice los errores.Aunque buscar otro métodos como hacerlos tu o algo
        //Le metes los datos. Funciona pq claves = nombre de columnas
        $reservation = $reservationTable->newEntity($data);
        //Lo guarda en la tabla. Si lo pones en if te puede devolver falso si da err
        if($reservationTable->save($reservation)){
        $clientData = [
            'Dni' => $data["clientDni"],
            'Fullname' => $data["clientFullname"],
            'Telephone' => $data["clientTelephone"],
            'creditCard' => $data["clientCreditCard"],
            'subtotal' => $data["subtotal"],
        ];
            $client = $clientTable->newEmptyEntity();
            $client = $clientTable->newEntity($clientData);
            debug($clientTable->save($client));
        }
        
        return "a";
    
    }

}
