<?php
declare(strict_types=1);

use App\Model\Entity\Product;
use Migrations\AbstractMigration;

class CreateProducts extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('price', 'decimal', [
            'default' => null,
            'null' => false,
            'precision' => 10,
            'scale' => 2,
        ]);
        $table->addColumn('image_name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();

        
        $currentDate = date('Y-m-d H:i:s');
        $data = [
            [
                'id' => 0,
                'name' => 'Bocadillo de pollo',
                'price' => 1.50,
                'image_name' => 'bocadilloPollo.png',
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
                    
        $table = $this->table('products');
        $table->insert($data)->save();
        $data = [
            [
                'id' => 0,
                'name' => 'Bocadillo de Lomo',
                'price' => 1.50,
                'image_name' => 'bocadilloLomo.png',
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();

        $data = [
            [
                'id' => 0,
                'name' => 'Papas fritas Japonesas',
                'price' => 4,
                'image_name' => 'papasFritasJaponesas.png',
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();

        $data = [
            [
                'id' => 0,
                'name' => 'Chocolate sabor menta japonés',
                'price' => 4,
                'image_name' => 'chocolateMenta.png',
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();
    }
}
