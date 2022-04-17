<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\I18n\FrozenTime;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property string $id
 * @property string $name
 * @property float $price
 * @property string $image_name
 */
class Product extends Entity
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
        'name' => true,
        'price' => true,
        'image_name' => true,
    ];

    /**
     * Checks if the token is expired
     *
     * @return bool
     */
    public function frontendData(): array
    {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'image_name' => $this->image_name,
        ];
    }
}
