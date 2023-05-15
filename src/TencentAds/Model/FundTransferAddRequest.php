<?php
/**
 * FundTransferAddRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Marketing API
 *
 * Marketing API
 *
 * OpenAPI spec version: 1.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace TencentAds\Model;

use \ArrayAccess;
use \TencentAds\ObjectSerializer;

/**
 * FundTransferAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FundTransferAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FundTransferAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'int',
        'transferType' => 'string',
        'externalBillNo' => 'string',
        'memo' => 'string',
        'transferTryBest' => 'int',
        'highFrequencyTransfer' => 'int',
        'accountId' => 'int',
        'fundType' => '\TencentAds\Model\AccountTypeMap'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => 'int64',
        'transferType' => null,
        'externalBillNo' => null,
        'memo' => null,
        'transferTryBest' => 'int64',
        'highFrequencyTransfer' => 'int64',
        'accountId' => 'int64',
        'fundType' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'transferType' => 'transfer_type',
        'externalBillNo' => 'external_bill_no',
        'memo' => 'memo',
        'transferTryBest' => 'transfer_try_best',
        'highFrequencyTransfer' => 'high_frequency_transfer',
        'accountId' => 'account_id',
        'fundType' => 'fund_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'transferType' => 'setTransferType',
        'externalBillNo' => 'setExternalBillNo',
        'memo' => 'setMemo',
        'transferTryBest' => 'setTransferTryBest',
        'highFrequencyTransfer' => 'setHighFrequencyTransfer',
        'accountId' => 'setAccountId',
        'fundType' => 'setFundType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'transferType' => 'getTransferType',
        'externalBillNo' => 'getExternalBillNo',
        'memo' => 'getMemo',
        'transferTryBest' => 'getTransferTryBest',
        'highFrequencyTransfer' => 'getHighFrequencyTransfer',
        'accountId' => 'getAccountId',
        'fundType' => 'getFundType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['transferType'] = isset($data['transferType']) ? $data['transferType'] : null;
        $this->container['externalBillNo'] = isset($data['externalBillNo']) ? $data['externalBillNo'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['transferTryBest'] = isset($data['transferTryBest']) ? $data['transferTryBest'] : null;
        $this->container['highFrequencyTransfer'] = isset($data['highFrequencyTransfer']) ? $data['highFrequencyTransfer'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['fundType'] = isset($data['fundType']) ? $data['fundType'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets amount
     *
     * @return int|mixed
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int|mixed $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets transferType
     *
     * @return string|mixed
     */
    public function getTransferType()
    {
        return $this->container['transferType'];
    }

    /**
     * Sets transferType
     *
     * @param string|mixed $transferType transferType
     *
     * @return $this
     */
    public function setTransferType($transferType)
    {
        $this->container['transferType'] = $transferType;

        return $this;
    }

    /**
     * Gets externalBillNo
     *
     * @return string|mixed
     */
    public function getExternalBillNo()
    {
        return $this->container['externalBillNo'];
    }

    /**
     * Sets externalBillNo
     *
     * @param string|mixed $externalBillNo externalBillNo
     *
     * @return $this
     */
    public function setExternalBillNo($externalBillNo)
    {
        $this->container['externalBillNo'] = $externalBillNo;

        return $this;
    }

    /**
     * Gets memo
     *
     * @return string|mixed
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     *
     * @param string|mixed $memo memo
     *
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets transferTryBest
     *
     * @return int|mixed
     */
    public function getTransferTryBest()
    {
        return $this->container['transferTryBest'];
    }

    /**
     * Sets transferTryBest
     *
     * @param int|mixed $transferTryBest transferTryBest
     *
     * @return $this
     */
    public function setTransferTryBest($transferTryBest)
    {
        $this->container['transferTryBest'] = $transferTryBest;

        return $this;
    }

    /**
     * Gets highFrequencyTransfer
     *
     * @return int|mixed
     */
    public function getHighFrequencyTransfer()
    {
        return $this->container['highFrequencyTransfer'];
    }

    /**
     * Sets highFrequencyTransfer
     *
     * @param int|mixed $highFrequencyTransfer highFrequencyTransfer
     *
     * @return $this
     */
    public function setHighFrequencyTransfer($highFrequencyTransfer)
    {
        $this->container['highFrequencyTransfer'] = $highFrequencyTransfer;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return int|mixed
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int|mixed $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets fundType
     *
     * @return \TencentAds\Model\AccountTypeMap|mixed
     */
    public function getFundType()
    {
        return $this->container['fundType'];
    }

    /**
     * Sets fundType
     *
     * @param \TencentAds\Model\AccountTypeMap|mixed $fundType fundType
     *
     * @return $this
     */
    public function setFundType($fundType)
    {
        $this->container['fundType'] = $fundType;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


