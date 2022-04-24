<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CabinsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CabinsTable Test Case
 */
class CabinsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CabinsTable
     */
    protected $Cabins;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Cabins',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cabins') ? [] : ['className' => CabinsTable::class];
        $this->Cabins = $this->getTableLocator()->get('Cabins', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Cabins);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CabinsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
