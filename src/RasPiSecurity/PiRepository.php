<?php

namespace RasPiSecurity;

class PiRepository
{
    /**
     * @var []
     */
    private $pis;

    /**
     * @param [] $pis
     */
    public function __construct(array $pis)
    {
        $this->pis = $pis;
    }

    /**
     * @return []
     */
    public function getPis()
    {
        $pis = [];
        foreach ($this->pis as $pi) {
            $pis[$pi['name']] = $pi['host'];
        }

        return $pis;
    }
}
