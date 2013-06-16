<?php

namespace Gnucash\Domain\Repository;

/**
 * Interface AccountRepositoryInterface
 * @package Gnucash\Domain\Repository
 */
interface AccountRepositoryInterface
{
    /**
     * Gets the balance of all cash accounts.
     *
     * @return float
     */
    public function getCashAccountsBalance();

    /**
     * Gets the balance of all short term debts.
     *
     * @return float
     */
    public function getShortTermDebtBalance();

    /**
     * Gets the balance of all long term debts.
     *
     * @return float
     */
    public function getLongTermDebtBalance();
}
