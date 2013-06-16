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
     * Gets the balance of all cash accounts.
     *
     * @todo This is tied to the developers accounts...
     * @return float
     */
    public function getCashAccountsBalance()
    {
        $repo = $this->entityManager->getRepository($this->entityType);
        $query = $repo->createNativeNamedQuery('get-visible-account-balance');
        $balance = $query->execute(['226efaedec0f3c3e280b46fb2633708a']);

        return $balance[0]['balance'];
    }

    /**
     * Gets the balance of all short term debts.
     *
     * @todo This is tied to the developers accounts...
     * @return float
     */
    public function getShortTermDebtBalance()
    {
        $repo = $this->entityManager->getRepository($this->entityType);
        $query = $repo->createNativeNamedQuery('get-visible-account-balance');
        $balance = $query->execute(['d955d071f5b0096d25de2562ef758dbd']);

        return $balance[0]['balance'];
    }

    /**
     * Gets the balance of all long term debts.
     *
     * @todo This is tied to the developers accounts...
     * @return float
     */
    public function getLongTermDebtBalance()
    {
        $repo = $this->entityManager->getRepository($this->entityType);
        $query = $repo->createNativeNamedQuery('get-visible-account-balance');
        $balance = $query->execute(['2ddc0f2ca7f65595e256271f25a0e372']);

        return $balance[0]['balance'];
    }
}
