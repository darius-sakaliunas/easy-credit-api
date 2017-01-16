<?php


namespace EasyCredit\Transfer;

/**
 * Class EmploymentData
 *
 * @package EasyCredit\Transfer
 */
class EmploymentData extends AbstractObject
{

    /**
     * @var string
     * @apiName beschaeftigung
     */
    protected $employmentStatus;

    /**
     * @var float
     * @apiName monatlichesNettoeinkommen
     */
    protected $monthlyIncome;

    /**
     * @return string
     */
    public function getEmploymentStatus()
    {
        return $this->employmentStatus;
    }

    /**
     * @param string $employmentStatus
     */
    public function setEmploymentStatus($employmentStatus)
    {
        $this->employmentStatus = $employmentStatus;
    }

    /**
     * @return float
     */
    public function getMonthlyIncome()
    {
        return $this->monthlyIncome;
    }

    /**
     * @param float $monthlyIncome
     */
    public function setMonthlyIncome($monthlyIncome)
    {
        $this->monthlyIncome = $monthlyIncome;
    }
}
