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
 * FBAInboundServiceMWS_Model_TransportHeader
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>ShipmentId: string</li>
 * <li>IsPartnered: bool</li>
 * <li>ShipmentType: string</li>
 *
 * </ul>
 */
class FBAInboundServiceMWS_Model_TransportHeader extends FBAInboundServiceMWS_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'ShipmentId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'IsPartnered' => array('FieldValue' => null, 'FieldType' => 'bool'),
            'ShipmentType' => array('FieldValue' => null, 'FieldType' => 'string'),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the SellerId property.
     *
     * @return String SellerId.
     */
    public function getSellerId()
    {
        return $this->_fields['SellerId']['FieldValue'];
    }

    /**
     * Set the value of the SellerId property.
     *
     * @param string $value sellerId
     * @return $this This instance
     */
    public function setSellerId($value)
    {
        $this->_fields['SellerId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerId is set.
     *
     * @return bool True if SellerId is set.
     */
    public function isSetSellerId()
    {
        return !is_null($this->_fields['SellerId']['FieldValue']);
    }

    /**
     * Set the value of SellerId, return this.
     *
     * @param sellerId
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withSellerId($value)
    {
        $this->setSellerId($value);
        return $this;
    }

    /**
     * Get the value of the ShipmentId property.
     *
     * @return String ShipmentId.
     */
    public function getShipmentId()
    {
        return $this->_fields['ShipmentId']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentId property.
     *
     * @param string $value shipmentId
     * @return $this This instance
     */
    public function setShipmentId($value)
    {
        $this->_fields['ShipmentId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentId is set.
     *
     * @return bool True if ShipmentId is set.
     */
    public function isSetShipmentId()
    {
        return !is_null($this->_fields['ShipmentId']['FieldValue']);
    }

    /**
     * Set the value of ShipmentId, return this.
     *
     * @param shipmentId
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withShipmentId($value)
    {
        $this->setShipmentId($value);
        return $this;
    }

    /**
     * Check the value of IsPartnered.
     *
     * @return bool True if IsPartnered is set to true.
     */
    public function isIsPartnered()
    {
        return $this->_fields['IsPartnered']['FieldValue'];
    }

    /**
     * Get the value of the IsPartnered property.
     *
     * @return boolean IsPartnered.
     */
    public function getIsPartnered()
    {
        return $this->_fields['IsPartnered']['FieldValue'];
    }

    /**
     * Set the value of the IsPartnered property.
     *
     * @param bool $value isPartnered
     * @return $this This instance
     */
    public function setIsPartnered($value)
    {
        $this->_fields['IsPartnered']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if IsPartnered is set.
     *
     * @return bool True if IsPartnered is set.
     */
    public function isSetIsPartnered()
    {
        return !is_null($this->_fields['IsPartnered']['FieldValue']);
    }

    /**
     * Set the value of IsPartnered, return this.
     *
     * @param isPartnered
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withIsPartnered($value)
    {
        $this->setIsPartnered($value);
        return $this;
    }

    /**
     * Get the value of the ShipmentType property.
     *
     * @return String ShipmentType.
     */
    public function getShipmentType()
    {
        return $this->_fields['ShipmentType']['FieldValue'];
    }

    /**
     * Set the value of the ShipmentType property.
     *
     * @param string $value shipmentType
     * @return $this This instance
     */
    public function setShipmentType($value)
    {
        $this->_fields['ShipmentType']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if ShipmentType is set.
     *
     * @return bool True if ShipmentType is set.
     */
    public function isSetShipmentType()
    {
        return !is_null($this->_fields['ShipmentType']['FieldValue']);
    }

    /**
     * Set the value of ShipmentType, return this.
     *
     * @param shipmentType
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withShipmentType($value)
    {
        $this->setShipmentType($value);
        return $this;
    }

}
