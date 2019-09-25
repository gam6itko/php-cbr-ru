<?php

namespace Gam6itko\Cbrf\Wrapper;

class RegionInfoWrapper extends AbstractWrapper
{
    protected function getWsdl()
    {
        return 'https://www.cbr.ru/RegionWebServ/regional.asmx?WSDL';
    }

    /**
     * Добавление кода индикатора в список.
     *
     * @param int $indicatorCode
     *
     * @return array|mixed|\stdClass
     */
    public function addIndicators(int $indicatorCode)
    {
        return $this->doRequest(__FUNCTION__, ['Indicator_code' => $indicatorCode]);
    }

    /**
     * Добавление кодов региона в список регионов.
     *
     * @param int $regionCode
     *
     * @return array|mixed|\stdClass
     */
    public function addRegion(int $regionCode)
    {
        return $this->doRequest(__FUNCTION__, ['Region_code' => $regionCode]);
    }

    /** Удаление всех кодов индикаторов из списока */
    public function clearIndicatorsList()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** Удаление всех кодов регионов из списока */
    public function clearRegionList()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** Завершение работы */
    public function close()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** Получение данных в формате XML */
    public function execASXMLDocument()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** Данные об ошибках */
    public function getError()
    {
        return $this->doRequest('GET_Error');
    }

    /** Получение данных  (как DataSet) */
    public function getRawRegionData()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** Получение кодов индикаторов по названию */
    public function indicatorCodeByName()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** Получение списка индикаторов для таблиц */
    public function indicatorsList()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** Открытие базы данных */
    public function openDataBase()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** получение кодов регионов по названию региона */
    public function regionCodeByName()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** Получение списка регионов */
    public function regionsList()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** Размерность индикатора */
    public function retIndicatorDim()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** Установка диапазона дат */
    public function setDatesRange()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** Получение списка таблиц индикаторов */
    public function tablesList()
    {
        return $this->doRequest(__FUNCTION__);
    }

    /** Переключение на англ. язык */
    public function swToEnglish()
    {
        return $this->doRequest(__FUNCTION__);
    }
}
