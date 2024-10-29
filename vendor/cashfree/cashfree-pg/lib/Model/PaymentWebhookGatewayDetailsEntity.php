<?php
/**
 * PaymentWebhookGatewayDetailsEntity
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
 * PaymentWebhookGatewayDetailsEntity Class Doc Comment
 *
 * @category Class
 * @description payment gatewat details present in the webhook response
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PaymentWebhookGatewayDetailsEntity implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PaymentWebhookGatewayDetailsEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'gateway_name' => 'string',
        'gateway_order_id' => 'string',
        'gateway_payment_id' => 'string',
        'gateway_status_code' => 'string',
        'gateway_settlement' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'gateway_name' => null,
        'gateway_order_id' => null,
        'gateway_payment_id' => null,
        'gateway_status_code' => null,
        'gateway_settlement' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static $openAPINullables = [
        'gateway_name' => false,
		'gateway_order_id' => false,
		'gateway_payment_id' => false,
		'gateway_status_code' => false,
		'gateway_settlement' => false
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
        'gateway_name' => 'gateway_name',
        'gateway_order_id' => 'gateway_order_id',
        'gateway_payment_id' => 'gateway_payment_id',
        'gateway_status_code' => 'gateway_status_code',
        'gateway_settlement' => 'gateway_settlement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'gateway_name' => 'setGatewayName',
        'gateway_order_id' => 'setGatewayOrderId',
        'gateway_payment_id' => 'setGatewayPaymentId',
        'gateway_status_code' => 'setGatewayStatusCode',
        'gateway_settlement' => 'setGatewaySettlement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'gateway_name' => 'getGatewayName',
        'gateway_order_id' => 'getGatewayOrderId',
        'gateway_payment_id' => 'getGatewayPaymentId',
        'gateway_status_code' => 'getGatewayStatusCode',
        'gateway_settlement' => 'getGatewaySettlement'
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
        $this->setIfExists('gateway_name', $data ?? [], null);
        $this->setIfExists('gateway_order_id', $data ?? [], null);
        $this->setIfExists('gateway_payment_id', $data ?? [], null);
        $this->setIfExists('gateway_status_code', $data ?? [], null);
        $this->setIfExists('gateway_settlement', $data ?? [], null);
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
     * Gets gateway_name
     *
     * @return string|null
     */
    public function getGatewayName()
    {
        return $this->container['gateway_name'];
    }

    /**
     * Sets gateway_name
     *
     * @param string|null $gateway_name gateway_name
     *
     * @return self
     */
    public function setGatewayName($gateway_name)
    {
        if (is_null($gateway_name)) {
            throw new \InvalidArgumentException('non-nullable gateway_name cannot be null');
        }
        $this->container['gateway_name'] = $gateway_name;

        return $this;
    }

    /**
     * Gets gateway_order_id
     *
     * @return string|null
     */
    public function getGatewayOrderId()
    {
        return $this->container['gateway_order_id'];
    }

    /**
     * Sets gateway_order_id
     *
     * @param string|null $gateway_order_id gateway_order_id
     *
     * @return self
     */
    public function setGatewayOrderId($gateway_order_id)
    {
        if (is_null($gateway_order_id)) {
            throw new \InvalidArgumentException('non-nullable gateway_order_id cannot be null');
        }
        $this->container['gateway_order_id'] = $gateway_order_id;

        return $this;
    }

    /**
     * Gets gateway_payment_id
     *
     * @return string|null
     */
    public function getGatewayPaymentId()
    {
        return $this->container['gateway_payment_id'];
    }

    /**
     * Sets gateway_payment_id
     *
     * @param string|null $gateway_payment_id gateway_payment_id
     *
     * @return self
     */
    public function setGatewayPaymentId($gateway_payment_id)
    {
        if (is_null($gateway_payment_id)) {
            throw new \InvalidArgumentException('non-nullable gateway_payment_id cannot be null');
        }
        $this->container['gateway_payment_id'] = $gateway_payment_id;

        return $this;
    }

    /**
     * Gets gateway_status_code
     *
     * @return string|null
     */
    public function getGatewayStatusCode()
    {
        return $this->container['gateway_status_code'];
    }

    /**
     * Sets gateway_status_code
     *
     * @param string|null $gateway_status_code gateway_status_code
     *
     * @return self
     */
    public function setGatewayStatusCode($gateway_status_code)
    {
        if (is_null($gateway_status_code)) {
            throw new \InvalidArgumentException('non-nullable gateway_status_code cannot be null');
        }
        $this->container['gateway_status_code'] = $gateway_status_code;

        return $this;
    }

    /**
     * Gets gateway_settlement
     *
     * @return string|null
     */
    public function getGatewaySettlement()
    {
        return $this->container['gateway_settlement'];
    }

    /**
     * Sets gateway_settlement
     *
     * @param string|null $gateway_settlement gateway_settlement
     *
     * @return self
     */
    public function setGatewaySettlement($gateway_settlement)
    {
        if (is_null($gateway_settlement)) {
            throw new \InvalidArgumentException('non-nullable gateway_settlement cannot be null');
        }
        $this->container['gateway_settlement'] = $gateway_settlement;

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


