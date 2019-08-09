<?php
namespace Gam6itko\CbrRu\Wrapper;

/**
 * Class CreditOrgInfoService
 * @package Gam6itko\CbrRu\Service
 * @method int BicToIntCode(string $bicCode) Bic код во внутренний код кред.орг.
 * @method int BicToRegNumber(string $bicCode) Bic код в регистрационный номер кред.орг.
 * @method mixed CreditInfoByIntCode(float $internalCode) Информация о кредитной орг. по вн.коду (как DataSet) ver- 11.01.2007
 * @method mixed CreditInfoByIntCodeXML(float $internalCode) Информация о кредитной орг. по вн.коду (как XMLDocument)
 * @method mixed CreditInfoByIntCodeEx(float[] $internalCodes) Информация о кредитной орг. по вн.коду (как DataSet) ver- 03.03.2015
 * @method mixed CreditInfoByIntCodeExXML(float[] $internalCodes) Информация о кредитной орг. по вн.коду (как XML Document) ver- 26.02.2015
 * @method mixed Data101Form(int $credorgNumber, int $indId, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 101, без оборотов (как DataSet)
 * @method mixed Data101FormXML(int $credorgNumber, int $indId, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 101, без оборотов (как XMLDocument)
 * @method mixed Data101FormEx(int[] $credorgNumbers, int $indId, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 101, без оборотов (как DataSet) по нескольким КО ver 07.03.2017
 * @method mixed Data101FormExXML(int[] $credorgNumbers, int $indId, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 101 (как XMLDocument) по нескольким КО
 * @method mixed Data101Full(int $credorgNumber, int $indCode, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 101, полностью (Устарел, используйте v2) (как DataSet)
 * @method mixed Data101FullXML(int $credorgNumber, int $indCode, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 101, полностью (как XMLDocument)
 * @method mixed Data101FullEx(int[] $credorgNumbers, int $indCode, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 101, полностью (Внимание, метод устарел, используйте v2) (как DataSet) ver 17.03.2015
 * @method mixed Data101FullExXML(int[] $credorgNumbers, int $indCode, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 101, полностью (Внимание, метод устарел, используйте v2) (как XMLDocument) по нескольким КО. ver 17.03.2015
 * @method mixed Data101FullExV2(int[] $credorgNumbers, int $indCode, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 101, полностью (как DataSet) ver 07.03.2017
 * @method mixed Data101FullExV2XML(int[] $credorgNumbers, int $indCode, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 101, полностью (как XML) ver 07.03.2017
 * @method mixed Data101FullV2(int $credorgNumber, int $indCode, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 101, полностью (как DataSet) mod 07.03.2017
 * @method mixed Data101FullV2XML(int $credorgNumber, int $indCode, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 101, полностью (как XML) mod 07.03.2017
 * @method mixed Data102Form(int $credorgNumber, int $symbCode, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 102 (как DataSet)
 * @method mixed Data102FormXML(int $credorgNumber, int $symbCode, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 102, кратко (как XMLDocument)
 * @method mixed Data102FormEx(int[] $credorgNumber, int $symbCode, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 102 (как DataSet) по нескольким КО. ver 24.06.2014
 * @method mixed Data102FormExXML(int[] $credorgNumber, int $symbCode, \DateTime $dateFrom = null, \DateTime $dateTo = null) Данные КО. формы 102, кратко (как XMLDocument) по нескольким КО.
 * @method mixed Data123FormFull(int $credorgNumber, \DateTime $onDate = null) Данные по форме 123 (как DataSet)
 * @method mixed Data123FormFullXML(int $credorgNumber, \DateTime $onDate = null) Данные по форме 123 (как XML)
 * @method mixed Data134FormFull(int $credorgNumber, \DateTime $onDate = null) Данные по форме 134 - устаревшие, данные до 2015 г. (как DataSet)
 * @method mixed Data134FormFullXML(int $credorgNumber, \DateTime $onDate = null) Данные по форме 134 (как XML)
 * @method mixed Data135FormFull(int $credorgNumber, \DateTime $onDate = null) Данные по форме 135 (как DataSet) ver 05.06.2014
 * @method mixed Data135FormFullXML(int $credorgNumber, \DateTime $onDate = null) Данные по форме 135 (как XML)
 * @method mixed EnumBIC() Данные по BIC кодам КО (как DataSet), без филиалов, ver: 17.03.2015
 * @method mixed EnumBIC_XML() Данные по BIC кодам КО (как XMLDocument), без филиалов, ver: 04.07.2007
 * @method mixed Form101IndicatorsEnum() Справочник индикаторов для формы 101 (как DataSet)
 * @method mixed Form101IndicatorsEnumXML() Справочник индикаторов для формы 101 (как XMLDocument)
 * @method mixed Form102IndicatorsEnum() Справочник символов для формы 102 (как DataSet)
 * @method mixed Form102IndicatorsEnumXML() Справочник символов для формы 102 (как XMLDocument)
 * @method mixed GetDatesForF101(int $credPrgNumber) Список дат для формы 101
 * @method mixed GetDatesForF102(int $credPrgNumber) Список дат для формы 102
 * @method mixed GetDatesForF123(int $credPrgNumber) Список дат для формы 123
 * @method mixed GetDatesForF134(int $credPrgNumber) Список дат для формы 134
 * @method mixed GetDatesForF135(int $credPrgNumber) Список дат для формы 135
 * @method mixed LastUpdate() Получение даты последнего обновления базы по КО
 * @method mixed RegionsEnum() Справочник регионов (как DataSet)
 * @method mixed RegionsEnumXML() Справочник регионов (как XMLDocument), ver- 18.01.2007
 * @method mixed GetOfficesByRegion(int $regCode) Информация по филиальной сети кредитной орг. по региону (коду) (как DataSet), ver- 18.01.2007
 * @method mixed GetOfficesByRegionXML(int $regCode) Информация по филиальной сети кредитной орг. по региону (коду) (как XML), ver- 18.01.2007
 * @method mixed SearchByRegionCode(int $regCode) Поиск кредитных орг. по региону(коду) (как DataSet)
 * @method mixed SearchByRegionCodeXML(int $regCode) Поиск кредитных орг. по региону(коду) (как XML)
 * @method mixed SearchByName(string $str) Поиск кредитных орг. по названию (как DataSet)
 * @method mixed SearchByNameXML(string $str) Поиск кредитных орг. по названию (как XML)
 */
