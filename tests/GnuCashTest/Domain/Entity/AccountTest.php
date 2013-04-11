<?php

namespace GnuCashTest\Domain\Entity;

use GnuCash\Domain\Entity\Account;
use GnuCash\Domain\Entity\Commodity;

/**
 * Class AccountTest
 */
class AccountTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test the get() and set() methods
     */
    public function testGettersAndSetters()
    {
        $commodity = new Commodity();
        $commodity->setName('US Dollars');

        $parent = new Account();
        $parent->setName('Momma Monies');

        $account = new Account();
        $account->setName('Monies');
        $account->setType('INCOME');
        $account->setCode('8675309');
        $account->setDescription('Money, Money, Money, Moooneey');
        $account->setPlaceHolder(1);
        $account->setHidden(0);
        $account->setCommodity($commodity);
        $account->setParent($parent);

        $this->assertEquals('Monies', $account->getName());
        $this->assertEquals('INCOME', $account->getType());
        $this->assertEquals('8675309', $account->getCode());
        $this->assertEquals('Money, Money, Money, Moooneey', $account->getDescription());
        $this->assertEquals(1, $account->getPlaceholder());
        $this->assertEquals(0, $account->getHidden());
        $this->assertEquals($commodity, $account->getCommodity());
        $this->assertEquals($parent, $account->getParent());
    }
}
