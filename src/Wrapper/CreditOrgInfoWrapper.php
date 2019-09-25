<?php
namespace Gam6itko\Cbrf\Wrapper;

use Gam6itko\Cbrf\Enum\FormType;

/**
 * @see https://www.cbr.ru/CreditInfoWebServ/CreditOrgInfo.asmx
 *
 * @method int BicToIntCode(string $bicCode) Bic код во внутренний код кред.орг.
 * @method int BicToRegNumber(string $bicCode) Bic код в регистрационный номер кред.орг.
 * @method array CreditInfoByIntCode(float $internalCode) Информация о кредитной орг. по вн.коду (как DataSet)
 * @method array CreditInfoByIntCodeXML(float $internalCode) Информация о кредитной орг. по вн.коду (как XMLDocument)
 * @method array CreditInfoByIntCodeEx(float[] $internalCodes) Информация о кредитной орг. по вн.коду (как DataSet)
 * @method array CreditInfoByIntCodeExXML(float[] $internalCodes) Информация о кредитной орг. по вн.коду (как XML Document)
 * @method array Data101Form(int $credorgNumber, int $indId, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 101, без оборотов (как DataSet)
 * @method array Data101FormXML(int $credorgNumber, int $indId, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 101, без оборотов (как XMLDocument)
 * @method array Data101FormEx(int[] $credorgNumbers, int $indId, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 101, без оборотов (как DataSet) по нескольким КО.
 * @method array Data101FormExXML(int[] $credorgNumbers, int $indId, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 101 (как XMLDocument) по нескольким КО.
 * @method array Data101Full(int $credorgNumber, int $indCode, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 101, полностью (Устарел, используйте v2) (как DataSet)
 * @method array Data101FullXML(int $credorgNumber, int $indCode, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 101, полностью (как XMLDocument)
 * @method array Data101FullEx(int[] $credorgNumbers, int $indCode, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 101, полностью (Внимание, метод устарел, используйте v2) (как DataSet)
 * @method array Data101FullExXML(int[] $credorgNumbers, int $indCode, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 101, полностью (Внимание, метод устарел, используйте v2) (как XMLDocument) по нескольким КО
 * @method array Data101FullExV2(int[] $credorgNumbers, int $indCode, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 101, полностью (как DataSet)
 * @method array Data101FullExV2XML(int[] $credorgNumbers, int $indCode, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 101, полностью (как XML)
 * @method array Data101FullV2(int $credorgNumber, int $indCode, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 101, полностью (как DataSet)
 * @method array Data101FullV2XML(int $credorgNumber, int $indCode, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 101, полностью (как XML)
 * @method array Data102Form(int $credorgNumber, int $symbCode, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 102 (как DataSet)
 * @method array Data102FormXML(int $credorgNumber, int $symbCode, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 102, кратко (как XMLDocument)
 * @method array Data102FormEx(int[] $credorgNumber, int $symbCode, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 102 (как DataSet) по нескольким КО.
 * @method array Data102FormExXML(int[] $credorgNumber, int $symbCode, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null) Данные КО. формы 102, кратко (как XMLDocument) по нескольким КО.
 * @method array Data123FormFull(int $credorgNumber, \DateTimeInterface $onDate = null) Данные по форме 123 (как DataSet)
 * @method array Data123FormFullXML(int $credorgNumber, \DateTimeInterface $onDate = null) Данные по форме 123 (как XML)
 * @method array Data134FormFull(int $credorgNumber, \DateTimeInterface $onDate = null) Данные по форме 134 - устаревшие, данные до 2015 г. (как DataSet)
 * @method array Data134FormFullXML(int $credorgNumber, \DateTimeInterface $onDate = null) Данные по форме 134 (как XML)
 * @method array Data135FormFull(int $credorgNumber, \DateTimeInterface $onDate = null) Данные по форме 135 (как DataSet)
 * @method array Data135FormFullXML(int $credorgNumber, \DateTimeInterface $onDate = null) Данные по форме 135 (как XML)
 * @method array EnumBIC() Данные по BIC кодам КО (как DataSet), без филиалов
 * @method array EnumBIC_XML() Данные по BIC кодам КО (как XMLDocument), без филиалов
 * @method array Form101IndicatorsEnum() Справочник индикаторов для формы 101 (как DataSet)
 * @method array Form101IndicatorsEnumXML() Справочник индикаторов для формы 101 (как XMLDocument)
 * @method array Form102IndicatorsEnum() Справочник символов для формы 102 (как DataSet)
 * @method array Form102IndicatorsEnumXML() Справочник символов для формы 102 (как XMLDocument)
 * @method array GetDatesForF101(int $credPrgNumber) Список дат для формы 101
 * @method array GetDatesForF102(int $credPrgNumber) Список дат для формы 102
 * @method array GetDatesForF123(int $credPrgNumber) Список дат для формы 123
 * @method array GetDatesForF134(int $credPrgNumber) Список дат для формы 134
 * @method array GetDatesForF135(int $credPrgNumber) Список дат для формы 135
 * @method string LastUpdate() Получение даты последнего обновления базы по КО
 * @method array RegionsEnum() Справочник регионов (как DataSet)
 * @method array RegionsEnumXML() Справочник регионов (как XMLDocument)
 * @method array GetOfficesByRegion(int $regCode) Информация по филиальной сети кредитной орг. по региону (коду) (как DataSet)
 * @method array GetOfficesByRegionXML(int $regCode) Информация по филиальной сети кредитной орг. по региону (коду) (как XML)
 * @method array SearchByRegionCode(int $regCode) Поиск кредитных орг. по региону(коду) (как DataSet)
 * @method array SearchByRegionCodeXML(int $regCode) Поиск кредитных орг. по региону(коду) (как XML)
 * @method array SearchByName(string $str) Поиск кредитных орг. по названию (как DataSet)
 * @method array SearchByNameXML(string $str) Поиск кредитных орг. по названию (как XML)
 */
