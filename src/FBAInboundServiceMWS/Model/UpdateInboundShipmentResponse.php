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
 * FBAInboundServiceMWS_Model_UpdateInboundShipmentResponse
 *
 * Properties:
 * <ul>
 *
 * <li>UpdateInboundShipmentResult: FBAInboundServiceMWS_Model_UpdateInboundShipmentResult</li>
 * <li>ResponseMetadata: FBAInboundServiceMWS_Model_ResponseMetadata</li>
 * <li>ResponseHeaderMetadata: FBAInboundServiceMWS_Model_ResponseHeaderMetadata</li>
 *
 * </ul>
 */
class FBAInboundServiceMWS_Model_UpdateInboundShipmentResponse extends FBAInboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'UpdateInboundShipmentResult' => array(
                'FieldValue' => null,
                'FieldType' => 'FBAInboundServiceMWS_Model_UpdateInboundShipmentResult'
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
     * Get the value of the UpdateInboundShipmentResult property.
     *
     * @return FBAInboundServiceMWS_Model_UpdateInboundShipmentResult UpdateInboundShipmentResult.
     */
    public function getUpdateInboundShipmentResult()
    {
        return $this->_fields['UpdateInboundShipmentResult']['FieldValue'];
    }

    /**
     * Set the value of the UpdateInboundShipmentResult property.
     *
     * @param FBAInboundServiceMWS_Model_UpdateInboundShipmentResult $value updateInboundShipmentResult
     * @return $this This instance
     */
    public function setUpdateInboundShipmentResult($value)
    {
        $this->_fields['UpdateInboundShipmentResult']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if UpdateInboundShipmentResult is set.
     *
     * @return bool True if UpdateInboundShipmentResult is set.
     */
    public function isSetUpdateInboundShipmentResult()
    {
        return !is_null($this->_fields['UpdateInboundShipmentResult']['FieldValue']);
    }

    /**
     * Set the value of UpdateInboundShipmentResult, return this.
     *
     * @param updateInboundShipmentResult
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withUpdateInboundShipmentResult($value)
    {
        $this->setUpdateInboundShipmentResult($value);
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
     * Construct FBAInboundServiceMWS_Model_UpdateInboundShipmentResponse from XML string
     *
     * @param $xml
     *        XML string to construct from
     * @return FBAInboundServiceMWS_Model_UpdateInboundShipmentResponse
     * @throws Exception
     */
    public static function fromXML($xml)
    {
        $dom = new DOMDocument();
        $dom->loadXML($xml);
        $xpath = new DOMXPath($dom);
        $response = $xpath->query("//*[local-name()='UpdateInboundShipmentResponse']");
        if ($response->length == 1) {
            return new FBAInboundServiceMWS_Model_UpdateInboundShipmentResponse(($response->item(0)));
        } else {
            throw new Exception ("Unable to construct FBAInboundServiceMWS_Model_UpdateInboundShipmentResponse from provided XML. 
                                  Make sure that UpdateInboundShipmentResponse is a root element");
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
        $xml .= "<UpdateInboundShipmentResponse xmlns=\"http://mws.amazonaws.com/FulfillmentInboundShipment/2010-10-01/\">";
        $xml .= $this->_toXMLFragment();
        $xml .= "</UpdateInboundShipmentResponse>";
        return $xml;
    }

}
