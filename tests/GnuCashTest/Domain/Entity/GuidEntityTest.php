<?php
namespace GnuCashTest\Domain\Entity;

/**
 * Class GuidEntityTest
 * @package GnuCashTest\Domain\Entity
 */
class GuidEntityTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test the getId() method of the abstract GuidEntity class.
     */
    public function testGetter()
    {
        $guid = new TestGuidEntity();

        $this->assertEquals(1492, $guid->getId());
    }
}
