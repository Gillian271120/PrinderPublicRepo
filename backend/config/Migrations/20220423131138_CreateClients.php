<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateClients extends AbstractMigration
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
        $table = $this->table('clients');
        $table->addColumn('Dni', 'string', [
            'default' => null,
            'limit' => 9,
            'null' => false,
        ]);
        $table->addColumn('Fullname', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('Telephone', 'string', [
            'default' => null,
            'limit' => 15,
            'null' => false,
        ]);
        $table->addColumn('creditCard', 'string', [
            'default' => null,
            'limit' => 12,
            'null' => false,
        ]);
        $table->addColumn('subtotal', 'decimal', [
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
    }
}
