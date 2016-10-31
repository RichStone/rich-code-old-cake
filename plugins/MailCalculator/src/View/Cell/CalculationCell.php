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
    public function display($item, $value, $insuredOption, $riskyOption)
    {
        //adjust calculateEV method properly
        $evInsured = $this->calculateEv($value, $insuredOption, $shippingCosts);
        $evRisky = $this->calculateEv($value, $riskyOption);
        $postalServiceNameInsured = $insuredOption['name'];
        $postalServicePriceInsured = $insuredOption['price'];
        $postalServiceNameRisky = $riskyOption['name'];
        $postalServicePriceRisky = $riskyOption['price'];
        debug($evRisky);
        $this->set(compact('evRisky', 'evInsured', 'postalServiceNameInsured', 'postalServicePriceInsured',
            'postalServiceNameRisky', 'postalServicePriceRisky'));
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

        //national services
        if($postalService['shipping_range'] === 'national' && $postalService['tracked'])
            $p = 0.99;
        if($postalService['shipping_range'] === 'national' && !$postalService['tracked'])
            $p = 0.95;
        //international services
        if($postalService['shipping_range'] === 'international' && $postalService['tracked'])
            $p = 0.97;
        if($postalService['shipping_range'] === 'international' && !$postalService['tracked'])
            $p = 0.90;

        return $p;
    }
}