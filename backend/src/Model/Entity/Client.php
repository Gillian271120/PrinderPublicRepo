<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $Dni
 * @property string $Fullname
 * @property string $Telephone
 * @property int $creditCard
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Client extends Entity
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
        'Dni' => true,
        'Fullname' => true,
        'Telephone' => true,
        'creditCard' => true,
        'created' => true,
        'modified' => true,
        'subtotal' => true,
    ];

    public function frontendData(): array
    {
        return [
            'Dni' => $this->Dni,
            'Fullname' => $this->Fullname,
            'Telephone' => $this->Telephone,
            'creditCard' => $this->creditCard,
            'subtotal' => $this->subtotal,
            'created' => $this->created,
            'modified' => $this->modified,
        ];
    }
}
