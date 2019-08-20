<?php
namespace Gam6itko\CbrRu\Enum;

final class FormType
{
    const F101 = 101;
    const F102 = 102;
    const F123 = 123;
    const F134 = 134;
    const F135 = 135;

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