class CreditOrgInfoWrapper extends AbstractWrapper
{
    /**
     * @var bool Исправлять временную зону
     */
    protected $fixTimezone = true;

    /**
     * @param bool $fixTimezone
     */
    public function setFixTimezone(bool $fixTimezone): void
    {
        $this->fixTimezone = $fixTimezone;
    }

    protected function getWsdl()
    {
        return 'https://www.cbr.ru/CreditInfoWebServ/CreditOrgInfo.asmx?WSDL';
    }

    protected function getDefaultTimeZone(): \DateTimeZone
    {
        return new \DateTimeZone('Europe/Moscow');
    }

    //<editor-fold desc="argValidator">
    private function argBicTo(array $arguments)
    {
        return ['BicCode' => $arguments[0]];
    }

    private function argCibi(array $arguments, string $methodName)
    {
        if (strpos($methodName, 'CodeEx') !== false) {
            $internalCodes = $arguments[0];
            if (!is_array($internalCodes)) {
                $internalCodes = [$internalCodes];
            }
            return ['InternalCodes' => $internalCodes];
        }

        return ['InternalCode' => $arguments[0]];
    }

    private function argSearchRegion(array $arguments)
    {
        return ['RegCode' => $arguments[0]];
    }

    private function argSearchName(array $arguments)
    {
        return ['NamePart' => $arguments[0]];
    }

    private function argData101(array $arguments, string $methodName)
    {
        @list($credorgNumber, $indId, $dateFrom, $dateTo) = $arguments;

        if (!$dateFrom && !$dateTo) {
            $dateFrom = new \DateTime('first day of last month', $this->getDefaultTimeZone());
            $dateTo = new \DateTime('first day of this month', $this->getDefaultTimeZone());
        }

        $this->ensureTimezone($dateFrom);
        $this->ensureTimezone($dateTo);

        $request = [
            'DateFrom' => $dateFrom->format(\DateTimeInterface::ATOM),
            'DateTo'   => $dateTo->format(\DateTimeInterface::ATOM),
        ];

        $mappingInd = [
            'Data101Form' => 'IndID', // indicator Id
            'Data101Full' => 'IndCode',
            'Data102Form' => 'SymbCode',
        ];
        foreach ($mappingInd as $mn => $key) {
            if (strpos($methodName, $mn) === 0) {
                $request[$key] = $indId;
                break;
            }
        }

        if (is_array($credorgNumber)) {
            $request['CredorgNumbers'] = $credorgNumber;
        } else {
            $request['CredorgNumber'] = $credorgNumber;
        }

        return $request;
    }

