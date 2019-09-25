<?php
namespace Gam6itko\Cbrf\Tests;

use Gam6itko\Cbrf\CreditOrgInfoService;
use Gam6itko\Cbrf\Enum\FormType;
use Gam6itko\Cbrf\Model\CoOffices;
use Gam6itko\Cbrf\Model\CreditOrg;
use Gam6itko\Cbrf\Model\CreditOrg\EnumCreditsAType;
use Gam6itko\Cbrf\Model\CreditOrgInfo;
use Gam6itko\Cbrf\Model\EnumBIC;
use Gam6itko\Cbrf\Model\F101DATA;
use Gam6itko\Cbrf\Model\IndicatorsEnum101;
use Gam6itko\Cbrf\Model\IndicatorsEnum102;
use Gam6itko\Cbrf\Model\RegionsEnum;
use Gam6itko\Cbrf\Wrapper\CreditOrgInfoWrapper;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \Gam6itko\Cbrf\CreditOrgInfoService
 */
class CreditOrgInfoServiceTest extends TestCase
{
    private function build(): CreditOrgInfoService
    {
        $svc = new CreditOrgInfoWrapper();
        $serializer = SerializerBuilder::create()
            ->addMetadataDir(realpath(__DIR__ . '/../config/serializer/'), 'Gam6itko\Cbrf\Model')
            ->build();
        return new CreditOrgInfoService($svc, $serializer);
    }

    /**
     * @covers ::getBicToIntCode()
     * @param string $bic
     */
    public function testGetBicToIntCode(string $bic = '044525225'): void
    {
        $result = $this->build()->getBicToIntCode($bic);
        self::assertNotNull($result);
    }

    /**
     * @covers ::getBicToRegNumber
     * @param string $bic
     */
    public function testBicToRegNumber(string $bic = '044525225'): void
    {
        $result = $this->build()->getBicToRegNumber($bic);
        self::assertNotNull($result);
    }

    /**
     * @param int $intCode
     */
    public function testCreditInfoByIntCode(int $intCode = 350000004): void
    {
        $result = $this->build()->creditInfoByIntCode($intCode);
        self::assertInstanceOf(CreditOrgInfo::class, $result);

        $list = $result->getCO();
        self::assertNotEmpty($list);
        self::assertInstanceOf(CreditOrgInfo\COAType::class, $list[0]);

        $list = $result->getLIC();
        self::assertNotEmpty($list);
        self::assertInstanceOf(CreditOrgInfo\LICAType::class, $list[0]);
    }

    public function testCreditInfoByIntCodeEx(): void
    {
        $array = [350000004, 450000036];
        $result = $this->build()->creditInfoByIntCodeEx($array);
        self::assertInstanceOf(CreditOrgInfo::class, $result);

        $list = $result->getCO();
        self::assertNotEmpty($list);
        self::assertInstanceOf(CreditOrgInfo\COAType::class, $list[0]);

        $list = $result->getLIC();
        self::assertNotEmpty($list);
        self::assertInstanceOf(CreditOrgInfo\LICAType::class, $list[0]);
    }

    /**
     * @param int $regionCode
     */
    public function testSearchByRegion(int $regionCode = 19): void
    {
        $result = $this->build()->searchByRegionCode($regionCode);
        self::assertInstanceOf(CreditOrg::class, $result);
        self::assertNotEmpty($result->getEnumCredits());
        self::assertInstanceOf(EnumCreditsAType::class, $result->getEnumCredits()[0]);
    }

    /**
     * @param string $name
     */
    public function testSearchByName(string $name = 'альфа'): void
    {
        $result = $this->build()->searchByName($name);
        self::assertInstanceOf(CreditOrg::class, $result);
        self::assertNotEmpty($result->getEnumCredits());
        self::assertInstanceOf(EnumCreditsAType::class, $result->getEnumCredits()[0]);
    }

    public function testData101Form(): void //todo нет реальных данных
    {
        $result = $this->build()->data101Form(1481, 1, new \DateTime('2019-01-01'), new \DateTime('2019-08-01'));
        self::assertInstanceOf(F101DATA::class, $result);
    }

    public function testData101FormEx(): void //todo нет реальных данных
    {
        $result = $this->build()->data101FormEx([1481], 1);
        self::assertInstanceOf(F101DATA::class, $result);
    }

    public function testData101Full(): void
    {
        $result = $this->build()->data101Full(1481, 42503, new \DateTime('2019-01-01'), new \DateTime('2019-02-01'));
        self::assertInstanceOf(F101DATA::class, $result);
        self::assertNotEmpty($result->getFDF());
        self::assertCount(2, $result->getFDF());
    }

    public function testData101FullEx(): void //todo нет реальных данных
    {
        $result = $this->build()->data101FullEx([101, 1481], 42503, new \DateTime('2019-01-01'), new \DateTime('2019-02-01'));
        self::assertInstanceOf(F101DATA::class, $result);
    }

