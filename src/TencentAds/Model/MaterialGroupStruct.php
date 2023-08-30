<?php
/**
 * MaterialGroupStruct
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
 * MaterialGroupStruct Class Doc Comment
 *
 * @category Class
 * @description 素材信息
 * @package  TencentAds
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class MaterialGroupStruct implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'material_group_struct';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'materialGroupId' => 'int',
        'ratio' => 'string',
        'materialType' => '\TencentAds\Model\TemplateType',
        'materials' => '\TencentAds\Model\MaterialStruct[]',
        'originalCreativeTemplates' => '\TencentAds\Model\DimensionStruct[]',
        'targetCreativeTemplates' => '\TencentAds\Model\DimensionStruct[]',
        'previews' => '\TencentAds\Model\PreviewStruct[]',
        'recommendTemplates' => '\TencentAds\Model\RecommendTemplateStruct[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'materialGroupId' => 'int64',
        'ratio' => null,
        'materialType' => null,
        'materials' => null,
        'originalCreativeTemplates' => null,
        'targetCreativeTemplates' => null,
        'previews' => null,
        'recommendTemplates' => null
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
        'materialGroupId' => 'material_group_id',
        'ratio' => 'ratio',
        'materialType' => 'material_type',
        'materials' => 'materials',
        'originalCreativeTemplates' => 'original_creative_templates',
        'targetCreativeTemplates' => 'target_creative_templates',
        'previews' => 'previews',
        'recommendTemplates' => 'recommend_templates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'materialGroupId' => 'setMaterialGroupId',
        'ratio' => 'setRatio',
        'materialType' => 'setMaterialType',
        'materials' => 'setMaterials',
        'originalCreativeTemplates' => 'setOriginalCreativeTemplates',
        'targetCreativeTemplates' => 'setTargetCreativeTemplates',
        'previews' => 'setPreviews',
        'recommendTemplates' => 'setRecommendTemplates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'materialGroupId' => 'getMaterialGroupId',
        'ratio' => 'getRatio',
        'materialType' => 'getMaterialType',
        'materials' => 'getMaterials',
        'originalCreativeTemplates' => 'getOriginalCreativeTemplates',
        'targetCreativeTemplates' => 'getTargetCreativeTemplates',
        'previews' => 'getPreviews',
        'recommendTemplates' => 'getRecommendTemplates'
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
        $this->container['materialGroupId'] = isset($data['materialGroupId']) ? $data['materialGroupId'] : null;
        $this->container['ratio'] = isset($data['ratio']) ? $data['ratio'] : null;
        $this->container['materialType'] = isset($data['materialType']) ? $data['materialType'] : null;
        $this->container['materials'] = isset($data['materials']) ? $data['materials'] : null;
        $this->container['originalCreativeTemplates'] = isset($data['originalCreativeTemplates']) ? $data['originalCreativeTemplates'] : null;
        $this->container['targetCreativeTemplates'] = isset($data['targetCreativeTemplates']) ? $data['targetCreativeTemplates'] : null;
        $this->container['previews'] = isset($data['previews']) ? $data['previews'] : null;
        $this->container['recommendTemplates'] = isset($data['recommendTemplates']) ? $data['recommendTemplates'] : null;
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
     * Gets materialGroupId
     *
     * @return int|mixed
     */
    public function getMaterialGroupId()
    {
        return $this->container['materialGroupId'];
    }

    /**
     * Sets materialGroupId
     *
     * @param int|mixed $materialGroupId materialGroupId
     *
     * @return $this
     */
    public function setMaterialGroupId($materialGroupId)
    {
        $this->container['materialGroupId'] = $materialGroupId;

        return $this;
    }

    /**
     * Gets ratio
     *
     * @return string|mixed
     */
    public function getRatio()
    {
        return $this->container['ratio'];
    }

    /**
     * Sets ratio
     *
     * @param string|mixed $ratio ratio
     *
     * @return $this
     */
    public function setRatio($ratio)
    {
        $this->container['ratio'] = $ratio;

        return $this;
    }

    /**
     * Gets materialType
     *
     * @return \TencentAds\Model\TemplateType|mixed
     */
    public function getMaterialType()
    {
        return $this->container['materialType'];
    }

    /**
     * Sets materialType
     *
     * @param \TencentAds\Model\TemplateType|mixed $materialType materialType
     *
     * @return $this
     */
    public function setMaterialType($materialType)
    {
        $this->container['materialType'] = $materialType;

        return $this;
    }

    /**
     * Gets materials
     *
     * @return \TencentAds\Model\MaterialStruct[]|mixed
     */
    public function getMaterials()
    {
        return $this->container['materials'];
    }

    /**
     * Sets materials
     *
     * @param \TencentAds\Model\MaterialStruct[]|mixed $materials materials
     *
     * @return $this
     */
    public function setMaterials($materials)
    {
        $this->container['materials'] = $materials;

        return $this;
    }

    /**
     * Gets originalCreativeTemplates
     *
     * @return \TencentAds\Model\DimensionStruct[]|mixed
     */
    public function getOriginalCreativeTemplates()
    {
        return $this->container['originalCreativeTemplates'];
    }

    /**
     * Sets originalCreativeTemplates
     *
     * @param \TencentAds\Model\DimensionStruct[]|mixed $originalCreativeTemplates originalCreativeTemplates
     *
     * @return $this
     */
    public function setOriginalCreativeTemplates($originalCreativeTemplates)
    {
        $this->container['originalCreativeTemplates'] = $originalCreativeTemplates;

        return $this;
    }

    /**
     * Gets targetCreativeTemplates
     *
     * @return \TencentAds\Model\DimensionStruct[]|mixed
     */
    public function getTargetCreativeTemplates()
    {
        return $this->container['targetCreativeTemplates'];
    }

    /**
     * Sets targetCreativeTemplates
     *
     * @param \TencentAds\Model\DimensionStruct[]|mixed $targetCreativeTemplates targetCreativeTemplates
     *
     * @return $this
     */
    public function setTargetCreativeTemplates($targetCreativeTemplates)
    {
        $this->container['targetCreativeTemplates'] = $targetCreativeTemplates;

        return $this;
    }

    /**
     * Gets previews
     *
     * @return \TencentAds\Model\PreviewStruct[]|mixed
     */
    public function getPreviews()
    {
        return $this->container['previews'];
    }

    /**
     * Sets previews
     *
     * @param \TencentAds\Model\PreviewStruct[]|mixed $previews previews
     *
     * @return $this
     */
    public function setPreviews($previews)
    {
        $this->container['previews'] = $previews;

        return $this;
    }

    /**
     * Gets recommendTemplates
     *
     * @return \TencentAds\Model\RecommendTemplateStruct[]|mixed
     */
    public function getRecommendTemplates()
    {
        return $this->container['recommendTemplates'];
    }

    /**
     * Sets recommendTemplates
     *
     * @param \TencentAds\Model\RecommendTemplateStruct[]|mixed $recommendTemplates recommendTemplates
     *
     * @return $this
     */
    public function setRecommendTemplates($recommendTemplates)
    {
        $this->container['recommendTemplates'] = $recommendTemplates;

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


