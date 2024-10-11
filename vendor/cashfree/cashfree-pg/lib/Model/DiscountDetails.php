<?php
/**
 * DiscountDetails
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Cashfree Payment Gateway APIs
 *
 * Cashfree's Payment Gateway APIs provide developers with a streamlined pathway to integrate advanced payment processing capabilities into their applications, platforms and websites.
 *
 * The version of the OpenAPI document: 2023-08-01
 * Contact: developers@cashfree.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Cashfree\Model;

use \ArrayAccess;
use \Cashfree\ObjectSerializer;

/**
 * DiscountDetails Class Doc Comment
 *
 * @category Class
 * @description detils of the discount object of offer
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DiscountDetails implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DiscountDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'discount_type' => 'string',
        'discount_value' => 'float',
        'max_discount_amount' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'discount_type' => null,
        'discount_value' => 'float64',
        'max_discount_amount' => 'float64'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'discount_type' => false,
		'discount_value' => false,
		'max_discount_amount' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'discount_type' => 'discount_type',
        'discount_value' => 'discount_value',
        'max_discount_amount' => 'max_discount_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'discount_type' => 'setDiscountType',
        'discount_value' => 'setDiscountValue',
        'max_discount_amount' => 'setMaxDiscountAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'discount_type' => 'getDiscountType',
        'discount_value' => 'getDiscountValue',
        'max_discount_amount' => 'getMaxDiscountAmount'
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
        return self::$openAPIModelName;
    }

    public const DISCOUNT_TYPE_FLAT = 'flat';
    public const DISCOUNT_TYPE_PERCENTAGE = 'percentage';
    public const DISCOUNT_TYPE_UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDiscountTypeAllowableValues()
    {
        return [
            self::DISCOUNT_TYPE_FLAT,
            self::DISCOUNT_TYPE_PERCENTAGE,
            self::DISCOUNT_TYPE_UNKNOWN_DEFAULT_OPEN_API,
        ];
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
        $this->setIfExists('discount_type', $data ?? [], null);
        $this->setIfExists('discount_value', $data ?? [], null);
        $this->setIfExists('max_discount_amount', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['discount_type'] === null) {
            $invalidProperties[] = "'discount_type' can't be null";
        }
        $allowedValues = $this->getDiscountTypeAllowableValues();
        if (!is_null($this->container['discount_type']) && !in_array($this->container['discount_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'discount_type', must be one of '%s'",
                $this->container['discount_type'],
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['discount_type']) > 50)) {
            $invalidProperties[] = "invalid value for 'discount_type', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['discount_type']) < 3)) {
            $invalidProperties[] = "invalid value for 'discount_type', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['discount_value'] === null) {
            $invalidProperties[] = "'discount_value' can't be null";
        }
        if ($this->container['max_discount_amount'] === null) {
            $invalidProperties[] = "'max_discount_amount' can't be null";
        }
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
     * Gets discount_type
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->container['discount_type'];
    }

    /**
     * Sets discount_type
     *
     * @param string $discount_type Type of discount
     *
     * @return self
     */
    public function setDiscountType($discount_type)
    {
        if (is_null($discount_type)) {
            throw new \InvalidArgumentException('non-nullable discount_type cannot be null');
        }
        $allowedValues = $this->getDiscountTypeAllowableValues();
        if (!in_array($discount_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'discount_type', must be one of '%s'",
                    $discount_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($discount_type) > 50)) {
            throw new \InvalidArgumentException('invalid length for $discount_type when calling DiscountDetails., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($discount_type) < 3)) {
            throw new \InvalidArgumentException('invalid length for $discount_type when calling DiscountDetails., must be bigger than or equal to 3.');
        }

        $this->container['discount_type'] = $discount_type;

        return $this;
    }

    /**
     * Gets discount_value
     *
     * @return float
     */
    public function getDiscountValue()
    {
        return $this->container['discount_value'];
    }

    /**
     * Sets discount_value
     *
     * @param float $discount_value Value of Discount.
     *
     * @return self
     */
    public function setDiscountValue($discount_value)
    {
        if (is_null($discount_value)) {
            throw new \InvalidArgumentException('non-nullable discount_value cannot be null');
        }
        $this->container['discount_value'] = $discount_value;

        return $this;
    }

    /**
     * Gets max_discount_amount
     *
     * @return float
     */
    public function getMaxDiscountAmount()
    {
        return $this->container['max_discount_amount'];
    }

    /**
     * Sets max_discount_amount
     *
     * @param float $max_discount_amount Maximum Value of Discount allowed.
     *
     * @return self
     */
    public function setMaxDiscountAmount($max_discount_amount)
    {
        if (is_null($max_discount_amount)) {
            throw new \InvalidArgumentException('non-nullable max_discount_amount cannot be null');
        }
        $this->container['max_discount_amount'] = $max_discount_amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


