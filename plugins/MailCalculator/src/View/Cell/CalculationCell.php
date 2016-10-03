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
        $evUninsured = $this->calculateEv($packageValue, $insuredOption);
        $evInsured = $this->calculateEv($packageValue, $uninsuredOption);
        $this->set(compact('evUninsured', 'evInsured'));
    }

    /**
     * @param $packageValue article price
     * @param $postalService fetched service
     * @return mathematical ev of shipping option in relation to the postal service
     */
    public function calculateEv($packageValue, $postalService) {
//        $p = $this->setP();
//        debug($postalService['price']);
        //Deutsche Post's official possibility in percent of shipping lose
        if(isset($postalService)) {
            $p = 0.95;

            if($postalService['tracked']) {
                $ev = ((-$postalService['price']) + $packageValue);
            }
            else {
                $ev = ((-$postalService['price']) + (1 - $p) * (-$packageValue) + ($p * $packageValue));
            }
        }
        else {
            $ev = 'Es gibt leider keinen Postservice zu Ihrer Eingabe';
        }

        return $ev;
    }

    public function setP($postalService) {

    }
}
