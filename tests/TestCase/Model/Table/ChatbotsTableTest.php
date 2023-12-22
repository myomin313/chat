<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ChatbotsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ChatbotsTable Test Case
 */
class ChatbotsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ChatbotsTable
     */
    protected $Chatbots;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Chatbots',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Chatbots') ? [] : ['className' => ChatbotsTable::class];
        $this->Chatbots = $this->getTableLocator()->get('Chatbots', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Chatbots);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ChatbotsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
