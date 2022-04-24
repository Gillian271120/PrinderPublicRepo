<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property string $clientDni
 * @property string $clientFullname
 * @property string $clientTelephone
 * @property string $service
 * @property \Cake\I18n\FrozenTime $date
 * @property int $clientCreditCard
 * @property string $subtotal
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Reservation extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'clientDni' => true,
        'clientFullname' => true,
        'clientTelephone' => true,
        'numberClients' => true,
        'service' => true,
        'date' => true,
        'clientCreditCard' => true,
        'subtotal' => true,
        'created' => true,
        'modified' => true,
    ];

    public function frontendData(): array
    {
        return [
            'clientDni' => $this->clientDni,
            'clientFullname' => $this->clientFullname,
            'clientTelephone' => $this->clientTelephone,
            'service' => $this->service,
            'date' => $this->date,
            'clientCreditCard' => $this->clientCreditCard,
            'subtotal' => $this->subtotal,
            'numberClients' => $this->numberClients,
            'created' => $this->created,
            'modified' => $this->modified,
        ];
    }
}
