<?php


namespace EasyCredit\Transfer;

/**
 * Class DecisionResponse
 *
 * @package EasyCredit\Transfer
 */
class DecisionInfoResponse extends BaseResponse
{

    /**
     * @var string
     * @apiName entscheidungsergebnis
     */
    protected $result;

    /**
     * @var array
     * @apiName entscheidung
     */
    protected $entscheidung;
    
    /**
     * @return string
     */
    public function getResult()
    {
        $arr = $this->getEntscheidung();
        return isset($arr['entscheidungsergebnis']) ? $arr['entscheidungsergebnis'] : false;
    }

    /**
     * @return array
     */
    public function getEntscheidung()
    {
        return $this->entscheidung;
    }

    /**
     * @param array $entscheidung
     */
    public function setEntscheidung($entscheidung)
    {
        $this->entscheidung = $entscheidung;
    }
}