class CreditOrgInfoWrapper extends AbstractWrapper
{
    protected function getWsdl()
    {
        return 'https://www.cbr.ru/CreditInfoWebServ/CreditOrgInfo.asmx?WSDL';
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
            $dateFrom = new \DateTime('last week');
            $dateTo = new \DateTime();
        }

        $request = [
            'DateFrom' => $dateFrom->format(\DateTime::ATOM),
            'DateTo'   => $dateTo->format(\DateTime::ATOM),
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
            $onDate = new \DateTime();
        }

        return [
            'CredorgNumber' => $credorgNumber,
            'OnDate'        => $onDate->format(\DateTime::ATOM),
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
     * Получение максимальной даты отчетов по формам, ver: 22.04.2015
     * @param int $code
     * @return array|mixed|\stdClass
     */
    public function GetFormsMaxDate(int $code)
    {
        return $this->doRequest(__FUNCTION__, ['code' => $code]);
    }

    /**
     * Информация по филиальной сети кредитной орг. по вн.коду (как DataSet), ver- 18.01.2007
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
     * @param \DateTime|null $dateFrom
     * @param \DateTime|null $dateTo
     * @return array|mixed|\stdClass
     * @throws \Exception
     */
    public function Olap134Form(string $code, int $credorgNumber, \DateTime $dateFrom = null, \DateTime $dateTo = null)
    {
        if (!$dateFrom && !$dateTo) {
            $dateFrom = new \DateTime('last week');
            $dateTo = new \DateTime();
        }

        return $this->doRequest(__FUNCTION__, [
            'Code'          => $code,
            'CredorgNumber' => $credorgNumber,
            'FromDate'      => $dateFrom->format(\DateTime::ATOM),
            'ToDate'        => $dateTo->format(\DateTime::ATOM),
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
}