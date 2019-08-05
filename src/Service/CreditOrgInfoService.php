<?php
namespace Gam6itko\DpdCarrier\WebService;

class CreditOrgInfoService extends AbstractService
{
    protected function getWsdl()
    {
        return 'https://www.cbr.ru/CreditInfoWebServ/CreditOrgInfo.asmx?WSDL';
    }

    /** Bic код во внутренний код кред.орг. */
    public function BicToIntCode()
    {
        throw new \Exception('Not realized');
    }

    /** Bic код в регистрационный номер кред.орг. */
    public function BicToRegNumber()
    {
        throw new \Exception('Not realized');
    }

    /** Информация о кредитной орг. по вн.коду (как DataSet) ver- 11.01.2007 */
    public function CreditInfoByIntCode()
    {
        throw new \Exception('Not realized');
    }

    /** Информация о кредитной орг. по вн.коду (как DataSet) ver- 03.03.2015 */
    public function CreditInfoByIntCodeEx()
    {
        throw new \Exception('Not realized');
    }

    /** Информация о кредитной орг. по вн.коду (как XML Document) ver- 26.02.2015 */
    public function CreditInfoByIntCodeExXML()
    {
        throw new \Exception('Not realized');
    }

    /** Информация о кредитной орг. по вн.коду (как XMLDocument) */
    public function CreditInfoByIntCodeXML()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 101, без оборотов (как DataSet) */
    public function Data101Form()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 101, без оборотов (как DataSet) по нескольким КО ver 07.03.2017 */
    public function Data101FormEx()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 101 (как XMLDocument) по нескольким КО */
    public function Data101FormExXML()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 101, без оборотов (как XMLDocument) */
    public function Data101FormXML()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 101,полностью (Устарел, используйте v2) (как DataSet) */
    public function Data101Full()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 101,полностью (Внимание, метод устарел, используйте v2) (как DataSet) ver 17.03.2015 */
    public function Data101FullEx()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 101,полностью (как DataSet) ver 07.03.2017 */
    public function Data101FullExV2()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 101,полностью (как XML) ver 07.03.2017 */
    public function Data101FullExV2XML()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 101,полностью  (Внимание, метод устарел, используйте v2) (как XMLDocument) по нескольким КО. ver 17.03.2015 */
    public function Data101FullExXML()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 101,полностью (как DataSet) mod 07.03.2017 */
    public function Data101FullV2()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 101,полностью (как XML) mod 07.03.2017 */
    public function Data101FullV2XML()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 101, полностью (как XMLDocument) */
    public function Data101FullXML()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 102 (как DataSet) */
    public function Data102Form()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 102 (как DataSet) по нескольким КО. ver 24.06.2014 */
    public function Data102FormEx()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 102, кратко (как XMLDocument) по нескольким КО. */
    public function Data102FormExXML()
    {
        throw new \Exception('Not realized');
    }

    /** Данные КО. формы 102, кратко (как XMLDocument) */
    public function Data102FormXML()
    {
        throw new \Exception('Not realized');
    }

    /** Данные по форме 123 (как DataSet) */
    public function Data123FormFull()
    {
        throw new \Exception('Not realized');
    }

    /** Данные по форме 123 (как XML) */
    public function Data123FormFullXML()
    {
        throw new \Exception('Not realized');
    }

    /** Данные по форме 134 - устаревшие, данные до 2015 г. (как DataSet) */
    public function Data134FormFull()
    {
        throw new \Exception('Not realized');
    }

    /** Данные по форме 134 (как XML) */
    public function Data134FormFullXML()
    {
        throw new \Exception('Not realized');
    }

    /** Данные по форме 135 (как DataSet) ver 05.06.2014 */
    public function Data135FormFull()
    {
        throw new \Exception('Not realized');
    }

    /** Данные по форме 135 (как XML) */
    public function Data135FormFullXML()
    {
        throw new \Exception('Not realized');
    }

    /** Данные по BIC кодам КО (как DataSet), без филиалов, ver: 17.03.2015 */
    public function EnumBIC()
    {
        throw new \Exception('Not realized');
    }

