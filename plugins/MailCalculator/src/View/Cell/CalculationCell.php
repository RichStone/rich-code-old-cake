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
    public function display($item_id, $value, $insuredOption, $riskyOption)
    {
        $this->loadModel('Items');

        //adjust calculateEV method properly
        $evInsured = $this->calculateEv($value, $insuredOption);
        $evRisky = $this->calculateEv($value, $riskyOption);
        $postalServiceNameInsured = $insuredOption['name'];
        $postalServicePriceInsured = $insuredOption['price'];
        $postalServiceNameRisky = $riskyOption['name'];
        $postalServicePriceRisky = $riskyOption['price'];
        $item_name = $this->Items->find('all')->where(['id' => $item_id])->first()->name;

        $this->set(compact('evRisky', 'evInsured', 'postalServiceNameInsured', 'postalServicePriceInsured',
            'postalServiceNameRisky', 'postalServicePriceRisky', 'item_name'));
    }

    /**
     * @param $packageValue article price
     * @param $postalService fetched service
     * @return mathematical ev of shipping option in relation to the postal service
     */
    public function calculateEv($packageValue, $postalService)
    {
        $p = $this->setP($postalService);

//TODO continue here with setting up right EV calculation
//debug($postalService['_matchingData']['Insurances']->name);

//        $postalService = $postalService->where(['PostalService.name' => 'Standard']);


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