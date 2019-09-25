<?php

namespace Gam6itko\Cbrf\Wrapper;

abstract class AbstractWrapper
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
     *
     * @return array|mixed|\stdClass
     */
    protected function doRequest(string $methodName, array $soapRequest = [])
    {
        $methodName = ucfirst($methodName);

        $result = $this->soapCall($methodName, $soapRequest);
        if (is_scalar($result)) {
            return $result;
        }

        return (array) $result;
    }

    private function soapCall(string $methodName, array $soapRequest = [])
    {
        $soapResult = $this->getSoapClient()->__soapCall($methodName, [$methodName => $soapRequest]);
        if (isset($soapResult->{$methodName.'Result'})) {
            return $soapResult->{$methodName.'Result'};
        }

        return $soapResult;
    }

    /**
     * @return \SoapClient
     */
    protected function buildSoapClient()
    {
        return new \SoapClient($this->getWsdl(), [
            'soap_version' => SOAP_1_1,
            'trace' => true,
            'features' => SOAP_USE_XSI_ARRAY_TYPE,
            'connection_timeout' => 5,
        ]);
    }
}
