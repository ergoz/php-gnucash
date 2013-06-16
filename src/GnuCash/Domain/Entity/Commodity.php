<?php

namespace GnuCash\Domain\Entity;

/**
 * Class Commodity
 * @package GnuCash\Domain\Entity
 */
class Commodity extends AbstractGuidEntity
{
    /**
     * @var string
     */
    protected $namespace;

    /**
     * @var string
     */
    protected $mnemonic;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $cusip;

    /**
     * @var int
     */
    protected $fraction;

    /**
     * @param string $namespace
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;
    }

    /**
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * @param string $mnemonic
     */
    public function setMnemonic($mnemonic)
    {
        $this->mnemonic = $mnemonic;
    }

    /**
     * @return string
     */
    public function getMnemonic()
    {
        return $this->mnemonic;
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
     * @param string $cusip
     */
    public function setCusip($cusip)
    {
        $this->cusip = $cusip;
    }

    /**
     * @return string
     */
    public function getCusip()
    {
        return $this->cusip;
    }

    /**
     * @param int $fraction
     */
    public function setFraction($fraction)
    {
        $this->fraction = $fraction;
    }

    /**
     * @return int
     */
    public function getFraction()
    {
        return $this->fraction;
    }
}