    /** Данные по BIC кодам КО (как XMLDocument), без филиалов,  ver: 04.07.2007 */
    public function EnumBIC_XML()
    {
        throw new \Exception('Not realized');
    }

    /** Справочник индикаторов для формы 101 (как DataSet) */
    public function Form101IndicatorsEnum()
    {
        throw new \Exception('Not realized');
    }

    /** Справочник индикаторов для формы 101 (как XMLDocument) */
    public function Form101IndicatorsEnumXML()
    {
        throw new \Exception('Not realized');
    }

    /** Справочник символов для формы 102 (как DataSet) */
    public function Form102IndicatorsEnum()
    {
        throw new \Exception('Not realized');
    }

    /** Справочник символов для формы 102 (как XMLDocument) */
    public function Form102IndicatorsEnumXML()
    {
        throw new \Exception('Not realized');
    }

    /** Список дат для формы 101 */
    public function GetDatesForF101()
    {
        throw new \Exception('Not realized');
    }

    /** Список дат для формы 102 */
    public function GetDatesForF102()
    {
        throw new \Exception('Not realized');
    }

    /** Список дат для формы 123 */
    public function GetDatesForF123()
    {
        throw new \Exception('Not realized');
    }

    /** Список дат для формы 134 */
    public function GetDatesForF134()
    {
        throw new \Exception('Not realized');
    }

    /** Список дат для формы 135 */
    public function GetDatesForF135()
    {
        throw new \Exception('Not realized');
    }

    /** Получение максимальной даты отчетов по формам, ver: 22.04.2015 */
    public function GetFormsMaxDate()
    {
        throw new \Exception('Not realized');
    }

    /** Информация по филиальной сети кредитной орг. по вн.коду (как DataSet), ver- 18.01.2007 */
    public function GetOffices()
    {
        throw new \Exception('Not realized');
    }

    /** Информация по филиальной сети кредитной орг. по региону (коду) (как DataSet), ver- 18.01.2007 */
    public function GetOfficesByRegion()
    {
        throw new \Exception('Not realized');
    }

    /** Информация по филиальной сети кредитной орг. по региону (коду) (как XML), ver- 18.01.2007 */
    public function GetOfficesByRegionXML()
    {
        throw new \Exception('Not realized');
    }

    /** Информация по филиальной сети кредитной орг. по вн.коду (как XML) */
    public function GetOfficesXML()
    {
        throw new \Exception('Not realized');
    }

    /** внутренний код кред.орг. в регистрационный номер КО. */
    public function IntCodeToRegNum()
    {
        throw new \Exception('Not realized');
    }

    /** Получение даты последнего обновления базы по КО */
    public function LastUpdate()
    {
        throw new \Exception('Not realized');
    }

    /** Данные по форме 134, OLAP, (как DataSet) */
    public function Olap134Form()
    {
        throw new \Exception('Not realized');
    }

    /** Регистрационный номер во внутренний код КО. */
    public function RegNumToIntCode()
    {
        throw new \Exception('Not realized');
    }

    /** Справочник регионов (как DataSet) */
    public function RegionsEnum()
    {
        throw new \Exception('Not realized');
    }

    /** Справочник регионов (как XMLDocument), ver- 18.01.2007 */
    public function RegionsEnumXML()
    {
        throw new \Exception('Not realized');
    }

    /** Поиск кредитных орг. по названию (как DataSet) */
    public function SearchByName()
    {
        throw new \Exception('Not realized');
    }

    /** Поиск кредитных орг. по названию (как XML) */
    public function SearchByNameXML()
    {
        throw new \Exception('Not realized');
    }

    /** Поиск кредитных орг. по региону(коду) (как DataSet) */
    public function SearchByRegionCode()
    {
        throw new \Exception('Not realized');
    }

    /** Поиск кредитных орг. по региону(коду) (как XML) */
    public function SearchByRegionCodeXML()
    {
        throw new \Exception('Not realized');
    }


}