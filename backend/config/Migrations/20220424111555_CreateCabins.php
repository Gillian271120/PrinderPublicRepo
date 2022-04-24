<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateCabins extends AbstractMigration
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
        $table = $this->table('cabins');
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('type', 'string', [
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
                'name' => 'Jessica',
                'type' => 'Cabin 1 person',
                'price' => 7,
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();
        
        $data = [
            [
                'id' => 0,
                'name' => 'Charlie',
                'type' => 'Cabin 1 person',
                'price' => 7,
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();

        $data = [
            [
                'id' => 0,
                'name' => 'Beta',
                'type' => 'Cabin 1 person',
                'price' => 7,
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();

        $data = [
            [
                'id' => 0,
                'name' => 'Alpha',
                'type' => 'Cabin 3 persons',
                'price' => 6.50,
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();

        $data = [
            [
                'id' => 0,
                'name' => 'Bravo',
                'type' => 'Cabin 3 persons',
                'price' => 6.50,
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();

        $data = [
            [
                'id' => 0,
                'name' => 'Jacobs',
                'type' => 'Cabin 3 persons',
                'price' => 6.50,
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();

        $data = [
            [
                'id' => 0,
                'name' => 'Chafiras',
                'type' => 'Cabin 7 persons',
                'price' => 6,
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();

        $data = [
            [
                'id' => 0,
                'name' => 'Katherine',
                'type' => 'Cabin 7 persons',
                'price' => 6,
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();

        $data = [
            [
                'id' => 0,
                'name' => 'Metic',
                'type' => 'Cabin 7 persons',
                'price' => 6,
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();

        $data = [
            [
                'id' => 0,
                'name' => 'Sinhue',
                'type' => 'Cabin 12 persons',
                'price' => 5.50,
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();

        $data = [
            [
                'id' => 0,
                'name' => 'Martis',
                'type' => 'Cabin 12 persons',
                'price' => 5.50,
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();

        $data = [
            [
                'id' => 0,
                'name' => 'Leloy',
                'type' => 'Cabin 18 persons',
                'price' => 5,
                'created' => $currentDate,
                'modified' => $currentDate,
            ],
        ];
        $table->insert($data)->save();
    }
}
