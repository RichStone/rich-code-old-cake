<?php
namespace MailCalculator\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use MailCalculator\Model\Table\InsurancesTable;

/**
 * MailCalculator\Model\Table\InsurancesTable Test Case
 */
class InsurancesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \MailCalculator\Model\Table\InsurancesTable
     */
    public $Insurances;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.mail_calculator.insurances',
        'plugin.mail_calculator.allowed_products',
        'plugin.mail_calculator.postal_services',
        'plugin.mail_calculator.postal_services_insurances'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Insurances') ? [] : ['className' => 'MailCalculator\Model\Table\InsurancesTable'];
        $this->Insurances = TableRegistry::get('Insurances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Insurances);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
