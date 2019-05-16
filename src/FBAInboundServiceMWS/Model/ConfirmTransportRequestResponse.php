<?php
/*******************************************************************************
 * Copyright 2009-2014 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  FBA Inbound Service MWS
 * @version  2010-10-01
 * Library Version: 2014-09-30
 * Generated: Fri Nov 21 18:21:09 GMT 2014
 */

/**
 * FBAInboundServiceMWS_Model_ConfirmTransportRequestResponse
 *
 * Properties:
 * <ul>
 *
 * <li>ConfirmTransportRequestResult: FBAInboundServiceMWS_Model_ConfirmTransportRequestResult</li>
 * <li>ResponseMetadata: FBAInboundServiceMWS_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: FBAInboundServiceMWS_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class FBAInboundServiceMWS_Model_ConfirmTransportRequestResponse extends FBAInboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'ConfirmTransportRequestResult' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAInboundServiceMWS_Model_ConfirmTransportRequestResult'
            ),
            'ResponseMetadata' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAInboundServiceMWS_Model_ResponseMetadata'
            ),
            'ResponseHeaderMetadata' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAInboundServiceMWS_Model_ResponseHeaderMetadata'
            ),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the ConfirmTransportRequestResult property.
     *
     * @return FBAInboundServiceMWS_Model_ConfirmTransportRequestResult ConfirmTransportRequestResult.
     */
    public function getConfirmTransportRequestResult()
    {
        return $this->_fields['ConfirmTransportRequestResult']['FieldValue'];
    }

    /**
     * Set the value of the ConfirmTransportRequestResult property.
     *
     * @param FBAInboundServiceMWS_Model_ConfirmTransportRequestResult $value confirmTransportRequestResult
     * @return $this This instance
     */
    public function setConfirmTransportRequestResult($value)
    {
        $this->_fields['ConfirmTransportRequestResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ConfirmTransportRequestResult is set.
     *
     * @return bool True if ConfirmTransportRequestResult is set.
     */
    public function isSetConfirmTransportRequestResult()
    {
        return !is_null($this->_fields['ConfirmTransportRequestResult']['FieldValue']);
    }

    /**
     * Set the value of ConfirmTransportRequestResult, return this.
     *
     * @param confirmTransportRequestResult
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withConfirmTransportRequestResult($value)
    {
        $this->setConfirmTransportRequestResult($value);
        return $this;
    }

    /**
     * Get the value of the ResponseMetadata property.
     *
     * @return FBAInboundServiceMWS_Model_ResponseMetadata ResponseMetadata.
     */
    public function getResponseMetadata()
    {
        return $this->_fields['ResponseMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseMetadata property.
     *
     * @param FBAInboundServiceMWS_Model_ResponseMetadata $value responseMetadata
     * @return $this This instance
     */
    public function setResponseMetadata($value)
    {
        $this->_fields['ResponseMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseMetadata is set.
     *
     * @return bool True if ResponseMetadata is set.
     */
    public function isSetResponseMetadata()
    {
        return !is_null($this->_fields['ResponseMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseMetadata, return this.
     *
     * @param responseMetadata
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withResponseMetadata($value)
    {
        $this->setResponseMetadata($value);
        return $this;
    }

    /**
     * Get the value of the ResponseHeaderMetadata property.
     *
     * @return FBAInboundServiceMWS_Model_ResponseHeaderMetadata ResponseHeaderMetadata.
     */
    public function getResponseHeaderMetadata()
    {
        return $this->_fields['ResponseHeaderMetadata']['FieldValue'];
    }

    /**
     * Set the value of the ResponseHeaderMetadata property.
     *
     * @param FBAInboundServiceMWS_Model_ResponseHeaderMetadata $value responseHeaderMetadata
     * @return $this This instance
     */
    public function setResponseHeaderMetadata($value)
    {
        $this->_fields['ResponseHeaderMetadata']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ResponseHeaderMetadata is set.
     *
     * @return bool True if ResponseHeaderMetadata is set.
     */
    public function isSetResponseHeaderMetadata()
    {
        return !is_null($this->_fields['ResponseHeaderMetadata']['FieldValue']);
    }

    /**
     * Set the value of ResponseHeaderMetadata, return this.
     *
     * @param responseHeaderMetadata
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withResponseHeaderMetadata($value)
    {
        $this->setResponseHeaderMetadata($value);
        return $this;
    }

    /**
     * Construct FBAInboundServiceMWS_Model_ConfirmTransportRequestResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     * @return FBAInboundServiceMWS_Model_ConfirmTransportRequestResponse
     * @throws Exception
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='ConfirmTransportRequestResponse']");
        if ($response->length == 1) {
            return new FBAInboundServiceMWS_Model_ConfirmTransportRequestResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct FBAInboundServiceMWS_Model_ConfirmTransportRequestResponse from provided XML. 
                                  Make sure that ConfirmTransportRequestResponse is a root element");
        }
    }

    /**
     * XML Representation for this object
     *
     * @return string XML for this object
     */
    public function toXML()
    {
        $xml = "";
        $xml .= "<ConfirmTransportRequestResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</ConfirmTransportRequestResponse>";
        return $xml;
    }

}
