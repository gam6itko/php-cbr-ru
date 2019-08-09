<?php
namespace Gam6itko\CbrRu;

use Gam6itko\CbrRu\Type\CreditOrg;
use Gam6itko\CbrRu\Wrapper\CreditOrgInfoWrapper;
use JMS\Serializer\SerializerInterface;

class CreditOrgInfoService
{
    /** @var CreditOrgInfoWrapper */
    private $svc;

    /**
     * @var SerializerInterface
     */
    private $serializer;

    /**
     * CreditOrgInfo constructor.
     * @param $serializer
     * @param $svc
     */
    public function __construct(CreditOrgInfoWrapper $svc, SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
        $this->svc = $svc;
    }

    public function searchByRegion(int $regionCode)
    {
        $res = $this->svc->SearchByRegionCodeXML($regionCode);
        if (empty($res)) {
            return null;
        }

        $xmlString = str_replace('xmlns=""', '', $res['any']);
        return $this->serializer->deserialize($xmlString, CreditOrg::class, 'xml');
    }

    public function searchByName(string $name): ?CreditOrg
    {
        $res = $this->svc->SearchByNameXML($name);
        if (empty($res)) {
            return null;
        }

        $xmlString = str_replace('xmlns=""', '', $res['any']);
        return $this->serializer->deserialize($xmlString, CreditOrg::class, 'xml');
    }
}