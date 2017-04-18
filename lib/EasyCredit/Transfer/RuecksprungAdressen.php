<?php


namespace EasyCredit\Transfer;

/**
 * Class RuecksprungAdressen
 *
 * @package EasyCredit\Transfer
 */
class RuecksprungAdressen extends AbstractObject
{    

    /**
     * @var string
     * @apiName urlErfolg
     */
    protected $urlErfolg;

    /**
     * @var string
     * @apiName urlAbbruch
     */
    protected $urlAbbruch;
    
    /**
     * @var string
     * @apiName urlAblehnung
     */
    protected $urlAblehnung;


    /**
     * @return string
     */
    public function getUrlErfolg()
    {
        return $this->urlErfolg;
    }

    /**
     * @param string $urlErfolg
     */
    public function setUrlErfolg($urlErfolg)
    {
        $this->urlErfolg = $urlErfolg;
    }


    /**
     * @return string
     */
    public function getUrlAbbruch()
    {
        return $this->urlAbbruch;
    }
    
    /**
     * @param string $urlAbbruch
     */
    public function setUrlAbbruch($urlAbbruch)
    {
        $this->urlAbbruch = $urlAbbruch;
    }
    


    /**
     * @return string $urlAblehnung
     */
    public function getUrlAblehnung()
    {
        return $this->urlAblehnung;
    }
    
    /**
     * @param string $urlAblehnung
     */
    public function setUrlAblehnung($urlAblehnung)
    {
        $this->urlAblehnung = $urlAblehnung;
    }
}
