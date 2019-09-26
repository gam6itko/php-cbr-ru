<?php

namespace Gam6itko\Cbrf\Tests\Enum;

use Gam6itko\Cbrf\Enum\CreditOrgStatus;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Gam6itko\Cbrf\Enum\CreditOrgStatus
 */
class CreditOrgStatusTest extends TestCase
{
    /**
     * @covers ::strToInt
     * @dataProvider dataStrToInt
     *
     * @param string $strStatus
     * @param int    $exp
     */
    public function testStrToInt(string $strStatus, int $exp): void
    {
        self::assertEquals($exp, CreditOrgStatus::strToInt($strStatus));
    }

    public function dataStrToInt(): array
    {
        return [
            ['норм.', 0],
            ['ликвидирована', 1],
            ['лицензия аннулирована', 2],
            ['лицензия отозвана', 3],
        ];
    }

    /**
     * @covers ::intToStr
     * @dataProvider dataIntToStr
     *
     * @param int $intStatus
     * @param int $exp
     */
    public function testIntToStr(int $intStatus, string $exp): void
    {
        self::assertEquals($exp, CreditOrgStatus::intToStr($intStatus));
    }

    public function dataIntToStr(): array
    {
        return [
            [0, 'норм.'],
            [1, 'ликвидирована'],
            [2, 'лицензия аннулирована'],
            [3, 'лицензия отозвана'],
        ];
    }
}
