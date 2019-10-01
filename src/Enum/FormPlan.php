<?php

namespace Gam6itko\Cbrf\Enum;

/**
 * Глава Плана счетов бухгалтерского учета вкредитных организациях.
 *
 * @see     https://www.cbr.ru/credit/f101.pdf
 */
final class FormPlan
{
    /** @var string Балансовые счета */
    const BALANCE = 'А';

    /** @var string Счета доверительного управления */
    const TRUST = 'Б';

    /** @var string Внебалансовые счета */
    const OUT_BALANCE = 'В';

    /** @var string Срочные операции */
    const URGENT = 'Г';

    /** @var string счета Депо */
    const DEPO = 'Д';
}
