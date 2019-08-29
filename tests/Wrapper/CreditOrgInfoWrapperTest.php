<?php
namespace Tests\Gam6itko\Cbrf\Wrapper;

use Gam6itko\Cbrf\Wrapper\CreditOrgInfoWrapper;
use PHPUnit\Framework\TestCase;

class CreditOrgInfoWrapperTest extends TestCase
{
    /**
     * @dataProvider dataBicToIntCode
     * @param string $bic
     * @param int $expectedIntCode
     */
    public function testBicToIntCode(string $bic, int $expectedIntCode)
    {
        $intCode = $this->getSvc()->BicToIntCode($bic);
        self::assertEquals($expectedIntCode, $intCode);
    }

    public function dataBicToIntCode()
    {
        return [
            ['044525225', 350000004],
            ['044525593', 450000036],
            ['044525388', 450000320],
        ];
    }

    /**
     * @dataProvider dataBicToRegNumber
     * @param string $bic
     * @param string $expectedRegNumber
     */
    public function testBicToRegNumber(string $bic, string $expectedRegNumber)
    {
        $regNumber = $this->getSvc()->BicToRegNumber($bic);
        self::assertEquals($expectedRegNumber, $regNumber);
    }

    public function dataBicToRegNumber()
    {
        return [
            ['044525225', 1481],
            ['044525593', 1326],
            ['044525388', 2210],
        ];
    }

    /**
     * @dataProvider dataRegNumToIntCode
     * @param int $regNum
     * @param int $expectedInternalCode
     */
    public function testRegNumToIntCode(int $regNum, int $expectedInternalCode)
    {
        $intCode = $this->getSvc()->RegNumToIntCode($regNum);
        self::assertEquals($expectedInternalCode, $intCode);
    }

    public function dataRegNumToIntCode()
    {
        return [
            [1481, 350000004],
            [1326, 450000036],
            [2210, 450000320],
        ];
    }

    public function testSearchByName(string $name = 'банк')
    {
        $result = $this->getSvc()->SearchByName($name);
        self::assertNotEmpty($result);
    }

    public function testSearchByNameXML(string $name = 'альфа')
    {
        $result = $this->getSvc()->SearchByNameXML($name);
        self::assertNotEmpty($result);
    }

    public function testSearchByRegionCode()
    {
        $result = $this->getSvc()->SearchByRegionCode(19);
        self::assertNotEmpty($result);
    }

    public function testSearchByRegionCodeXML()
    {
        $result = $this->getSvc()->SearchByRegionCodeXML(19);
        self::assertNotEmpty($result);
    }

    public function testCreditInfoByIntCode(string $internalCode = '350000004')
    {
        $result = $this->getSvc()->CreditInfoByIntCode($internalCode);
        self::assertNotEmpty($result);
    }

    public function testCreditInfoByIntCodeEx()
    {
        $array = [350000004, 450000036];
        $result = $this->getSvc()->CreditInfoByIntCodeEx($array);
        self::assertNotEmpty($result);
    }

    public function testCreditInfoByIntCodeExXML()
    {
        $array = [350000004, 450000036];
        $result = $this->getSvc()->CreditInfoByIntCodeExXML($array);
        self::assertNotEmpty($result);
    }

    public function testCreditInfoByIntCodeXML(string $ic = '350000004')
    {
        $result = $this->getSvc()->CreditInfoByIntCodeXML($ic);
        self::assertNotEmpty($result);
    }

    //<editor-fold desc="101Form">
    public function testForm101IndicatorsEnum()
    {
        $result = $this->getSvc()->Form101IndicatorsEnum();
        self::assertNotEmpty($result);
    }

    public function testForm101IndicatorsEnumXML()
    {
        $result = $this->getSvc()->Form101IndicatorsEnumXML();
        self::assertNotEmpty($result);
    }

    public function testData101Form()
    {
        $result = $this->getSvc()->Data101Form(350000004, 1);
        self::assertNotEmpty($result);
    }

    public function testData101FormEx()
    {
        $arr = [350000004, 450000036];
        $result = $this->getSvc()->Data101FormEx($arr, 1, new \DateTime('2018-01-01'), new \DateTime('2019-12-31'));
        self::assertNotEmpty($result);
    }

