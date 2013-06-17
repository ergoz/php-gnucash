<?php

namespace GnuCash\Domain\Entity;

/**
 * Class Split
 * @package GnuCash\Domain\Entity
 */
class Split extends AbstractGuidEntity
{
    /**
     * @var Account
     */
    protected $account;

    protected $memo;

    protected $valueNum;

    protected $valueDenom;

    protected $quantityNum;

    protected $quantityDenom;

    /**
     * @return float
     */
    public function getValue()
    {
        return $this->valueNum / $this->valueDenom;
    }
}
