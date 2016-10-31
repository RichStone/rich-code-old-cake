<?php
namespace MailCalculator\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InsurancesFixture
 *
 */
class InsurancesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 3, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 25, 'null' => true, 'default' => null, 'collate' => 'latin1_bin', 'comment' => '', 'precision' => null, 'fixed' => null],
        'price' => ['type' => 'float', 'length' => 7, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'max_value' => ['type' => 'decimal', 'length' => 11, 'precision' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => ''],
        'allowed_product_id' => ['type' => 'string', 'length' => 500, 'null' => true, 'default' => null, 'collate' => 'latin1_bin', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_bin'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'name' => 'Lorem ipsum dolor sit a',
            'price' => 1,
            'max_value' => 1.5,
            'allowed_product_id' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
