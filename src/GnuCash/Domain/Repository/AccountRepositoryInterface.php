<?php

namespace Gnucash\Domain\Repository;

/**
 * Interface AccountRepositoryInterface
 * @package Gnucash\Domain\Repository
 */
interface AccountRepositoryInterface
{
    /**
     * Gets the balance of the specified account.
     *
     * @param string $guid
     * @return float
     */
    public function getAccountBalance($guid);
}
