<?php
/**
 * LinkedTransaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Accounting API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * OpenAPI spec version: 2.2.0
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\Accounting;

use \ArrayAccess;
use \XeroAPI\XeroPHP\AccountingObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * LinkedTransaction Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LinkedTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LinkedTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'source_transaction_id' => 'string',
        'source_line_item_id' => 'string',
        'contact_id' => 'string',
        'target_transaction_id' => 'string',
        'target_line_item_id' => 'string',
        'linked_transaction_id' => 'string',
        'status' => 'string',
        'type' => 'string',
        'updated_date_utc' => 'string',
        'source_transaction_type_code' => 'string',
        'validation_errors' => '\XeroAPI\XeroPHP\Models\Accounting\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'source_transaction_id' => 'uuid',
        'source_line_item_id' => 'uuid',
        'contact_id' => 'uuid',
        'target_transaction_id' => 'uuid',
        'target_line_item_id' => 'uuid',
        'linked_transaction_id' => 'uuid',
        'status' => null,
        'type' => null,
        'updated_date_utc' => null,
        'source_transaction_type_code' => null,
        'validation_errors' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'source_transaction_id' => 'SourceTransactionID',
        'source_line_item_id' => 'SourceLineItemID',
        'contact_id' => 'ContactID',
        'target_transaction_id' => 'TargetTransactionID',
        'target_line_item_id' => 'TargetLineItemID',
        'linked_transaction_id' => 'LinkedTransactionID',
        'status' => 'Status',
        'type' => 'Type',
        'updated_date_utc' => 'UpdatedDateUTC',
        'source_transaction_type_code' => 'SourceTransactionTypeCode',
        'validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'source_transaction_id' => 'setSourceTransactionId',
        'source_line_item_id' => 'setSourceLineItemId',
        'contact_id' => 'setContactId',
        'target_transaction_id' => 'setTargetTransactionId',
        'target_line_item_id' => 'setTargetLineItemId',
        'linked_transaction_id' => 'setLinkedTransactionId',
        'status' => 'setStatus',
        'type' => 'setType',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'source_transaction_type_code' => 'setSourceTransactionTypeCode',
        'validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'source_transaction_id' => 'getSourceTransactionId',
        'source_line_item_id' => 'getSourceLineItemId',
        'contact_id' => 'getContactId',
        'target_transaction_id' => 'getTargetTransactionId',
        'target_line_item_id' => 'getTargetLineItemId',
        'linked_transaction_id' => 'getLinkedTransactionId',
        'status' => 'getStatus',
        'type' => 'getType',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'source_transaction_type_code' => 'getSourceTransactionTypeCode',
        'validation_errors' => 'getValidationErrors'
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

    const STATUS_APPROVED = 'APPROVED';
    const STATUS_DRAFT = 'DRAFT';
    const STATUS_ONDRAFT = 'ONDRAFT';
    const STATUS_BILLED = 'BILLED';
    const STATUS_VOIDED = 'VOIDED';
    const TYPE_BILLABLEEXPENSE = 'BILLABLEEXPENSE';
    const SOURCE_TRANSACTION_TYPE_CODE_ACCPAY = 'ACCPAY';
    const SOURCE_TRANSACTION_TYPE_CODE_SPEND = 'SPEND';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_APPROVED,
            self::STATUS_DRAFT,
            self::STATUS_ONDRAFT,
            self::STATUS_BILLED,
            self::STATUS_VOIDED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_BILLABLEEXPENSE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSourceTransactionTypeCodeAllowableValues()
    {
        return [
            self::SOURCE_TRANSACTION_TYPE_CODE_ACCPAY,
            self::SOURCE_TRANSACTION_TYPE_CODE_SPEND,
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
        $this->container['source_transaction_id'] = isset($data['source_transaction_id']) ? $data['source_transaction_id'] : null;
        $this->container['source_line_item_id'] = isset($data['source_line_item_id']) ? $data['source_line_item_id'] : null;
        $this->container['contact_id'] = isset($data['contact_id']) ? $data['contact_id'] : null;
        $this->container['target_transaction_id'] = isset($data['target_transaction_id']) ? $data['target_transaction_id'] : null;
        $this->container['target_line_item_id'] = isset($data['target_line_item_id']) ? $data['target_line_item_id'] : null;
        $this->container['linked_transaction_id'] = isset($data['linked_transaction_id']) ? $data['linked_transaction_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['source_transaction_type_code'] = isset($data['source_transaction_type_code']) ? $data['source_transaction_type_code'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSourceTransactionTypeCodeAllowableValues();
        if (!is_null($this->container['source_transaction_type_code']) && !in_array($this->container['source_transaction_type_code'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'source_transaction_type_code', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets source_transaction_id
     *
     * @return string|null
     */
    public function getSourceTransactionId()
    {
        return $this->container['source_transaction_id'];
    }

    /**
     * Sets source_transaction_id
     *
     * @param string|null $source_transaction_id Filter by the SourceTransactionID. Get all the linked transactions created from a particular ACCPAY invoice
     *
     * @return $this
     */
    public function setSourceTransactionId($source_transaction_id)
    {

        $this->container['source_transaction_id'] = $source_transaction_id;

        return $this;
    }



    /**
     * Gets source_line_item_id
     *
     * @return string|null
     */
    public function getSourceLineItemId()
    {
        return $this->container['source_line_item_id'];
    }

    /**
     * Sets source_line_item_id
     *
     * @param string|null $source_line_item_id The line item identifier from the source transaction.
     *
     * @return $this
     */
    public function setSourceLineItemId($source_line_item_id)
    {

        $this->container['source_line_item_id'] = $source_line_item_id;

        return $this;
    }



    /**
     * Gets contact_id
     *
     * @return string|null
     */
    public function getContactId()
    {
        return $this->container['contact_id'];
    }

    /**
     * Sets contact_id
     *
     * @param string|null $contact_id Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     *
     * @return $this
     */
    public function setContactId($contact_id)
    {

        $this->container['contact_id'] = $contact_id;

        return $this;
    }



    /**
     * Gets target_transaction_id
     *
     * @return string|null
     */
    public function getTargetTransactionId()
    {
        return $this->container['target_transaction_id'];
    }

    /**
     * Sets target_transaction_id
     *
     * @param string|null $target_transaction_id Filter by the TargetTransactionID. Get all the linked transactions  allocated to a particular ACCREC invoice
     *
     * @return $this
     */
    public function setTargetTransactionId($target_transaction_id)
    {

        $this->container['target_transaction_id'] = $target_transaction_id;

        return $this;
    }



    /**
     * Gets target_line_item_id
     *
     * @return string|null
     */
    public function getTargetLineItemId()
    {
        return $this->container['target_line_item_id'];
    }

    /**
     * Sets target_line_item_id
     *
     * @param string|null $target_line_item_id The line item identifier from the target transaction. It is possible  to link multiple billable expenses to the same TargetLineItemID.
     *
     * @return $this
     */
    public function setTargetLineItemId($target_line_item_id)
    {

        $this->container['target_line_item_id'] = $target_line_item_id;

        return $this;
    }



    /**
     * Gets linked_transaction_id
     *
     * @return string|null
     */
    public function getLinkedTransactionId()
    {
        return $this->container['linked_transaction_id'];
    }

    /**
     * Sets linked_transaction_id
     *
     * @param string|null $linked_transaction_id The Xero identifier for an Linked Transaction e.g./LinkedTransactions/297c2dc5-cc47-4afd-8ec8-74990b8761e9
     *
     * @return $this
     */
    public function setLinkedTransactionId($linked_transaction_id)
    {

        $this->container['linked_transaction_id'] = $linked_transaction_id;

        return $this;
    }



    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status Filter by the combination of ContactID and Status. Get all the linked transactions that have been assigned to a particular customer and have a particular status e.g. GET /LinkedTransactions?ContactID=4bb34b03-3378-4bb2-a0ed-6345abf3224e&Status=APPROVED.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['status'] = $status;

        return $this;
    }



    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type This will always be BILLABLEEXPENSE. More types may be added in future.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['type'] = $type;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return string|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }
    public function getUpdatedDateUtcAsDate()
    {
      if ($this->getUpdatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getUpdatedDateUtc());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets updated_date_utc
     *
     * @param string|null $updated_date_utc The last modified date in UTC format
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets source_transaction_type_code
     *
     * @return string|null
     */
    public function getSourceTransactionTypeCode()
    {
        return $this->container['source_transaction_type_code'];
    }

    /**
     * Sets source_transaction_type_code
     *
     * @param string|null $source_transaction_type_code The Type of the source tranasction. This will be ACCPAY if the linked transaction was created from an invoice and SPEND if it was created from a bank transaction.
     *
     * @return $this
     */
    public function setSourceTransactionTypeCode($source_transaction_type_code)
    {
        $allowedValues = $this->getSourceTransactionTypeCodeAllowableValues();
        if (!is_null($source_transaction_type_code) && !in_array($source_transaction_type_code, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'source_transaction_type_code', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['source_transaction_type_code'] = $source_transaction_type_code;

        return $this;
    }



    /**
     * Gets validation_errors
     *
     * @return \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \XeroAPI\XeroPHP\Models\Accounting\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {

        $this->container['validation_errors'] = $validation_errors;

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
        return json_encode(
            AccountingObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


