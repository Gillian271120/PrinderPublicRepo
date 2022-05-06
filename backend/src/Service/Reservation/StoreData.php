<?php
declare(strict_types=1);


namespace App\Service\Reservation;

use Cake\Database\Expression\QueryExpression;
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
     * Stores a new reservation and client if certain conditions are given
     *
     * @return array|bool
     */
    public function execute()
    { 
        $data = $this->getData();
        $clientTable = TableRegistry::getTableLocator()->get('clients');
        $reservationTable = TableRegistry::getTableLocator()->get('reservations');
        $cabinsTable = TableRegistry::getTableLocator()->get('cabins');
        $cabin = $cabinsTable->get($data["cabin_id"]);
        $data["service"] = $cabin->get('type');
        $data['date'] = date("Y-m-d", strtotime($data['date']));
        //Crea una entidad vacía
        $reservation = $reservationTable->newEmptyEntity();
        //Lo de abajo te dice los errores.Aunque buscar otro métodos como hacerlos tu o algo
        //Le metes los datos. Funciona pq claves = nombre de columnas
        $reservation = $reservationTable->newEntity($data);
        
        //Lo guarda en la tabla. Si lo pones en if te puede devolver falso si da err
        $repeatedCabins = $reservationTable->find()->where(
                    [
                        "cabin_id =" => $reservation->get("cabin_id"),
                        "date = " => $reservation->get("date")
                    ],
        ) ->toArray();
        if($repeatedCabins) {
            return "Fecha no disponible";
        } else {
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
                    $clientTable->save($client);
            }
            return $reservationTable->saveOrFail($reservation);
        }
        
    
    }
    
}
