<?php
/**
 * OfferType
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
use \Cashfree\ObjectSerializer;

/**
 * OfferType Class Doc Comment
 *
 * @category Class
 * @description Offer Type Object
 * @package  Cashfree
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class OfferType
{
    /**
     * Possible values of this enum
     */
    public const DISCOUNT = 'DISCOUNT';

    public const CASHBACK = 'CASHBACK';

    public const DISCOUNT_AND_CASHBACK = 'DISCOUNT_AND_CASHBACK';

    public const NO_COST_EMI = 'NO_COST_EMI';

    public const UNKNOWN_DEFAULT_OPEN_API = 'unknown_default_open_api';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DISCOUNT,
            self::CASHBACK,
            self::DISCOUNT_AND_CASHBACK,
            self::NO_COST_EMI,
            self::UNKNOWN_DEFAULT_OPEN_API
        ];
    }
}

