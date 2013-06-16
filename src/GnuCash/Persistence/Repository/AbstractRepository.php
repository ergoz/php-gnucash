<?php

namespace Gnucash\Persistence\Repository;

use DomainException;
use Doctrine\ORM\EntityManager;
use GnuCash\Domain\Entity\AbstractEntity;

/**
 * Class AbstractRepository
 * @package Gnucash\Persistence\Repository
 */
abstract class AbstractRepository
{
    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @var string
     */
    protected $entityType;

    /**
     * Constructor.
     *
     * @param EntityManager $entityManager
     * @throws DomainException
     */
    public function __construct(EntityManager $entityManager)
    {
        if (!class_exists($this->entityType)) {
            throw new DomainException('Protected property $entityType must specify fully qualified Entity class name');
        }

        $this->entityManager = $entityManager;
    }

    /**
     * Flush the entity manager.
     *
     * @param AbstractEntity $entity
     * @return AbstractRepository
     */
    public function flush(AbstractEntity $entity = null)
    {
        $this->entityManager->flush($entity);
        return $this;
    }

    /**
     * Get an entity by id.
     *
     * @param $id
     * @return AbstractEntity
     */
    public function getById($id)
    {
        return $this->entityManager->find($this->entityType, $id);
    }

    /**
     * Get all entities.
     *
     * @return array
     */
    public function getAll()
    {
        return $this->entityManager->getRepository($this->entityType)->findAll();
    }

    /**
     * Get all entities meeting the specified conditions.
     *
     * @param array $criteria
     * @param array $orderBy
     * @param integer|null $limit
     * @param integer|null $offset
     * @return array
     */
    public function getBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        return $this->entityManager->getRepository($this->entityType)->findBy($criteria, $orderBy, $limit, $offset);
    }

    /**
     * Persist an entity.
     *
     * @param AbstractEntity $entity
     * @return AbstractRepository
     */
    public function persist(AbstractEntity $entity)
    {
        $this->verifyType($entity);
        $this->entityManager->persist($entity);
        return $this;
    }

    /**
     * Verify that the entity type matches this repository.
     *
     * @param AbstractEntity $entity
     * @return AbstractRepository
     * @throws DomainException
     */
    protected function verifyType(AbstractEntity $entity)
    {
        if (!is_a($entity, $this->entityType)) {
            throw new DomainException(get_class($entity) . " is not an instance of {$this->entityType}");
        }
        return $this;
    }
}
