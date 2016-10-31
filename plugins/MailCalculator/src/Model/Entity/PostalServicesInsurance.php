<?php
namespace MailCalculator\Model\Entity;

use Cake\ORM\Entity;

/**
 * PostalServicesInsurance Entity
 *
 * @property int $id
 * @property int $postal_service_id
 * @property int $insurance_id
 *
 * @property \MailCalculator\Model\Entity\PostalService $postal_service
 * @property \MailCalculator\Model\Entity\Insurance $insurance
 */
class PostalServicesInsurance extends Entity
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
