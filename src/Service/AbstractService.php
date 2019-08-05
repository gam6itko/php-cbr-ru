<?php
namespace Gam6itko\DpdCarrier\WebService;

abstract class AbstractService
{
    /** @var \SoapClient */
    private $soapClient;

    abstract protected function getWsdl();

    protected function getSoapClient()
    {
        if ($this->soapClient) {
            return $this->soapClient;
        }
        return $this->soapClient = $this->buildSoapClient();
    }

    /**
     * @param $methodName
     * @param array $soapRequest
     * @return array|mixed|\stdClass
     */
    protected function doRequest($methodName, array $soapRequest = [])
    {
        $soapResult = $this->getSoapClient()->__soapCall($methodName, $soapRequest);

        if (isset($soapResult->return)) {
            return $soapResult->return;
        }

        return $soapResult;
    }

    /**
     * @return array
     */
    protected function getClassmap()
    {
        return [];
    }

    /**
     * @return \SoapClient
     */
    protected function buildSoapClient()
    {
        return new \SoapClient($this->getWsdl(), [
            'trace'              => $this->testMode,
            'features'           => SOAP_SINGLE_ELEMENT_ARRAYS,
            'classmap'           => $this->getClassmap(),
            'connection_timeout' => 5
        ]);
    }
}
