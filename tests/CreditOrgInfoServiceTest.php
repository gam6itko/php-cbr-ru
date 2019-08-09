<?php
namespace Tests\Gam6itko\CbrRu;

use Gam6itko\CbrRu\CreditOrgInfoService;
use Gam6itko\CbrRu\Type\CreditOrg;
use Gam6itko\CbrRu\Type\CreditOrg\EnumCreditsAType;
use Gam6itko\CbrRu\Wrapper\CreditOrgInfoWrapper;
use JMS\Serializer\SerializerBuilder;
use PHPUnit\Framework\TestCase;

class CreditOrgInfoServiceTest extends TestCase
{
    public function testSearchByRegion(int $regionCode = 19)
    {
        $result = $this->build()->searchByRegion($regionCode);
        self::assertInstanceOf(CreditOrg::class, $result);
        self::assertNotEmpty($result->getEnumCredits());
        self::assertInstanceOf(EnumCreditsAType::class, $result->getEnumCredits()[0]);
    }

    public function testSearchByName(string $name = 'альфа')
    {
        $result = $this->build()->searchByName($name);
        self::assertInstanceOf(CreditOrg::class, $result);
        self::assertNotEmpty($result->getEnumCredits());
        self::assertInstanceOf(EnumCreditsAType::class, $result->getEnumCredits()[0]);
    }

    private function build()
    {
        $svc = new CreditOrgInfoWrapper();
        $serializer = SerializerBuilder::create()
            ->addMetadataDir(realpath(__DIR__ . '/../metadata/'), 'Gam6itko\CbrRu\Type')
            ->build();
        return new CreditOrgInfoService($svc, $serializer);
    }
}