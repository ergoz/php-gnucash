<?php

namespace GnuCash\Persistence\Repository;

use GnuCash\Domain\Repository\AccountRepositoryInterface;

/**
 * Class AccountRepository
 * @package Gnucash\Persistence\Repository
 */
class AccountRepository extends AbstractRepository implements AccountRepositoryInterface
{
    /**
     * @var string
     */
    protected $entityType = 'GnuCash\Domain\Entity\Account';

    /**
     * Gets an accounts balance.
     *
     * @param string $guid
     * @return float
     */
    public function getAccountBalance($guid)
    {
        $repo = $this->entityManager->getRepository($this->entityType);
        $query = $repo->createNativeNamedQuery('get-visible-account-balance');
        $balance = $query->execute([$guid]);

        return $balance[0]['balance'];
    }
}
