<?php

use Gam6itko\DpdCarrier\WebService\RegionInfoService;
use PHPUnit\Framework\TestCase;

class RegionInfoServiceTest extends TestCase
{


    public function testAddIndicators()
    {
        $svc = new RegionInfoService();
        $result = $svc->addIndicators();
        self::assertNotEmpty($result);
    }

    public function testAddRegion()
    {
        $svc = new RegionInfoService();
        $result = $svc->addRegion();
        self::assertNotEmpty($result);
    }

    public function testClearIndicatorsList()
    {
        $svc = new RegionInfoService();
        $result = $svc->clearIndicatorsList();
        self::assertNotEmpty($result);
    }

    public function testClearRegionList()
    {
        $svc = new RegionInfoService();
        $result = $svc->clearRegionList();
        self::assertNotEmpty($result);
    }

    public function testClose()
    {
        $svc = new RegionInfoService();
        $result = $svc->close();
        self::assertNotEmpty($result);
    }

    public function testExecASXMLDocument()
    {
        $svc = new RegionInfoService();
        $result = $svc->execASXMLDocument();
        self::assertNotEmpty($result);
    }

    public function testGET_Error()
    {
        $svc = new RegionInfoService();
        $result = $svc->getError();
        self::assertNotEmpty($result);
    }

    public function testGetRawRegionData()
    {
        $svc = new RegionInfoService();
        $result = $svc->getRawRegionData();
        self::assertNotEmpty($result);
    }

    public function testIndicatorCodeByName()
    {
        $svc = new RegionInfoService();
        $result = $svc->indicatorCodeByName();
        self::assertNotEmpty($result);
    }

    public function testIndicatorsList()
    {
        $svc = new RegionInfoService();
        $result = $svc->indicatorsList();
        self::assertNotEmpty($result);
    }

    public function testOpenDataBase()
    {
        $svc = new RegionInfoService();
        $result = $svc->openDataBase();
        self::assertNotEmpty($result);
    }

    public function testRegionCodeByName()
    {
        $svc = new RegionInfoService();
        $result = $svc->regionCodeByName();
        self::assertNotEmpty($result);
    }

    public function testRegionsList()
    {
        $svc = new RegionInfoService();
        $result = $svc->regionsList();
        self::assertNotEmpty($result);
    }

    public function testRetIndicatorDim()
    {
        $svc = new RegionInfoService();
        $result = $svc->retIndicatorDim();
        self::assertNotEmpty($result);
    }

    public function testSetDatesRange()
    {
        $svc = new RegionInfoService();
        $result = $svc->setDatesRange();
        self::assertNotEmpty($result);
    }

    public function testTablesList()
    {
        $svc = new RegionInfoService();
        $result = $svc->tablesList();
        self::assertNotEmpty($result);
    }

    public function testswToEnglish()
    {
        $svc = new RegionInfoService();
        $result = $svc->swToEnglish();
        self::assertNotEmpty($result);
    }

}