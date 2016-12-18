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
        if(isset($insuredOption)) {
            $evInsured = $this->calculateEv($value, $insuredOption);
        }

        $evRisky = $this->calculateEv($value, $riskyOption);
        $postalServiceNameInsured = $insuredOption['name'] . ' ' . $insuredOption['_matchingData']['Insurances']['name'];
        $postalServicePriceInsured = $insuredOption['price'] + $insuredOption['_matchingData']['Insurances']['price'];

        $postalServiceNameRisky = $riskyOption['name'];
        $postalServicePriceRisky = $riskyOption['price'];
        $item_name = $this->Items->find('all')->where(['id' => $item_id])->first()->name;
        $insuredCarrier = $insuredOption['carrier'];
        $riskyCarrier = $riskyOption['carrier'];

        $this->set(compact('evRisky', 'evInsured', 'postalServiceNameInsured', 'postalServicePriceInsured',
            'postalServiceNameRisky', 'postalServicePriceRisky', 'item_name', 'insuredCarrier', 'riskyCarrier'));
    }

    /**
     * @param $packageValue article price
     * @param $postalService fetched service
     * @return mathematical ev of shipping option in relation to the postal service
     */
    public function calculateEv($packageValue, $postalService)
    {
        $insuranceType = $postalService['_matchingData']['Insurances']['name'];
        $p = $this->setP($postalService, $insuranceType);

//TODO catch cases when postalservices are undefined (e.g. if no postalservices exist for particular package height)
        if(isset($postalService)) {
            if($insuranceType !== 'Unversichert') {
                $insuranceCost = $postalService['_matchingData']['Insurances']['price'];
                $ev = ((-($postalService['price'] + $insuranceCost)) + $packageValue);
            }
            else {
                $ev = ((-$postalService['price']) + (1 - $p) * (-$packageValue) + ($p * $packageValue));
            }
            //TODO you could also send tracked but not insured e.g. with Einwurf Einschreiben
            //->this would make a special cell case
            //logic: !== 'Unversichert' BUT not outer join of postal_services_insurances table AND first of where price ASC
            return $ev;
        }
    }

    /**
     * @return float|null probability of package loss
     */
    public function setP($postalService, $insuranceType) {
        $p = 0;
        //national services
        if($postalService['shipping_range'] === 'national' && $insuranceType === 'Unversichert')
            $p = 0.98;

        //TODO last case: you could also send tracked but not insured e.g. with Einwurf Einschreiben which would still have a special p of 1%

        //international services
        if($postalService['shipping_range'] === 'international' && $postalService['tracked'])
            $p = 0.95;
        if($postalService['shipping_range'] === 'international' && !$postalService['tracked'])
            $p = 0.90;

        return $p;
    }
}