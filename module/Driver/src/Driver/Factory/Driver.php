<?php

namespace Driver\Factory;

use Driver\Model\Driver as DriverModel;

class Driver
{
    public function create(\Driver\Entity\Driver $entity)
    {
        return new DriverModel();
    }
}