    public function testData101FormExXML()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data101FormExXML($arr, 1);
        self::assertNotEmpty($result);
    }

    public function testData101FormXML()
    {
        $result = $this->getSvc()->Data101FormXML(350000004, 1);
        self::assertNotEmpty($result);
    }

    public function testData101Full()
    {
        $result = $this->getSvc()->Data101Full(350000004, 1);
        self::assertNotEmpty($result);
    }

    public function testData101FullEx()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data101FullEx($arr, 1);
        self::assertNotEmpty($result);
    }

    public function testData101FullExV2()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data101FullExV2($arr, 1);
        self::assertNotEmpty($result);
    }

    public function testData101FullExV2XML()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data101FullExV2XML($arr, 1);
        self::assertNotEmpty($result);
    }

    public function testData101FullExXML()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data101FullExXML($arr, 1);
        self::assertNotEmpty($result);
    }

    public function testData101FullV2()
    {
        $result = $this->getSvc()->Data101FullV2(350000004, 1);
        self::assertNotEmpty($result);
    }

    public function testData101FullV2XML()
    {
        $result = $this->getSvc()->Data101FullV2XML(350000004, 1);
        self::assertNotEmpty($result);
    }

    public function testData101FullXML()
    {
        $result = $this->getSvc()->Data101FullXML(350000004, 1);
        self::assertNotEmpty($result);
    }
    //</editor-fold>

    //<editor-fold desc="102Form">
    public function testForm102IndicatorsEnum()
    {
        $result = $this->getSvc()->Form102IndicatorsEnum();
        self::assertNotEmpty($result);
    }

    public function testForm102IndicatorsEnumXML()
    {
        $result = $this->getSvc()->Form102IndicatorsEnumXML();
        self::assertNotEmpty($result);
    }

    public function testData102Form()
    {
        $result = $this->getSvc()->Data102Form(350000004, 1);
        self::assertNotEmpty($result);
    }

    public function testData102FormEx()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data102FormEx($arr, 1);
        self::assertNotEmpty($result);
    }

    public function testData102FormExXML()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data102FormExXML($arr, 1);
        self::assertNotEmpty($result);
    }

    public function testData102FormXML()
    {
        $result = $this->getSvc()->Data102FormXML(350000004, 1);
        self::assertNotEmpty($result);
    }

    //</editor-fold desc="102Form">

    public function testData123FormFull()
    {
        $result = $this->getSvc()->Data123FormFull(350000004);
        self::assertNotEmpty($result);
    }

    public function testData123FormFullXML()
    {
        $result = $this->getSvc()->Data123FormFullXML(350000004);
        self::assertNotEmpty($result);
    }

    public function testData134FormFull()
    {
        $result = $this->getSvc()->Data134FormFull(350000004);
        self::assertNotEmpty($result);
    }

    public function testData134FormFullXML()
    {
        $result = $this->getSvc()->Data134FormFullXML(350000004);
        self::assertNotEmpty($result);
    }

    public function testData135FormFull()
    {
        $result = $this->getSvc()->Data135FormFull(350000004);
        self::assertNotEmpty($result);
    }

    public function testData135FormFullXML()
    {
        $result = $this->getSvc()->Data135FormFullXML(350000004);
        self::assertNotEmpty($result);
    }

    public function testEnumBIC()
    {
        $result = $this->getSvc()->EnumBIC();
        self::assertNotEmpty($result);
    }

    public function testEnumBIC_XML()
    {
        $result = $this->getSvc()->EnumBIC_XML();
        self::assertNotEmpty($result);
    }

    public function testGetDatesForF101()
    {
        $result = $this->getSvc()->GetDatesForF101(1481);
        self::assertNotEmpty($result);
    }

    public function testGetDatesForF102()
    {
        $result = $this->getSvc()->GetDatesForF102(1481);
        self::assertNotEmpty($result);
    }

    public function testGetDatesForF123()
    {
        $result = $this->getSvc()->GetDatesForF123(1481);
        self::assertNotEmpty($result);
    }

    public function testGetDatesForF134()
    {
        $result = $this->getSvc()->GetDatesForF134(1481);
        self::assertNotEmpty($result);
    }

    public function testGetDatesForF135()
    {
        $result = $this->getSvc()->GetDatesForF135(1481);
        self::assertNotEmpty($result);
    }

    /**
     * @expectedException \LogicException
     */
    public function testGetFormsMaxDate()
    {
        $result = $this->getSvc()->GetFormsMaxDate(101);
        self::assertNotEmpty($result);
    }

    /**
     * @expectedException \LogicException
     */
    public function testGetFormsMaxDateFail()
    {
        $this->getSvc()->GetFormsMaxDate(1481);
    }

    public function testGetOffices()
    {
        $result = $this->getSvc()->GetOffices(1481);
        self::assertNotEmpty($result);
    }

    public function testGetOfficesByRegion()
    {
        $result = $this->getSvc()->GetOfficesByRegion(19);
        self::assertNotEmpty($result);
    }

    public function testGetOfficesByRegionXML()
    {
        $result = $this->getSvc()->GetOfficesByRegionXML(19);
        self::assertNotEmpty($result);
    }

    public function testGetOfficesXML()
    {
        $result = $this->getSvc()->GetOfficesXML(1481);
        self::assertNotEmpty($result);
    }

    public function testIntCodeToRegNum()
    {
        $result = $this->getSvc()->IntCodeToRegNum(1481);
        self::assertNotEmpty($result);
    }

    public function testLastUpdate()
    {
        $result = $this->getSvc()->LastUpdate();
        self::assertNotEmpty($result);
    }

    public function testOlap134Form()
    {
        $result = $this->getSvc()->Olap134Form(1, 350000004);
        self::assertNotEmpty($result);
    }

    public function testRegionsEnum()
    {
        $result = $this->getSvc()->RegionsEnum();
        self::assertNotEmpty($result);
    }

    public function testRegionsEnumXML()
    {
        $result = $this->getSvc()->RegionsEnumXML();
        self::assertNotEmpty($result);
    }

    private function getSvc()
    {
        return new CreditOrgInfoWrapper();
    }
}