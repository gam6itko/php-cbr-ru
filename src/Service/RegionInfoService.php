<?php
namespace Gam6itko\DpdCarrier\WebService;

class RegionInfoService extends AbstractService
{
    protected function getWsdl()
    {
        return 'https://www.cbr.ru/RegionWebServ/regional.asmx?WSDL';
    }

    /** Добавление кода индикатора в список */
    public function addIndicators()
    {
        throw new \Exception('not realized');
    }

    /** Добавление кодов региона в список регионов */
    public function addRegion()
    {
        throw new \Exception('not realized');
    }

    /** Удаление всех кодов индикаторов из списока */
    public function clearIndicatorsList()
    {
        throw new \Exception('not realized');
    }

    /** Удаление всех кодов регионов из списока */
    public function clearRegionList()
    {
        throw new \Exception('not realized');
    }

    /** Завершение работы */
    public function close()
    {
        throw new \Exception('not realized');
    }

    /** Получение данных в формате XML */
    public function execASXMLDocument()
    {
        throw new \Exception('not realized');
    }

    /** Данные об ошибках */
    public function getError()
    {
        throw new \Exception('not realized');
    }

    /** Получение данных  (как DataSet) */
    public function getRawRegionData()
    {
        throw new \Exception('not realized');
    }

    /** Получение кодов индикаторов по названию */
    public function indicatorCodeByName()
    {
        throw new \Exception('not realized');
    }

    /** Получение списка индикаторов для таблиц */
    public function indicatorsList()
    {
        throw new \Exception('not realized');
    }

    /** Открытие базы данных */
    public function openDataBase()
    {
        throw new \Exception('not realized');
    }

    /** получение кодов регионов по названию региона */
    public function regionCodeByName()
    {
        throw new \Exception('not realized');
    }

    /** Получение списка регионов */
    public function regionsList()
    {
        throw new \Exception('not realized');
    }

    /** Размерность индикатора */
    public function retIndicatorDim()
    {
        throw new \Exception('not realized');
    }

    /** Установка диапазона дат */
    public function setDatesRange()
    {
        throw new \Exception('not realized');
    }

    /** Получение списка таблиц индикаторов */
    public function tablesList()
    {
        throw new \Exception('not realized');
    }

    /** Переключение на англ. язык */
    public function swToEnglish()
    {
        throw new \Exception('not realized');
    }
}