<?php

namespace Gam6itko\Cbrf\Enum;

final class FormType
{
    const F101 = '101';
    const F102 = '102';
    const F123 = '123';
    const F134 = '134';
    const F135 = '135';

    /** @var int 0409802 */
    const F802 = '802';
    /** @var int 0409803 */
    const F803 = '803';
    /** @var int 0409805 */
    const F805 = '805';

    /** @var string Консолидированная финансовая отчетность */
    const KFO = 'kfo';
    /** @var string Финансовая отчетность */
    const NFO = 'nfo';

    public static function getNumbers()
    {
        return [
            self::F101,
            self::F102,
            self::F123,
            self::F134,
            self::F135,
        ];
    }
}
