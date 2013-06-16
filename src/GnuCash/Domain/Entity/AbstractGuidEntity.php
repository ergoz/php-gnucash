<?php

namespace GnuCash\Domain\Entity;

/**
 * Class AbstractGuidEntity
 * @package GnuCash\Domain\Entity
 */
abstract class AbstractGuidEntity extends AbstractEntity
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
