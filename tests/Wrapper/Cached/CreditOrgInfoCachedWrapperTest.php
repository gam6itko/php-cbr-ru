<?php

namespace Gam6itko\Cbrf\Tests\Wrapper\Cached;

use Gam6itko\Cbrf\Wrapper\Cached\CreditOrgInfoCachedWrapper;
use PHPUnit\Framework\TestCase;
use Psr\Cache\CacheItemPoolInterface;
use Symfony\Component\Cache\Adapter\ArrayAdapter;

/**
 * @coversDefaultClass \Gam6itko\Cbrf\Wrapper\Cached\CreditOrgInfoCachedWrapper
 */
class CreditOrgInfoCachedWrapperTest extends TestCase
{
    private function getSvc(&$cache)
    {
        $cache = new ArrayAdapter();

        return new CreditOrgInfoCachedWrapper($cache);
    }

    /**
     * @dataProvider dataBicToIntCode
     *
     * @param string $bic
     * @param int    $expectedIntCode
     */
    public function testBicToIntCode(string $bic, int $expectedIntCode)
    {
        /** @var CacheItemPoolInterface $cache */
        $intCode = $this->getSvc($cache)->BicToIntCode($bic);
        self::assertEquals($expectedIntCode, $intCode);

        self::assertTrue($cache->hasItem('BicToIntCode_05829a552add2ccc2e0355195943e1f3'));
    }

    public function dataBicToIntCode()
    {
        return [
            ['044525225', 350000004],
            ['044525593', 450000036],
            ['044525388', 450000320],
        ];
    }

    /**
     * @covers ::Data101Form
     */
    public function testData101Form()
    {
        /** @var CacheItemPoolInterface $cache */
        $result = $this->getSvc($cache)->Data101Form(350000004, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);

        self::assertTrue($cache->hasItem('Data101Form_6f9e4d5ee34816f1e10999123682b7e0'));
    }
}
