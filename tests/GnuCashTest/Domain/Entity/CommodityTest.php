<?php

namespace GnuCashTest\Domain\Entity;

use GnuCash\Domain\Entity\Commodity;

/**
 * Class CommodityTest
 */
class CommodityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test the get() and set() methods
     */
    public function testGettersAndSetters()
    {
        $commodity = new Commodity();
        $commodity->setNamespace('CURRENCY');
        $commodity->setMnemonic('USD');
        $commodity->setName('US Dollar');
        $commodity->setCusip(840);
        $commodity->setFraction(100);

        $this->assertEquals('CURRENCY', $commodity->getNamespace());
        $this->assertEquals('USD', $commodity->getMnemonic());
        $this->assertEquals('US Dollar', $commodity->getName());
        $this->assertEquals(840, $commodity->getCusip());
        $this->assertEquals(100, $commodity->getFraction());
    }
}
