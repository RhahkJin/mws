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
 * @package  Marketplace Web Service Orders
 * @version  2013-09-01
 * Library Version: 2014-10-20
 * Generated: Fri Oct 17 15:31:59 GMT 2014
 */

/**
 * MarketplaceWebServiceOrders_Model_ListOrdersRequest
 *
 * Properties:
 * <ul>
 *
 * <li>SellerId: string</li>
 * <li>MWSAuthToken: string</li>
 * <li>CreatedAfter: string</li>
 * <li>CreatedBefore: string</li>
 * <li>LastUpdatedAfter: string</li>
 * <li>LastUpdatedBefore: string</li>
 * <li>OrderStatus: array</li>
 * <li>MarketplaceId: array</li>
 * <li>FulfillmentChannel: array</li>
 * <li>PaymentMethod: array</li>
 * <li>BuyerEmail: string</li>
 * <li>SellerOrderId: string</li>
 * <li>MaxResultsPerPage: int</li>
 * <li>TFMShipmentStatus: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceOrders_Model_ListOrdersRequest extends MarketplaceWebServiceOrders_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'SellerId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'MWSAuthToken' => array('FieldValue' => null, 'FieldType' => 'string'),
            'CreatedAfter' => array('FieldValue' => null, 'FieldType' => 'string'),
            'CreatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'),
            'LastUpdatedAfter' => array('FieldValue' => null, 'FieldType' => 'string'),
            'LastUpdatedBefore' => array('FieldValue' => null, 'FieldType' => 'string'),
            'OrderStatus' => array(
                'FieldValue' => array(),
                'FieldType' => array('string'),
                'ListMemberName' => 'Status'
            ),
            'MarketplaceId' => array('FieldValue' => array(), 'FieldType' => array('string'), 'ListMemberName' => 'Id'),
            'FulfillmentChannel' => array(
                'FieldValue' => array(),
                'FieldType' => array('string'),
                'ListMemberName' => 'Channel'
            ),
            'PaymentMethod' => array(
                'FieldValue' => array(),
                'FieldType' => array('string'),
                'ListMemberName' => 'Method'
            ),
            'BuyerEmail' => array('FieldValue' => null, 'FieldType' => 'string'),
            'SellerOrderId' => array('FieldValue' => null, 'FieldType' => 'string'),
            'MaxResultsPerPage' => array('FieldValue' => null, 'FieldType' => 'int'),
            'TFMShipmentStatus' => array(
                'FieldValue' => array(),
                'FieldType' => array('string'),
                'ListMemberName' => 'Status'
            ),
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
     * Get the value of the MWSAuthToken property.
     *
     * @return String MWSAuthToken.
     */
    public function getMWSAuthToken()
    {
        return $this->_fields['MWSAuthToken']['FieldValue'];
    }

    /**
     * Set the value of the MWSAuthToken property.
     *
     * @param string $value mwsAuthToken
     * @return $this This instance
     */
    public function setMWSAuthToken($value)
    {
        $this->_fields['MWSAuthToken']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MWSAuthToken is set.
     *
     * @return bool True if MWSAuthToken is set.
     */
    public function isSetMWSAuthToken()
    {
        return !is_null($this->_fields['MWSAuthToken']['FieldValue']);
    }

    /**
     * Set the value of MWSAuthToken, return this.
     *
     * @param mwsAuthToken
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withMWSAuthToken($value)
    {
        $this->setMWSAuthToken($value);
        return $this;
    }

    /**
     * Get the value of the CreatedAfter property.
     *
     * @return string CreatedAfter.
     */
    public function getCreatedAfter()
    {
        return $this->_fields['CreatedAfter']['FieldValue'];
    }

    /**
     * Set the value of the CreatedAfter property.
     *
     * @param string $value createdAfter
     * @return $this This instance
     */
    public function setCreatedAfter($value)
    {
        $this->_fields['CreatedAfter']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CreatedAfter is set.
     *
     * @return bool True if CreatedAfter is set.
     */
    public function isSetCreatedAfter()
    {
        return !is_null($this->_fields['CreatedAfter']['FieldValue']);
    }

    /**
     * Set the value of CreatedAfter, return this.
     *
     * @param createdAfter
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withCreatedAfter($value)
    {
        $this->setCreatedAfter($value);
        return $this;
    }

    /**
     * Get the value of the CreatedBefore property.
     *
     * @return string CreatedBefore.
     */
    public function getCreatedBefore()
    {
        return $this->_fields['CreatedBefore']['FieldValue'];
    }

    /**
     * Set the value of the CreatedBefore property.
     *
     * @param string $value createdBefore
     * @return $this This instance
     */
    public function setCreatedBefore($value)
    {
        $this->_fields['CreatedBefore']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if CreatedBefore is set.
     *
     * @return bool True if CreatedBefore is set.
     */
    public function isSetCreatedBefore()
    {
        return !is_null($this->_fields['CreatedBefore']['FieldValue']);
    }

    /**
     * Set the value of CreatedBefore, return this.
     *
     * @param createdBefore
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withCreatedBefore($value)
    {
        $this->setCreatedBefore($value);
        return $this;
    }

    /**
     * Get the value of the LastUpdatedAfter property.
     *
     * @return string LastUpdatedAfter.
     */
    public function getLastUpdatedAfter()
    {
        return $this->_fields['LastUpdatedAfter']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdatedAfter property.
     *
     * @param string $value lastUpdatedAfter
     * @return $this This instance
     */
    public function setLastUpdatedAfter($value)
    {
        $this->_fields['LastUpdatedAfter']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdatedAfter is set.
     *
     * @return bool True if LastUpdatedAfter is set.
     */
    public function isSetLastUpdatedAfter()
    {
        return !is_null($this->_fields['LastUpdatedAfter']['FieldValue']);
    }

    /**
     * Set the value of LastUpdatedAfter, return this.
     *
     * @param lastUpdatedAfter
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withLastUpdatedAfter($value)
    {
        $this->setLastUpdatedAfter($value);
        return $this;
    }

    /**
     * Get the value of the LastUpdatedBefore property.
     *
     * @return string LastUpdatedBefore.
     */
    public function getLastUpdatedBefore()
    {
        return $this->_fields['LastUpdatedBefore']['FieldValue'];
    }

    /**
     * Set the value of the LastUpdatedBefore property.
     *
     * @param string $value lastUpdatedBefore
     * @return $this This instance
     */
    public function setLastUpdatedBefore($value)
    {
        $this->_fields['LastUpdatedBefore']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if LastUpdatedBefore is set.
     *
     * @return bool True if LastUpdatedBefore is set.
     */
    public function isSetLastUpdatedBefore()
    {
        return !is_null($this->_fields['LastUpdatedBefore']['FieldValue']);
    }

    /**
     * Set the value of LastUpdatedBefore, return this.
     *
     * @param lastUpdatedBefore
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withLastUpdatedBefore($value)
    {
        $this->setLastUpdatedBefore($value);
        return $this;
    }

    /**
     * Get the value of the OrderStatus property.
     *
     * @return String[] OrderStatus.
     */
    public function getOrderStatus()
    {
        if ($this->_fields['OrderStatus']['FieldValue'] == null) {
            $this->_fields['OrderStatus']['FieldValue'] = array();
        }
        return $this->_fields['OrderStatus']['FieldValue'];
    }

    /**
     * Set the value of the OrderStatus property.
     *
     * @param array $value orderStatus
     * @return $this This instance
     */
    public function setOrderStatus($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['OrderStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear OrderStatus.
     */
    public function unsetOrderStatus()
    {
        $this->_fields['OrderStatus']['FieldValue'] = array();
    }

    /**
     * Check to see if OrderStatus is set.
     *
     * @return bool True if OrderStatus is set.
     */
    public function isSetOrderStatus()
    {
        return !empty($this->_fields['OrderStatus']['FieldValue']);
    }

    /**
     * Add values for OrderStatus, return this.
     *
     * @param orderStatus
     *             New values to add.
     *
     * @return $this This instance.
     */
    public function withOrderStatus()
    {
        foreach (func_get_args() as $OrderStatus) {
            $this->_fields['OrderStatus']['FieldValue'][] = $OrderStatus;
        }
        return $this;
    }

    /**
     * Get the value of the MarketplaceId property.
     *
     * @return String[] MarketplaceId.
     */
    public function getMarketplaceId()
    {
        if ($this->_fields['MarketplaceId']['FieldValue'] == null) {
            $this->_fields['MarketplaceId']['FieldValue'] = array();
        }
        return $this->_fields['MarketplaceId']['FieldValue'];
    }

    /**
     * Set the value of the MarketplaceId property.
     *
     * @param array $value marketplaceId
     * @return $this This instance
     */
    public function setMarketplaceId($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['MarketplaceId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear MarketplaceId.
     */
    public function unsetMarketplaceId()
    {
        $this->_fields['MarketplaceId']['FieldValue'] = array();
    }

    /**
     * Check to see if MarketplaceId is set.
     *
     * @return bool True if MarketplaceId is set.
     */
    public function isSetMarketplaceId()
    {
        return !empty($this->_fields['MarketplaceId']['FieldValue']);
    }

    /**
     * Add values for MarketplaceId, return this.
     *
     * @param marketplaceId
     *             New values to add.
     *
     * @return $this This instance.
     */
    public function withMarketplaceId()
    {
        foreach (func_get_args() as $MarketplaceId) {
            $this->_fields['MarketplaceId']['FieldValue'][] = $MarketplaceId;
        }
        return $this;
    }

    /**
     * Get the value of the FulfillmentChannel property.
     *
     * @return String[] FulfillmentChannel.
     */
    public function getFulfillmentChannel()
    {
        if ($this->_fields['FulfillmentChannel']['FieldValue'] == null) {
            $this->_fields['FulfillmentChannel']['FieldValue'] = array();
        }
        return $this->_fields['FulfillmentChannel']['FieldValue'];
    }

    /**
     * Set the value of the FulfillmentChannel property.
     *
     * @param array $value fulfillmentChannel
     * @return $this This instance
     */
    public function setFulfillmentChannel($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['FulfillmentChannel']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear FulfillmentChannel.
     */
    public function unsetFulfillmentChannel()
    {
        $this->_fields['FulfillmentChannel']['FieldValue'] = array();
    }

    /**
     * Check to see if FulfillmentChannel is set.
     *
     * @return bool True if FulfillmentChannel is set.
     */
    public function isSetFulfillmentChannel()
    {
        return !empty($this->_fields['FulfillmentChannel']['FieldValue']);
    }

    /**
     * Add values for FulfillmentChannel, return this.
     *
     * @param fulfillmentChannel
     *             New values to add.
     *
     * @return $this This instance.
     */
    public function withFulfillmentChannel()
    {
        foreach (func_get_args() as $FulfillmentChannel) {
            $this->_fields['FulfillmentChannel']['FieldValue'][] = $FulfillmentChannel;
        }
        return $this;
    }

    /**
     * Get the value of the PaymentMethod property.
     *
     * @return String[] PaymentMethod.
     */
    public function getPaymentMethod()
    {
        if ($this->_fields['PaymentMethod']['FieldValue'] == null) {
            $this->_fields['PaymentMethod']['FieldValue'] = array();
        }
        return $this->_fields['PaymentMethod']['FieldValue'];
    }

    /**
     * Set the value of the PaymentMethod property.
     *
     * @param array $value paymentMethod
     * @return $this This instance
     */
    public function setPaymentMethod($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['PaymentMethod']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear PaymentMethod.
     */
    public function unsetPaymentMethod()
    {
        $this->_fields['PaymentMethod']['FieldValue'] = array();
    }

    /**
     * Check to see if PaymentMethod is set.
     *
     * @return bool True if PaymentMethod is set.
     */
    public function isSetPaymentMethod()
    {
        return !empty($this->_fields['PaymentMethod']['FieldValue']);
    }

    /**
     * Add values for PaymentMethod, return this.
     *
     * @param paymentMethod
     *             New values to add.
     *
     * @return $this This instance.
     */
    public function withPaymentMethod()
    {
        foreach (func_get_args() as $PaymentMethod) {
            $this->_fields['PaymentMethod']['FieldValue'][] = $PaymentMethod;
        }
        return $this;
    }

    /**
     * Get the value of the BuyerEmail property.
     *
     * @return String BuyerEmail.
     */
    public function getBuyerEmail()
    {
        return $this->_fields['BuyerEmail']['FieldValue'];
    }

    /**
     * Set the value of the BuyerEmail property.
     *
     * @param string $value buyerEmail
     * @return $this This instance
     */
    public function setBuyerEmail($value)
    {
        $this->_fields['BuyerEmail']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if BuyerEmail is set.
     *
     * @return bool True if BuyerEmail is set.
     */
    public function isSetBuyerEmail()
    {
        return !is_null($this->_fields['BuyerEmail']['FieldValue']);
    }

    /**
     * Set the value of BuyerEmail, return this.
     *
     * @param buyerEmail
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withBuyerEmail($value)
    {
        $this->setBuyerEmail($value);
        return $this;
    }

    /**
     * Get the value of the SellerOrderId property.
     *
     * @return String SellerOrderId.
     */
    public function getSellerOrderId()
    {
        return $this->_fields['SellerOrderId']['FieldValue'];
    }

    /**
     * Set the value of the SellerOrderId property.
     *
     * @param string $value sellerOrderId
     * @return $this This instance
     */
    public function setSellerOrderId($value)
    {
        $this->_fields['SellerOrderId']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if SellerOrderId is set.
     *
     * @return bool True if SellerOrderId is set.
     */
    public function isSetSellerOrderId()
    {
        return !is_null($this->_fields['SellerOrderId']['FieldValue']);
    }

    /**
     * Set the value of SellerOrderId, return this.
     *
     * @param sellerOrderId
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withSellerOrderId($value)
    {
        $this->setSellerOrderId($value);
        return $this;
    }

    /**
     * Get the value of the MaxResultsPerPage property.
     *
     * @return Integer MaxResultsPerPage.
     */
    public function getMaxResultsPerPage()
    {
        return $this->_fields['MaxResultsPerPage']['FieldValue'];
    }

    /**
     * Set the value of the MaxResultsPerPage property.
     *
     * @param int $value maxResultsPerPage
     * @return $this This instance
     */
    public function setMaxResultsPerPage($value)
    {
        $this->_fields['MaxResultsPerPage']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if MaxResultsPerPage is set.
     *
     * @return bool True if MaxResultsPerPage is set.
     */
    public function isSetMaxResultsPerPage()
    {
        return !is_null($this->_fields['MaxResultsPerPage']['FieldValue']);
    }

    /**
     * Set the value of MaxResultsPerPage, return this.
     *
     * @param maxResultsPerPage
     *             The new value to set.
     *
     * @return $this This instance.
     */
    public function withMaxResultsPerPage($value)
    {
        $this->setMaxResultsPerPage($value);
        return $this;
    }

    /**
     * Get the value of the TFMShipmentStatus property.
     *
     * @return String[] TFMShipmentStatus.
     */
    public function getTFMShipmentStatus()
    {
        if ($this->_fields['TFMShipmentStatus']['FieldValue'] == null) {
            $this->_fields['TFMShipmentStatus']['FieldValue'] = array();
        }
        return $this->_fields['TFMShipmentStatus']['FieldValue'];
    }

    /**
     * Set the value of the TFMShipmentStatus property.
     *
     * @param array|string $value tfmShipmentStatus
     * @return $this This instance
     */
    public function setTFMShipmentStatus($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['TFMShipmentStatus']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear TFMShipmentStatus.
     */
    public function unsetTFMShipmentStatus()
    {
        $this->_fields['TFMShipmentStatus']['FieldValue'] = array();
    }

    /**
     * Check to see if TFMShipmentStatus is set.
     *
     * @return bool True if TFMShipmentStatus is set.
     */
    public function isSetTFMShipmentStatus()
    {
        return !empty($this->_fields['TFMShipmentStatus']['FieldValue']);
    }

    /**
     * Add values for TFMShipmentStatus, return this.
     *
     * @param tfmShipmentStatus
     *             New values to add.
     *
     * @return $this This instance.
     */
    public function withTFMShipmentStatus()
    {
        foreach (func_get_args() as $TFMShipmentStatus) {
            $this->_fields['TFMShipmentStatus']['FieldValue'][] = $TFMShipmentStatus;
        }
        return $this;
    }

}
