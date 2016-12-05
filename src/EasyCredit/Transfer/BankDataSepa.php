<?php


namespace EasyCredit\Transfer;

/**
 * Class BankDataSepa
 *
 * @package EasyCredit\Transfer
 */
class BankDataSepa extends AbstractObject
{

    /**
     * @var string
     * @apiName iban
     */
    protected $iban;

    /**
     * @var string
     * @apiName bic
     */
    protected $bic;

    /**
     * @return string
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param string $iban
     */
    public function setIban($iban)
    {
        $this->iban = str_replace(' ', '', $iban);
    }

    /**
     * @return string
     */
    public function getBic()
    {
        return $this->bic;
    }

    /**
     * @param string $bic
     */
    public function setBic($bic)
    {
        $this->bic = $bic;
    }
}
