<?php

namespace GnuCash\Persistence\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;
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

    /**
     * @param string $guid
     * @param int $offset
     * @param int $perPage
     * @return Paginator
     */
    public function getTransactions($guid, $offset = 0, $perPage = 20)
    {
        $builder = $this->entityManager->createQueryBuilder()
            ->select('s, t')
            ->from('GnuCash\\Domain\\Entity\\Split', 's')
            ->join('s.transaction', 't')
            ->where('s.account = :guid')
            ->orderBy('t.posted', 'DESC')
            ->setMaxResults($perPage)
            ->setFirstResult($offset)
            ->setParameter('guid', $guid);

        $paginator = new Paginator($builder, true);

        return $paginator;
    }
}
