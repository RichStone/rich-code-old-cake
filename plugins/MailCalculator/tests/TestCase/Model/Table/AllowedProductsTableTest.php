<?php
namespace MailCalculator\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use MailCalculator\Model\Table\AllowedProductsTable;

/**
 * MailCalculator\Model\Table\AllowedProductsTable Test Case
 */
class AllowedProductsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \MailCalculator\Model\Table\AllowedProductsTable
     */
    public $AllowedProducts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.mail_calculator.allowed_products',
        'plugin.mail_calculator.insurances'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('AllowedProducts') ? [] : ['className' => 'MailCalculator\Model\Table\AllowedProductsTable'];
        $this->AllowedProducts = TableRegistry::get('AllowedProducts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AllowedProducts);

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
