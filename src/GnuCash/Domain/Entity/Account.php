<?php

namespace GnuCash\Domain\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Class Account
 * @package GnuCash\Domain\Entity
 */
class Account extends AbstractGuidEntity
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var Commodity
     */
    protected $commodity;

    /**
     * @var Account
     */
    protected $parent;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $hidden;

    /**
     * @var int
     */
    protected $placeholder;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $children;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $splits;

    /**
     *
     */
    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->splits = new ArrayCollection();
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param \GnuCash\Domain\Entity\Commodity $commodity
     */
    public function setCommodity($commodity)
    {
        $this->commodity = $commodity;
    }

    /**
     * @return \GnuCash\Domain\Entity\Commodity
     */
    public function getCommodity()
    {
        return $this->commodity;
    }

    /**
     * @param \GnuCash\Domain\Entity\Account $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return \GnuCash\Domain\Entity\Account
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

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
     * @param int $hidden
     */
    public function setHidden($hidden)
    {
        $this->hidden = $hidden;
    }

    /**
     * @return int
     */
    public function getHidden()
    {
        return $this->hidden;
    }

    /**
     * @param int $placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }

    /**
     * @return int
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $children
     * @return $this
     */
    public function setChildren(ArrayCollection $children)
    {
        $this->children = $children;
        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $splits
     * @return $this
     */
    public function setSplits($splits)
    {
        $this->splits = $splits;
        return $this;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getSplits()
    {
        return $this->splits;
    }
}
