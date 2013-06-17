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

    /**
     * @var Transaction
     */
    protected $transaction;

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

    /**
     * @param \GnuCash\Domain\Entity\Transaction $transaction
     */
    public function setTransaction($transaction)
    {
        $this->transaction = $transaction;
    }

    /**
     * @return \GnuCash\Domain\Entity\Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
