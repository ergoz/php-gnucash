<?php

namespace GnuCash\Domain\Entity;

/**
 * Class GuidEntity
 * @package GnuCash\Domain\Entity
 */
abstract class GuidEntity
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
