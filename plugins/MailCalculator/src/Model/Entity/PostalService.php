<?php
namespace MailCalculator\Model\Entity;

use Cake\ORM\Entity;

/**
 * PostalService Entity
 *
 * @property int $id
 * @property string $carrier
 * @property string $name
 * @property float $price
 * @property int $max_weight
 * @property int $max_height
 * @property int $max_width
 * @property int $max_length
 * @property int $max_overall_size
 * @property string $shipping_range
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \MailCalculator\Model\Entity\Insurance[] $insurances
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
