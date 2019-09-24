<?php

namespace Gam6itko\Cbrf\Model\F101DATA;

/**
 * Оборотная ведомость по счетам бухгалтерского учета кредитной организации
 * Class representing FDFAType
 */
class FDFAType
{

    /**
     * @var \DateTime $dt
     */
    private $dt = null;

    /**
     * @var string $plan
     */
    private $plan = null;

    /**
     * @var int $ap
     */
    private $ap = null;

    /**
     * @var float $inRur vr
     */
    private $inRur = null;

    /**
     * @var float $inCur vv
     */
    private $inCur = null;

    /**
     * @var float $inTotal vitg
     */
    private $inTotal = null;

    /**
     * @var float $sumDebitRur ora
     */
    private $sumDebitRur = null;

    /**
     * @var float $sumDebitCur ova
     */
    private $sumDebitCur = null;

    /**
     * @var float $sumDebitTotal oitga
     */
    private $sumDebitTotal = null;

    /**
     * @var float $sumCreditRur orp
     */
    private $sumCreditRur = null;

    /**
     * @var float $sumCreditCur ovp
     */
    private $sumCreditCur = null;

    /**
     * @var float $sumCreditTotal oitgp
     */
    private $sumCreditTotal = null;

    /**
     * @var float $ir
     */
    private $outRur = null;

    /**
     * @var float $outCur iv
     */
    private $outCur = null;

    /**
     * @var float $outTotal iitg
     */
    private $outTotal = null;

    /**
     * Gets as dt
     *
     * @return \DateTime
     */
    public function getDt()
    {
        return $this->dt;
    }

    /**
     * Sets a new dt
     *
     * @param \DateTime $dt
     * @return self
     */
    public function setDt(\DateTime $dt)
    {
        $this->dt = $dt;
        return $this;
    }

    /**
     * Gets as pln
     *
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Sets a new pln
     *
     * @param string $plan
     * @return self
     */
    public function setPlan($plan)
    {
        $this->plan = $plan;
        return $this;
    }

    /**
     * Gets as ap
     *
     * @return int
     */
    public function getAp()
    {
        return $this->ap;
    }

    /**
     * Sets a new ap
     *
     * @param int $ap
     * @return self
     */
    public function setAp($ap)
    {
        $this->ap = $ap;
        return $this;
    }

    /**
     * Gets as vr
     *
     * @return float
     */
    public function getInRur()
    {
        return $this->inRur;
    }

    /**
     * Sets a new vr
     *
     * @param float $inRur
     * @return self
     */
    public function setInRur($inRur)
    {
        $this->inRur = $inRur;
        return $this;
    }

    /**
     * Gets as vv
     *
     * @return float
     */
    public function getInCur()
    {
        return $this->inCur;
    }

    /**
     * Sets a new vv
     *
     * @param float $inCur
     * @return self
     */
    public function setInCur($inCur)
    {
        $this->inCur = $inCur;
        return $this;
    }

    /**
     * Gets as vitg
     *
     * @return float
     */
    public function getInTotal()
    {
        return $this->inTotal;
    }

    /**
     * Sets a new vitg
     *
     * @param float $inTotal
     * @return self
     */
    public function setInTotal($inTotal)
    {
        $this->inTotal = $inTotal;
        return $this;
    }

    /**
     * Gets as ora
     *
     * @return float
     */
    public function getSumDebitRur()
    {
        return $this->sumDebitRur;
    }

    /**
     * Sets a new ora
     *
     * @param float $sumDebitRur
     * @return self
     */
    public function setSumDebitRur($sumDebitRur)
    {
        $this->sumDebitRur = $sumDebitRur;
        return $this;
    }

    /**
     * Gets as ova
     *
     * @return float
     */
    public function getSumDebitCur()
    {
        return $this->sumDebitCur;
    }

    /**
     * Sets a new ova
     *
     * @param float $sumDebitCur
     * @return self
     */
    public function setSumDebitCur($sumDebitCur)
    {
        $this->sumDebitCur = $sumDebitCur;
        return $this;
    }

    /**
     * Gets as oitga
     *
     * @return float
     */
    public function getSumDebitTotal()
    {
        return $this->sumDebitTotal;
    }

    /**
     * Sets a new oitga
     *
     * @param float $sumDebitTotal
     * @return self
     */
    public function setSumDebitTotal($sumDebitTotal)
    {
        $this->sumDebitTotal = $sumDebitTotal;
        return $this;
    }

    /**
     * Gets as orp
     *
     * @return float
     */
    public function getSumCreditRur()
    {
        return $this->sumCreditRur;
    }

    /**
     * Sets a new orp
     *
     * @param float $sumCreditRur
     * @return self
     */
    public function setSumCreditRur($sumCreditRur)
    {
        $this->sumCreditRur = $sumCreditRur;
        return $this;
    }

    /**
     * Gets as ovp
     *
     * @return float
     */
    public function getSumCreditCur()
    {
        return $this->sumCreditCur;
    }

    /**
     * Sets a new ovp
     *
     * @param float $sumCreditCur
     * @return self
     */
    public function setSumCreditCur($sumCreditCur)
    {
        $this->sumCreditCur = $sumCreditCur;
        return $this;
    }

    /**
     * Gets as oitgp
     *
     * @return float
     */
    public function getSumCreditTotal()
    {
        return $this->sumCreditTotal;
    }

    /**
     * Sets a new oitgp
     *
     * @param float $sumCreditTotal
     * @return self
     */
    public function setSumCreditTotal($sumCreditTotal)
    {
        $this->sumCreditTotal = $sumCreditTotal;
        return $this;
    }

    /**
     * Gets as ir
     *
     * @return float
     */
    public function getOutRur()
    {
        return $this->outRur;
    }

    /**
     * Sets a new ir
     *
     * @param float $outRur
     * @return self
     */
    public function setOutRur($outRur)
    {
        $this->outRur = $outRur;
        return $this;
    }

    /**
     * Gets as iv
     *
     * @return float
     */
    public function getOutCur()
    {
        return $this->outCur;
    }

    /**
     * Sets a new iv
     *
     * @param float $outCur
     * @return self
     */
    public function setOutCur($outCur)
    {
        $this->outCur = $outCur;
        return $this;
    }

    /**
     * Gets as iitg
     *
     * @return float
     */
    public function getOutTotal()
    {
        return $this->outTotal;
    }

    /**
     * Sets a new iitg
     *
     * @param float $outTotal
     * @return self
     */
    public function setOutTotal($outTotal)
    {
        $this->outTotal = $outTotal;
        return $this;
    }


}

