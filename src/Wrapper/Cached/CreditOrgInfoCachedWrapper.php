<?php

namespace Gam6itko\Cbrf\Wrapper\Cached;

use Gam6itko\Cbrf\Wrapper\CreditOrgInfoWrapper;
use Psr\Cache\CacheItemPoolInterface;

class CreditOrgInfoCachedWrapper extends CreditOrgInfoWrapper
{
    /** @var CacheItemPoolInterface */
    private $cache;

    /**
     * CachedCreditOrgInfoWrapper constructor.
     *
     * @param CacheItemPoolInterface $cache
     */
    public function __construct(CacheItemPoolInterface $cache)
    {
        $this->cache = $cache;
    }

    public function __call($name, $arguments)
    {
        $argsHash = $this->buildHash($arguments);

        return $this->easyCache("{$name}_{$argsHash}", function () use ($name, $arguments) {
            return parent::__call($name, $arguments);
        });
    }

    public function GetFormsMaxDate(int $code)
    {
        return $this->easyCache("GetFormsMaxDate_{$code}", function () use ($code) {
            return parent::GetFormsMaxDate($code);
        });
    }

    public function GetOffices(int $intCode)
    {
        return $this->easyCache("GetOffices_{$intCode}", function () use ($intCode) {
            return parent::GetOffices($intCode);
        });
    }

    public function GetOfficesXML(float $intCode)
    {
        return $this->easyCache("GetOfficesXML_{$intCode}", function () use ($intCode) {
            return parent::GetOfficesXML($intCode);
        });
    }

    public function IntCodeToRegNum(float $intNumber)
    {
        return $this->easyCache("IntCodeToRegNum_{$intNumber}", function () use ($intNumber) {
            return parent::IntCodeToRegNum($intNumber);
        });
    }

    public function Olap134Form(string $code, int $credorgNumber, \DateTimeInterface $dateFrom = null, \DateTimeInterface $dateTo = null)
    {
        $argsHash = md5(json_encode([$code, $credorgNumber, $dateFrom->format('Ymd'), $dateTo->format('Ymd')]));

        return $this->easyCache("Olap134Form:$argsHash", function () use ($code, $credorgNumber, $dateFrom, $dateTo) {
            return parent::Olap134Form($code, $credorgNumber, $dateFrom, $dateTo);
        });
    }

    public function RegNumToIntCode(float $regNumber)
    {
        return $this->easyCache("RegNumToIntCode_{$regNumber}", function () use ($regNumber) {
            return parent::RegNumToIntCode($regNumber);
        });
    }

    private function easyCache(string $key, \Closure $fn)
    {
        $ci = $this->cache->getItem($key);
        if (!$ci->isHit()) {
            if ($value = $fn()) {
                $ci->set($value);
                $this->cache->save($ci);
            }
        }

        return $ci->get();
    }

    private function buildHash($arguments)
    {
        $arguments = array_map(function ($val) {
            if ($val instanceof \DateTimeInterface) {
                return $val->format('Ymd');
            }

            return $val;
        }, $arguments);

        return md5(json_encode($arguments));
    }
}
