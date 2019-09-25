<?php

namespace Gam6itko\Cbrf\Tests;

use Gam6itko\Cbrf\Model\F101DATA;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use PHPUnit\Framework\TestCase;

class SerializerTest extends TestCase
{
    private function build(): SerializerInterface
    {
        return SerializerBuilder::create()
            ->addMetadataDir(realpath(__DIR__.'/../config/serializer/'), 'Gam6itko\Cbrf\Model')
            ->build();
    }

    public function testF101DATA()
    {
        $xml = <<<XML
<?xml version="1.0" encoding="UTF-8"?>
<F101DATA>
   <FDF>
      <dt>2019-01-01T00:00:00+03:00</dt>
      <pln>А</pln>
      <ap>2</ap>
      <vr>645698</vr>
      <vv>1379961</vv>
      <vitg>2025659.0000</vitg>
      <ora>331208</ora>
      <ova>1567805</ova>
      <oitga>1899013.0000</oitga>
      <orp>589295</orp>
      <ovp>13851204</ovp>
      <oitgp>14440499.0000</oitgp>
      <ir>903785</ir>
      <iv>13663360</iv>
      <iitg>14567145.0000</iitg>
   </FDF>
</F101DATA>
XML;
        /** @var F101DATA $object */
        $object = $this->build()->deserialize($xml, F101DATA::class, 'xml');
        self::assertNotEmpty($object);
        self::assertInstanceOf(F101DATA::class, $object);
        self::assertCount(1, $object->getFDF());
        /** @var $fdFaType */
        $fdFaType = $object->getFDF()[0];
        self::assertInstanceOf(F101DATA\FDFAType::class, $fdFaType);
        self::assertEquals('А', $fdFaType->getPlan());
        self::assertEquals(2, $fdFaType->getAp());
        self::assertEquals(645698, $fdFaType->getInRur());
        self::assertEquals(1379961, $fdFaType->getInCur());
        self::assertEquals(2025659.00, $fdFaType->getInTotal());
        self::assertEquals(331208, $fdFaType->getSumDebitRur());
        self::assertEquals(1567805, $fdFaType->getSumDebitCur());
        self::assertEquals(1899013.00, $fdFaType->getSumDebitTotal());
        self::assertEquals(589295, $fdFaType->getSumCreditRur());
        self::assertEquals(13851204, $fdFaType->getSumCreditCur());
        self::assertEquals(14440499.00, $fdFaType->getSumCreditTotal());
        self::assertEquals(903785, $fdFaType->getOutRur());
        self::assertEquals(13663360, $fdFaType->getOutCur());
        self::assertEquals(14567145.00, $fdFaType->getOutTotal());
    }
}
