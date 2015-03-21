<?php
/**
 * Sample Address Entity
 *
 * Filename: AddressEntity.php
 * Created for: zf2fmyexamples.
 * Engineer: Daryl Wood <daryl@datashuttle.net>
 */

class AddressEntity implements AddressInterface
{
    protected $address1;
    protected $address2;
    protected $city;
    protected $stateProv;
    protected $mailCode;
    
    public function __construct(array $params = null){
        $this->address1 = $params['address1'];
        $this->address2 = $params['address2'];
        $this->city = $params['city'];
        $this->stateProv = $params['stateProv'];
        $this->mailCode = $params['mailCode'];
    }

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param mixed $address1
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param mixed $address2
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * @param mixed $stateProv
     * @return $this
     */
    public function setStateProv($stateProv)
    {
        $this->stateProv = $stateProv;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMailCode()
    {
        return $this->mailCode;
    }

    /**
     * @param mixed $mailCode
     * @return $this
     */
    public function setMailCode($mailCode)
    {
        $this->mailCode = $mailCode;
        return $this;
    }
}