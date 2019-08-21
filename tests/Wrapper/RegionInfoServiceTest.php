<?php
namespace Tests\Gam6itko\Cbrf\Wrapper;

use Gam6itko\Cbrf\Wrapper\RegionInfoWrapper;
use PHPUnit\Framework\TestCase;

class RegionInfoServiceTest extends TestCase
{
    public function testAddIndicators()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->addIndicators(19171107);
        self::assertNotEmpty($result);
    }

    public function testAddRegion()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->addRegion(19171107);
        self::assertNotEmpty($result);
    }

    public function testClearIndicatorsList()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->clearIndicatorsList();
        self::assertNotEmpty($result);
    }

    public function testClearRegionList()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->clearRegionList();
        self::assertNotEmpty($result);
    }

    public function testClose()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->close();
        self::assertNotEmpty($result);
    }

    public function testExecASXMLDocument()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->execASXMLDocument();
        self::assertNotEmpty($result);
    }

    public function testGET_Error()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->getError();
        self::assertNotEmpty($result);
    }

    public function testGetRawRegionData()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->getRawRegionData();
        self::assertNotEmpty($result);
    }

    public function testIndicatorCodeByName()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->indicatorCodeByName();
        self::assertNotEmpty($result);
    }

    public function testIndicatorsList()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->indicatorsList();
        self::assertNotEmpty($result);
    }

    public function testOpenDataBase()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->openDataBase();
        self::assertNotEmpty($result);
    }

    public function testRegionCodeByName()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->regionCodeByName();
        self::assertNotEmpty($result);
    }

    public function testRegionsList()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->regionsList();
        self::assertNotEmpty($result);
    }

    public function testRetIndicatorDim()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->retIndicatorDim();
        self::assertNotEmpty($result);
    }

    public function testSetDatesRange()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->setDatesRange();
        self::assertNotEmpty($result);
    }

    public function testTablesList()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->tablesList();
        self::assertNotEmpty($result);
    }

    public function testswToEnglish()
    {
        $svc = new RegionInfoWrapper();
        $result = $svc->swToEnglish();
        self::assertNotEmpty($result);
    }

}