    private function argData123(array $arguments, string $methodName)
    {
        @list($credorgNumber, $onDate) = $arguments;
        if (empty($onDate)) {
            $onDate = new \DateTime('firts day of month', $this->getDefaultTimeZone());
        }

        $this->ensureTimezone($onDate);

        return [
            'CredorgNumber' => $credorgNumber,
            'OnDate'        => $onDate->format(\DateTimeInterface::ATOM),
        ];
    }

    private function argDates(array $arguments)
    {
        return ['CredprgNumber' => $arguments[0]];
    }

    //</editor-fold>

    public function __call($name, $arguments)
    {
        $map = [
            'BicTo'              => 'argBicTo',
            'Data101Form'        => 'argData101',
            'Data101Full'        => 'argData101',
            'Data102Form'        => 'argData101',
            'Data123Form'        => 'argData123',
            'Data134Form'        => 'argData123',
            'Data135Form'        => 'argData123',
            'CreditInfoBy'       => 'argCibi',
            'GetOfficesByRegion' => 'argSearchRegion',
            'SearchByRegionCode' => 'argSearchRegion',
            'SearchByName'       => 'argSearchName',
            'GetDates'           => 'argDates'
        ];

        $request = [];
        foreach ($map as $start => $handler) {
            if (strpos(ucfirst($name), ucfirst($start)) === 0) {
                if (!method_exists($this, $handler)) {
                    throw new \LogicException('No handler. ' . $handler);
                }
                $request = call_user_func([$this, $handler], $arguments, $name);
                break;
            }
        }

        return $this->doRequest($name, $request);
    }

    /**
     * Получение максимальной даты отчетов по формам
     * @param int $code
     * @return array|mixed|\stdClass
     */
    public function GetFormsMaxDate(int $code)
    {
        if (!in_array($code, FormType::getNumbers())) {
            throw new \LogicException('Not supported form number');
        }
        return $this->doRequest(__FUNCTION__, ['code' => $code]);
    }

    /**
     * Информация по филиальной сети кредитной орг. по вн.коду (как DataSet)
     * @param int $intCode
     * @return array|mixed|\stdClass
     */
    public function GetOffices(int $intCode)
    {
        return $this->doRequest(__FUNCTION__, ['IntCode' => $intCode]);
    }

    /**
     * Информация по филиальной сети кредитной орг. по вн.коду (как XML)
     * @param float $intCode
     * @return array|mixed|\stdClass
     */
    public function GetOfficesXML(float $intCode)
    {
        return $this->doRequest(__FUNCTION__, ['IntCode' => $intCode]);
    }

    /**
     * внутренний код кред.орг. в регистрационный номер КО.
     * @param float $intNumber
     * @return array|mixed|\stdClass
     */
    public function IntCodeToRegNum(float $intNumber)
    {
        return $this->doRequest(__FUNCTION__, ['IntNumber' => $intNumber]);
    }

    /**
     * Данные по форме 134, OLAP, (как DataSet)
     * @param string $code
     * @param int $credorgNumber
     * @param \DateTimeInterface|null $dateFrom
     * @param \DateTimeInterface|null $dateTo
     * @return array|mixed|\stdClass
     * @throws \Exception
     */
    public function Olap134Form(string $code, int $credorgNumber, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null)
    {
        if (!$dateFrom && !$dateTo) {
            $dateFrom = new \DateTime('first day of last month', $this->getDefaultTimeZone());
            $dateTo = new \DateTime('first day of this month', $this->getDefaultTimeZone());
        }

        $this->ensureTimezone($dateFrom);
        $this->ensureTimezone($dateTo);

        return $this->doRequest(__FUNCTION__, [
            'Code'          => $code,
            'CredorgNumber' => $credorgNumber,
            'FromDate'      => $dateFrom->format(\DateTimeInterface::ATOM),
            'ToDate'        => $dateTo->format(\DateTimeInterface::ATOM),
        ]);
    }

    /**
     * Регистрационный номер во внутренний код КО.
     * @param float $regNumber
     * @return array|mixed|\stdClass
     */
    public function RegNumToIntCode(float $regNumber)
    {
        return $this->doRequest(__FUNCTION__, ['RegNumber' => $regNumber]);
    }

    private function ensureTimezone(\DateTimeInterface &$dt): void
    {
        if (!$this->fixTimezone) {
            return;
        }

        if ('+0300' === $dt->format('O')) {
            return;
        }

        $dt = new \DateTime($dt->format('Y-m-d\TH:i:s'), $this->getDefaultTimeZone());
    }
}
