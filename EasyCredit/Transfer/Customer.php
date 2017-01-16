<?php

namespace EasyCredit\Transfer;

/**
 * Class AbstractTransferObject
 *
 * @package EasyCredit\Transfer
 */
class Customer extends AbstractObject
{
    /**
     * @var PersonData
     * @transferClass EasyCredit\Transfer\PersonData
     */
    protected $personData;

    /**
     * @var EmploymentData
     * @transferClass EasyCredit\Transfer\EmploymentData
     */
    protected $employmentData;

    /**
     * @var Contact
     * @transferClass EasyCredit\Transfer\Contact
     */
    protected $contact;

    /**
     * Customer constructor.
     * @param array $data
     */
    public function __construct(array $data = array())
    {
        $this->employmentData = new EmploymentData();
        $this->contact = new Contact();
        $this->personData = new PersonData();

        parent::__construct($data);
    }

    /**
     * Returns the PersonData
     *
     * @return PersonData
     */
    public function getPersonData()
    {
        return $this->personData;
    }

    /**
     * Sets the PersonData
     *
     * @param PersonData $personData
     */
    public function setPersonData(PersonData $personData)
    {
        $this->personData = $personData;
    }

    /**
     * @return EmploymentData
     */
    public function getEmploymentData()
    {
        return $this->employmentData;
    }

    /**
     * @param EmploymentData $employmentData
     */
    public function setEmploymentData($employmentData)
    {
        $this->employmentData = $employmentData;
    }

    /**
     * @return Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param Contact $contact
     */
    public function setContact($contact)
    {
        $this->contact = $contact;
    }
}
