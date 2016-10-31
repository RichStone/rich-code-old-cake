<?php
namespace MailCalculator\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use MailCalculator\Model\Table\CountriesTable;

/**
 * MailCalculator\Model\Table\CountriesTable Test Case
 */
class CountriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \MailCalculator\Model\Table\CountriesTable
     */
    public $Countries;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.mail_calculator.countries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Countries') ? [] : ['className' => 'MailCalculator\Model\Table\CountriesTable'];
        $this->Countries = TableRegistry::get('Countries', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Countries);

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
