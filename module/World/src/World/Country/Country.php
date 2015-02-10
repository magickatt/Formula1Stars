<?php

namespace World\Country;

class Country
{
    /** @var string */
    private $name;

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
}
