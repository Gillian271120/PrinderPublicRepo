<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JwtRefreshTokensTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JwtRefreshTokensTable Test Case
 */
class JwtRefreshTokensTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JwtRefreshTokensTable
     */
    protected $JwtRefreshTokens;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.JwtRefreshTokens',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('JwtRefreshTokens') ? [] : ['className' => JwtRefreshTokensTable::class];
        $this->JwtRefreshTokens = $this->getTableLocator()->get('JwtRefreshTokens', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->JwtRefreshTokens);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\JwtRefreshTokensTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