    public function testData101FullV2(): void
    {
        $result = $this->build()->data101FullV2(1481, 42503, new \DateTime('2019-01-01'), new \DateTime('2019-02-01'));
        self::assertInstanceOf(F101DATA::class, $result);
        self::assertNotEmpty($result->getFDF());
        self::assertCount(2, $result->getFDF());

        $fDfa = $result->getFDF()[1];
        self::assertEquals('А', $fDfa->getPlan()); // латинская А
        self::assertEquals(2, $fDfa->getAp());
        self::assertEquals(903785, $fDfa->getInRur());
        self::assertEquals(13663360, $fDfa->getInCur());
        self::assertEquals(14567145, $fDfa->getInTotal());
        self::assertEquals(667685, $fDfa->getSumDebitRur());
        self::assertEquals(13606535, $fDfa->getSumDebitCur());
        self::assertEquals(14274220, $fDfa->getSumDebitTotal());
        self::assertEquals(900760, $fDfa->getSumCreditRur());
        self::assertEquals(114081, $fDfa->getSumCreditCur());
        self::assertEquals(1014841, $fDfa->getSumCreditTotal());
        self::assertEquals(1136860, $fDfa->getOutRur());
        self::assertEquals(170906, $fDfa->getOutCur());
        self::assertEquals(1307766, $fDfa->getOutTotal());
    }

    public function testData101FullExV2(): void //todo нет реальных данных
    {
        $result = $this->build()->data101FullExV2([101, 1481], 42503, new \DateTime('2019-01-01'), new \DateTime('2019-02-01'));
        self::assertInstanceOf(F101DATA::class, $result);
    }

    public function testData102Form(): void //todo нет реальных данных
    {
        $result = $this->build()->data102Form(1481, 10101, new \DateTime('2019-01-01'), new \DateTime('2019-02-01'));
        self::assertInstanceOf(F101DATA::class, $result);
    }

    public function testData102FormEx(): void //todo нет реальных данных
    {
        $result = $this->build()->data102FormEx([1481], 10101, new \DateTime('2019-01-01'), new \DateTime('2019-02-01'));
        self::assertInstanceOf(F101DATA::class, $result);
    }

    public function testData123FormFull(): void //todo нет реальных данных
    {
        $result = $this->build()->data123FormFull(1481, new \DateTime('2019-01-01'));
        self::assertInstanceOf(F101DATA::class, $result);
    }

    public function testData134FormFull(): void //todo нет реальных данных
    {
        $result = $this->build()->data134FormFull(1481, new \DateTime('2019-01-01'));
        self::assertInstanceOf(F101DATA::class, $result);
    }

    public function testData135FormFull(): void //todo нет реальных данных
    {
        $result = $this->build()->data135FormFull(1481, new \DateTime('2019-01-01'));
        self::assertInstanceOf(F101DATA::class, $result);
    }

    //<editor-fold desc="enum">
    public function testGetDatesForForm(): void
    {
        $result = $this->build()->getDatesForForm(FormType::F101, 1481);
        self::assertIsArray($result);
    }

    /**
     * @expectedException \LogicException
     */
    public function testGetDatesForFormException(): void
    {
        $this->build()->getDatesForForm(0, 1481);
    }

    /**
     * @covers ::getLastUpdate
     * @throws \Exception
     */
    public function testLastUpdate(): void
    {
        $result = $this->build()->getLastUpdate();
        self::assertInstanceOf(\DateTime::class, $result);
    }

    public function testEnumBIC(): void
    {
        $result = $this->build()->enumBIC();
        self::assertInstanceOf(EnumBIC::class, $result);
        $list = $result->getBIC();
        self::assertNotEmpty($list);
        self::assertInstanceOf(EnumBIC\BICAType::class, $list[0]);
    }

    public function testRegionsEnum(): void
    {
        $result = $this->build()->regionsEnum();
        self::assertInstanceOf(RegionsEnum::class, $result);
        $list = $result->getRGID();
        self::assertNotEmpty($list);
        self::assertInstanceOf(RegionsEnum\RGIDAType::class, $list[0]);
    }

    /**
     * @param int $regionCode
     */
    public function testOfficesByRegion(int $regionCode = 19): void
    {
        $result = $this->build()->officesByRegion($regionCode);
        self::assertInstanceOf(CoOffices::class, $result);
        $list = $result->getOffices();
        self::assertNotEmpty($list);
        self::assertInstanceOf(CoOffices\OfficesAType::class, $list[0]);
    }

    public function testForm102IndicatorsEnum(): void
    {
        $result = $this->build()->form102IndicatorsEnum();
        self::assertInstanceOf(IndicatorsEnum102::class, $result);
        self::assertNotEmpty($result->getSIND());
        self::assertInstanceOf(IndicatorsEnum102\SINDAType::class, $result->getSIND()[0]);
    }

    public function testForm101IndicatorsEnum(): void
    {
        $result = $this->build()->form101IndicatorsEnum();
        self::assertInstanceOf(IndicatorsEnum101::class, $result);
        self::assertNotEmpty($result->getEIND());
        self::assertInstanceOf(IndicatorsEnum101\EINDAType::class, $result->getEIND()[0]);
    }
    //</editor-fold>
}
