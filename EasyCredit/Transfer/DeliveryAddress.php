<?php


namespace EasyCredit\Transfer;

/**
 * Class DeliveryAddress
 *
 * @package EasyCredit\Transfer
 */
class DeliveryAddress extends BillingAddress
{

    /**
     * @var boolean
     * @apiName packstation
     */
    protected $packstation;

    /**
     * @return boolean
     */
    public function getPackstation()
    {
        return $this->packstation;
    }

    /**
     * @param boolean $packstation
     */
    public function setPackstation($packstation)
    {
        $this->packstation = $packstation;
    }
}
