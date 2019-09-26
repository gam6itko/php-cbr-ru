<?php

namespace Gam6itko\Cbrf\Enum;

final class CreditOrgStatus
{
    private const MAPPING = [
        self::INT_NORM               => self::STR_NORM,
        self::INT_ELIMINATED         => self::STR_ELIMINATED,
        self::INT_LICENSE_ELIMINATED => self::STR_LICENSE_ELIMINATED,
        self::INT_LICENSE_REVOKED    => self::STR_LICENSE_REVOKED,
    ];

    const STR_NORM = 'норм.';
    const STR_ELIMINATED = 'ликвидирована';
    const STR_LICENSE_ELIMINATED = 'лицензия аннулирована';
    const STR_LICENSE_REVOKED = 'лицензия отозвана';

    const INT_NORM = 0;
    const INT_ELIMINATED = 1;
    const INT_LICENSE_ELIMINATED = 2;
    const INT_LICENSE_REVOKED = 3;

    public static function intToStr(int $intStatus): string
    {
        if (!isset(self::MAPPING[$intStatus])) {
            throw new \LogicException("Unknown int status {$intStatus}");
        }

        return self::MAPPING[$intStatus];
    }

    public static function strToInt(string $strStatus): int
    {
        if (!in_array($strStatus, self::MAPPING)) {
            throw new \LogicException("Unknown str status {$strStatus}");
        }

        return array_flip(self::MAPPING)[$strStatus];
    }
}
