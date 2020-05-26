<?php
/**
 * AdDiagnosisGetCompetePctrPcvrTrendsStruct
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
 * OpenAPI spec version: 1.1
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
 * AdDiagnosisGetCompetePctrPcvrTrendsStruct Class Doc Comment
 *
 * @category Class
 * @description 点击竞争力趋势变化
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AdDiagnosisGetCompetePctrPcvrTrendsStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ad_diagnosis_get_compete_pctr_pcvr_trends_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'score' => 'int',
        'selfAvg' => '\TencentAds\Model\AdDiagnosisGetPointStruct[]',
        'selfChoseAvg' => '\TencentAds\Model\AdDiagnosisGetPointStruct[]',
        'winnerChoseAvg' => '\TencentAds\Model\AdDiagnosisGetPointStruct[]',
        'conclusion' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'score' => 'int64',
        'selfAvg' => null,
        'selfChoseAvg' => null,
        'winnerChoseAvg' => null,
        'conclusion' => null
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
        'score' => 'score',
        'selfAvg' => 'self_avg',
        'selfChoseAvg' => 'self_chose_avg',
        'winnerChoseAvg' => 'winner_chose_avg',
        'conclusion' => 'conclusion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'score' => 'setScore',
        'selfAvg' => 'setSelfAvg',
        'selfChoseAvg' => 'setSelfChoseAvg',
        'winnerChoseAvg' => 'setWinnerChoseAvg',
        'conclusion' => 'setConclusion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'score' => 'getScore',
        'selfAvg' => 'getSelfAvg',
        'selfChoseAvg' => 'getSelfChoseAvg',
        'winnerChoseAvg' => 'getWinnerChoseAvg',
        'conclusion' => 'getConclusion'
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
        $this->container['score'] = isset($data['score']) ? $data['score'] : null;
        $this->container['selfAvg'] = isset($data['selfAvg']) ? $data['selfAvg'] : null;
        $this->container['selfChoseAvg'] = isset($data['selfChoseAvg']) ? $data['selfChoseAvg'] : null;
        $this->container['winnerChoseAvg'] = isset($data['winnerChoseAvg']) ? $data['winnerChoseAvg'] : null;
        $this->container['conclusion'] = isset($data['conclusion']) ? $data['conclusion'] : null;
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
     * Gets score
     *
     * @return int
     */
    public function getScore()
    {
        return $this->container['score'];
    }

    /**
     * Sets score
     *
     * @param int $score score
     *
     * @return $this
     */
    public function setScore($score)
    {
        $this->container['score'] = $score;

        return $this;
    }

    /**
     * Gets selfAvg
     *
     * @return \TencentAds\Model\AdDiagnosisGetPointStruct[]
     */
    public function getSelfAvg()
    {
        return $this->container['selfAvg'];
    }

    /**
     * Sets selfAvg
     *
     * @param \TencentAds\Model\AdDiagnosisGetPointStruct[] $selfAvg selfAvg
     *
     * @return $this
     */
    public function setSelfAvg($selfAvg)
    {
        $this->container['selfAvg'] = $selfAvg;

        return $this;
    }

    /**
     * Gets selfChoseAvg
     *
     * @return \TencentAds\Model\AdDiagnosisGetPointStruct[]
     */
    public function getSelfChoseAvg()
    {
        return $this->container['selfChoseAvg'];
    }

    /**
     * Sets selfChoseAvg
     *
     * @param \TencentAds\Model\AdDiagnosisGetPointStruct[] $selfChoseAvg selfChoseAvg
     *
     * @return $this
     */
    public function setSelfChoseAvg($selfChoseAvg)
    {
        $this->container['selfChoseAvg'] = $selfChoseAvg;

        return $this;
    }

    /**
     * Gets winnerChoseAvg
     *
     * @return \TencentAds\Model\AdDiagnosisGetPointStruct[]
     */
    public function getWinnerChoseAvg()
    {
        return $this->container['winnerChoseAvg'];
    }

    /**
     * Sets winnerChoseAvg
     *
     * @param \TencentAds\Model\AdDiagnosisGetPointStruct[] $winnerChoseAvg winnerChoseAvg
     *
     * @return $this
     */
    public function setWinnerChoseAvg($winnerChoseAvg)
    {
        $this->container['winnerChoseAvg'] = $winnerChoseAvg;

        return $this;
    }

    /**
     * Gets conclusion
     *
     * @return string
     */
    public function getConclusion()
    {
        return $this->container['conclusion'];
    }

    /**
     * Sets conclusion
     *
     * @param string $conclusion conclusion
     *
     * @return $this
     */
    public function setConclusion($conclusion)
    {
        $this->container['conclusion'] = $conclusion;

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


