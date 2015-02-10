<?php

namespace World\Country;

use World\Country\Exception\LatitudeException;
use World\Country\Exception\LongitudeException;

class City
{
    /** @var string */
    private $name;

    /** @var float */
    private $longitude;

    /** @var float */
    private $latitude;

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = (string)$name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $validator = new \Zend\Validator\Between(array(
            'min' => -180,
            'max' => 180
        ));
        if (! $validator->isValid($longitude)) {
            throw new LongitudeException();
        }
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $validator = new \Zend\Validator\Between(array(
            'min' => -90,
            'max' => 90
        ));
        if (! $validator->isValid($latitude)) {
            throw new LatitudeException();
        }
        $this->latitude = $latitude;
    }
}
