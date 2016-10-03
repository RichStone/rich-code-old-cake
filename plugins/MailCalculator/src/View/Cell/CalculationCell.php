<?php
namespace MailCalculator\View\Cell;

use Cake\View\Cell;

/**
 * Calculate cell
 */
class CalculationCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display($packageValue, $insuredOption, $uninsuredOption)
    {
        $evInsured = $this->calculateEv($packageValue, $insuredOption);
        $evUninsured = $this->calculateEv($packageValue, $uninsuredOption);
        $postalServiceNameInsured = $insuredOption['name'];
        $postalServicePriceInsured = $insuredOption['price'];
        $postalServiceNameUninsured = $uninsuredOption['name'];
        $postalServicePriceUninsured = $uninsuredOption['price'];
        $this->set(compact('evUninsured', 'evInsured', 'postalServiceNameInsured', 'postalServicePriceInsured',
            'postalServiceNameUninsured', 'postalServicePriceUninsured'));
    }

    /**
     * @param $packageValue article price
     * @param $postalService fetched service
     * @return mathematical ev of shipping option in relation to the postal service
     */
    public function calculateEv($packageValue, $postalService)
    {
        $p = $this->setP($postalService);

        if(isset($postalService)) {
            if($postalService['tracked']) {
                $ev = ((-$postalService['price']) + $packageValue);
            }
            else {
                $ev = ((-$postalService['price']) + (1 - $p) * (-$packageValue) + ($p * $packageValue));
            }
        }
        else {
            $ev = 'Es gibt leider keinen Versandservice zu Ihrer Eingabe';
        }

        return $ev;
    }

    public function setP($postalService) {
        $p = null;

        if($postalService['shipping_range'] === 'national' && $postalService['tracked'])
            $p = 0.99;
        if($postalService['shipping_range'] === 'national' && !$postalService['tracked'])
            $p = 0.96;
        if($postalService['shipping_range'] === 'international' && $postalService['tracked'])
            $p = 0.94;
        if($postalService['shipping_range'] === 'international' && !$postalService['tracked'])
            $p = 0.90;

        return $p;
    }
}