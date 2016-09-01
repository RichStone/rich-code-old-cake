<?php
namespace MailCalculator\Model\Entity;

use Cake\ORM\Entity;

/**
 * PostalService Entity
 *
 * @property int $id
 * @property string $name
 * @property float $price
 * @property bool $tracked
 * @property float $insurance_max_sum
 * @property string $insurance_type
 * @property string $insurance_forbidden_products
 * @property int $max_weight
 * @property int $max_height
 * @property int $max_width
 * @property int $max_length
 * @property int $max_overall_size
 * @property string $country_iso
 * @property string $country_name
 * @property string $shipping_range
 * @property string $additional_info
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class PostalService extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
