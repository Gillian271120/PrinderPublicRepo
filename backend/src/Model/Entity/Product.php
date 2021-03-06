<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property string $image_name
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
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
        'created' => true,
        'modified' => true,
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
