<?php
namespace MailCalculator\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use MailCalculator\Model\Table\PostalServicesTable;

/**
 * MailCalculator\Model\Table\PostalServicesTable Test Case
 */
class PostalServicesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \MailCalculator\Model\Table\PostalServicesTable
     */
    public $PostalServices;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.mail_calculator.postal_services'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PostalServices') ? [] : ['className' => 'MailCalculator\Model\Table\PostalServicesTable'];
        $this->PostalServices = TableRegistry::get('PostalServices', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostalServices);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
