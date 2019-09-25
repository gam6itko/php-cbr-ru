<?php

namespace Gam6itko\Cbrf\Tests\Wrapper;

use Gam6itko\Cbrf\Wrapper\CreditOrgInfoWrapper;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Gam6itko\Cbrf\Wrapper\CreditOrgInfoWrapper
 */
class CreditOrgInfoWrapperTest extends TestCase
{
    private function getSvc()
    {
        return new CreditOrgInfoWrapper();
    }

    /**
     * @dataProvider dataBicToIntCode
     * @covers ::BicToIntCode
     *
     * @param string $bic
     * @param int    $expectedIntCode
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
     * @covers ::BicToRegNumber
     *
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
     * @covers ::RegNumToIntCode
     *
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

    /**
     * @covers ::SearchByName
     *
     * @param string $name
     */
    public function testSearchByName(string $name = 'банк')
    {
        $result = $this->getSvc()->SearchByName($name);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::SearchByNameXML
     *
     * @param string $name
     */
    public function testSearchByNameXML(string $name = 'альфа')
    {
        $result = $this->getSvc()->SearchByNameXML($name);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::SearchByRegionCode
     */
    public function testSearchByRegionCode()
    {
        $result = $this->getSvc()->SearchByRegionCode(19);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::SearchByRegionCodeXML
     */
    public function testSearchByRegionCodeXML()
    {
        $result = $this->getSvc()->SearchByRegionCodeXML(19);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::CreditInfoByIntCode
     *
     * @param string $internalCode
     */
    public function testCreditInfoByIntCode(string $internalCode = '350000004')
    {
        $result = $this->getSvc()->CreditInfoByIntCode($internalCode);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::CreditInfoByIntCodeEx
     */
    public function testCreditInfoByIntCodeEx()
    {
        $array = [350000004, 450000036];
        $result = $this->getSvc()->CreditInfoByIntCodeEx($array);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::CreditInfoByIntCodeExXML
     */
    public function testCreditInfoByIntCodeExXML()
    {
        $array = [350000004, 450000036];
        $result = $this->getSvc()->CreditInfoByIntCodeExXML($array);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::CreditInfoByIntCodeXML
     *
     * @param string $ic
     */
    public function testCreditInfoByIntCodeXML(string $ic = '350000004')
    {
        $result = $this->getSvc()->CreditInfoByIntCodeXML($ic);
        self::assertNotEmpty($result);
    }

    //<editor-fold desc="101Form">

    /**
     * @covers ::Form101IndicatorsEnum
     */
    public function testForm101IndicatorsEnum()
    {
        $result = $this->getSvc()->Form101IndicatorsEnum();
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Form101IndicatorsEnumXML
     */
    public function testForm101IndicatorsEnumXML()
    {
        $result = $this->getSvc()->Form101IndicatorsEnumXML();
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data101Form
     */
    public function testData101Form()
    {
        $result = $this->getSvc()->Data101Form(350000004, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data101FormEx
     */
    public function testData101FormEx()
    {
        $arr = [350000004, 450000036];
        $result = $this->getSvc()->Data101FormEx($arr, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data101FormExXML
     */
    public function testData101FormExXML()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data101FormExXML($arr, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data101FormXML
     */
    public function testData101FormXML()
    {
        $result = $this->getSvc()->Data101FormXML(350000004, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data101Full
     */
    public function testData101Full()
    {
        $result = $this->getSvc()->Data101Full(350000004, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data101FullEx
     */
    public function testData101FullEx()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data101FullEx($arr, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data101FullExV2
     */
    public function testData101FullExV2()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data101FullExV2($arr, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data101FullExV2XML
     */
    public function testData101FullExV2XML()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data101FullExV2XML($arr, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data101FullExXML
     */
    public function testData101FullExXML()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data101FullExXML($arr, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data101FullV2
     */
    public function testData101FullV2()
    {
        $result = $this->getSvc()->Data101FullV2(350000004, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data101FullV2XML
     */
    public function testData101FullV2XML()
    {
        $result = $this->getSvc()->Data101FullV2XML(350000004, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data101FullXML
     */
    public function testData101FullXML()
    {
        $result = $this->getSvc()->Data101FullXML(350000004, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    //</editor-fold>

    //<editor-fold desc="102Form">

    /**
     * @covers ::Form102IndicatorsEnum
     */
    public function testForm102IndicatorsEnum()
    {
        $result = $this->getSvc()->Form102IndicatorsEnum();
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Form102IndicatorsEnumXML
     */
    public function testForm102IndicatorsEnumXML()
    {
        $result = $this->getSvc()->Form102IndicatorsEnumXML();
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data102Form
     */
    public function testData102Form()
    {
        $result = $this->getSvc()->Data102Form(350000004, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data102FormEx
     */
    public function testData102FormEx()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data102FormEx($arr, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data102FormExXML
     */
    public function testData102FormExXML()
    {
        $arr = [350000004];
        $result = $this->getSvc()->Data102FormExXML($arr, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data102FormXML
     */
    public function testData102FormXML()
    {
        $result = $this->getSvc()->Data102FormXML(350000004, 1, new \DateTime('2018-01-01'), new \DateTime('2018-12-31'));
        self::assertNotEmpty($result);
    }

    //</editor-fold desc="102Form">

    /**
     * @covers ::Data123FormFull
     */
    public function testData123FormFull()
    {
        $result = $this->getSvc()->Data123FormFull(350000004, new \DateTime('2018-01-01'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data123FormFullXML
     */
    public function testData123FormFullXML()
    {
        $result = $this->getSvc()->Data123FormFullXML(350000004, new \DateTime('2018-01-01'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data134FormFull
     */
    public function testData134FormFull()
    {
        $result = $this->getSvc()->Data134FormFull(350000004, new \DateTime('2018-01-01'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data134FormFullXML
     */
    public function testData134FormFullXML()
    {
        $result = $this->getSvc()->Data134FormFullXML(350000004, new \DateTime('2018-01-01'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data135FormFull
     */
    public function testData135FormFull()
    {
        $result = $this->getSvc()->Data135FormFull(350000004, new \DateTime('2018-01-01'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Data135FormFullXML
     */
    public function testData135FormFullXML()
    {
        $result = $this->getSvc()->Data135FormFullXML(350000004, new \DateTime('2018-01-01'));
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::EnumBIC
     */
    public function testEnumBIC()
    {
        $result = $this->getSvc()->EnumBIC();
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::EnumBIC_XML
     */
    public function testEnumBIC_XML()
    {
        $result = $this->getSvc()->EnumBIC_XML();
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::GetDatesForF101
     */
    public function testGetDatesForF101()
    {
        $result = $this->getSvc()->GetDatesForF101(1481);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::GetDatesForF102
     */
    public function testGetDatesForF102()
    {
        $result = $this->getSvc()->GetDatesForF102(1481);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::GetDatesForF123
     */
    public function testGetDatesForF123()
    {
        $result = $this->getSvc()->GetDatesForF123(1481);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::GetDatesForF134
     */
    public function testGetDatesForF134()
    {
        $result = $this->getSvc()->GetDatesForF134(1481);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::GetDatesForF135
     */
    public function testGetDatesForF135()
    {
        $result = $this->getSvc()->GetDatesForF135(1481);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::GetFormsMaxDate
     * @expectedException \LogicException
     */
    public function testGetFormsMaxDate()
    {
        $result = $this->getSvc()->GetFormsMaxDate(101);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::GetFormsMaxDateFail
     * @expectedException \LogicException
     */
    public function testGetFormsMaxDateFail()
    {
        $this->getSvc()->GetFormsMaxDate(1481);
    }

    /**
     * @covers ::GetOffices
     */
    public function testGetOffices()
    {
        $result = $this->getSvc()->GetOffices(1481);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::GetOfficesByRegion
     */
    public function testGetOfficesByRegion()
    {
        $result = $this->getSvc()->GetOfficesByRegion(19);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::GetOfficesByRegionXML
     */
    public function testGetOfficesByRegionXML()
    {
        $result = $this->getSvc()->GetOfficesByRegionXML(19);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::GetOfficesXML
     */
    public function testGetOfficesXML()
    {
        $result = $this->getSvc()->GetOfficesXML(1481);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::IntCodeToRegNum
     */
    public function testIntCodeToRegNum()
    {
        $result = $this->getSvc()->IntCodeToRegNum(1481);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::LastUpdate
     */
    public function testLastUpdate()
    {
        $result = $this->getSvc()->LastUpdate();
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::Olap134Form
     */
    public function testOlap134Form()
    {
        $result = $this->getSvc()->Olap134Form(1, 350000004);
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::RegionsEnum
     */
    public function testRegionsEnum()
    {
        $result = $this->getSvc()->RegionsEnum();
        self::assertNotEmpty($result);
    }

    /**
     * @covers ::RegionsEnumXML
     */
    public function testRegionsEnumXML()
    {
        $result = $this->getSvc()->RegionsEnumXML();
        self::assertNotEmpty($result);
    }
}
