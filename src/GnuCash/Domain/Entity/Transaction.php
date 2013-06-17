<?php

namespace GnuCash\Domain\Entity;

/**
 * Class Transaction
 * @package GnuCash\Domain\Entity
 */
class Transaction extends AbstractGuidEntity
{
    /**
     * @var string
     */
    protected $description;

    /**
     * @var \DateTime
     */
    protected $posted;

    /**
     * @var \DateTime
     */
    protected $entered;

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param \DateTime $entered
     */
    public function setEntered($entered)
    {
        $this->entered = $entered;
    }

    /**
     * @return \DateTime
     */
    public function getEntered()
    {
        return $this->entered;
    }

    /**
     * @param \DateTime $posted
     */
    public function setPosted($posted)
    {
        $this->posted = $posted;
    }

    /**
     * @return \DateTime
     */
    public function getPosted()
    {
        return $this->posted;
    }
}
