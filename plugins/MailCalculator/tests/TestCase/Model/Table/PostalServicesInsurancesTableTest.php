<?php
namespace MailCalculator\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use MailCalculator\Model\Table\PostalServicesInsurancesTable;

/**
 * MailCalculator\Model\Table\PostalServicesInsurancesTable Test Case
 */
class PostalServicesInsurancesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \MailCalculator\Model\Table\PostalServicesInsurancesTable
     */
    public $PostalServicesInsurances;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.mail_calculator.postal_services_insurances',
        'plugin.mail_calculator.postal_services',
        'plugin.mail_calculator.insurances',
        'plugin.mail_calculator.allowed_products'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PostalServicesInsurances') ? [] : ['className' => 'MailCalculator\Model\Table\PostalServicesInsurancesTable'];
        $this->PostalServicesInsurances = TableRegistry::get('PostalServicesInsurances', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PostalServicesInsurances);

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
