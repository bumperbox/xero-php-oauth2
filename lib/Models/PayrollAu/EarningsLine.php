<?php
/**
 * EarningsLine
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
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

namespace XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * EarningsLine Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class EarningsLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EarningsLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'earnings_rate_id' => 'string',
        'calculation_type' => '\XeroAPI\XeroPHP\Models\PayrollAu\EarningsRateCalculationType',
        'annual_salary' => 'double',
        'number_of_units_per_week' => 'double',
        'rate_per_unit' => 'double',
        'normal_number_of_units' => 'double',
        'amount' => 'double',
        'number_of_units' => 'double',
        'fixed_amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'earnings_rate_id' => 'uuid',
        'calculation_type' => null,
        'annual_salary' => 'double',
        'number_of_units_per_week' => 'double',
        'rate_per_unit' => 'double',
        'normal_number_of_units' => 'double',
        'amount' => 'double',
        'number_of_units' => 'double',
        'fixed_amount' => 'double'
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
        'earnings_rate_id' => 'EarningsRateID',
        'calculation_type' => 'CalculationType',
        'annual_salary' => 'AnnualSalary',
        'number_of_units_per_week' => 'NumberOfUnitsPerWeek',
        'rate_per_unit' => 'RatePerUnit',
        'normal_number_of_units' => 'NormalNumberOfUnits',
        'amount' => 'Amount',
        'number_of_units' => 'NumberOfUnits',
        'fixed_amount' => 'FixedAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'earnings_rate_id' => 'setEarningsRateId',
        'calculation_type' => 'setCalculationType',
        'annual_salary' => 'setAnnualSalary',
        'number_of_units_per_week' => 'setNumberOfUnitsPerWeek',
        'rate_per_unit' => 'setRatePerUnit',
        'normal_number_of_units' => 'setNormalNumberOfUnits',
        'amount' => 'setAmount',
        'number_of_units' => 'setNumberOfUnits',
        'fixed_amount' => 'setFixedAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'earnings_rate_id' => 'getEarningsRateId',
        'calculation_type' => 'getCalculationType',
        'annual_salary' => 'getAnnualSalary',
        'number_of_units_per_week' => 'getNumberOfUnitsPerWeek',
        'rate_per_unit' => 'getRatePerUnit',
        'normal_number_of_units' => 'getNormalNumberOfUnits',
        'amount' => 'getAmount',
        'number_of_units' => 'getNumberOfUnits',
        'fixed_amount' => 'getFixedAmount'
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
        $this->container['earnings_rate_id'] = isset($data['earnings_rate_id']) ? $data['earnings_rate_id'] : null;
        $this->container['calculation_type'] = isset($data['calculation_type']) ? $data['calculation_type'] : null;
        $this->container['annual_salary'] = isset($data['annual_salary']) ? $data['annual_salary'] : null;
        $this->container['number_of_units_per_week'] = isset($data['number_of_units_per_week']) ? $data['number_of_units_per_week'] : null;
        $this->container['rate_per_unit'] = isset($data['rate_per_unit']) ? $data['rate_per_unit'] : null;
        $this->container['normal_number_of_units'] = isset($data['normal_number_of_units']) ? $data['normal_number_of_units'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['number_of_units'] = isset($data['number_of_units']) ? $data['number_of_units'] : null;
        $this->container['fixed_amount'] = isset($data['fixed_amount']) ? $data['fixed_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['earnings_rate_id'] === null) {
            $invalidProperties[] = "'earnings_rate_id' can't be null";
        }
        if ($this->container['calculation_type'] === null) {
            $invalidProperties[] = "'calculation_type' can't be null";
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
     * Gets earnings_rate_id
     *
     * @return string
     */
    public function getEarningsRateId()
    {
        return $this->container['earnings_rate_id'];
    }

    /**
     * Sets earnings_rate_id
     *
     * @param string $earnings_rate_id Xero unique id for earnings rate
     *
     * @return $this
     */
    public function setEarningsRateId($earnings_rate_id)
    {

        $this->container['earnings_rate_id'] = $earnings_rate_id;

        return $this;
    }



    /**
     * Gets calculation_type
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\EarningsRateCalculationType
     */
    public function getCalculationType()
    {
        return $this->container['calculation_type'];
    }

    /**
     * Sets calculation_type
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\EarningsRateCalculationType $calculation_type calculation_type
     *
     * @return $this
     */
    public function setCalculationType($calculation_type)
    {

        $this->container['calculation_type'] = $calculation_type;

        return $this;
    }



    /**
     * Gets annual_salary
     *
     * @return double|null
     */
    public function getAnnualSalary()
    {
        return $this->container['annual_salary'];
    }

    /**
     * Sets annual_salary
     *
     * @param double|null $annual_salary Annual salary for earnings line
     *
     * @return $this
     */
    public function setAnnualSalary($annual_salary)
    {

        $this->container['annual_salary'] = $annual_salary;

        return $this;
    }



    /**
     * Gets number_of_units_per_week
     *
     * @return double|null
     */
    public function getNumberOfUnitsPerWeek()
    {
        return $this->container['number_of_units_per_week'];
    }

    /**
     * Sets number_of_units_per_week
     *
     * @param double|null $number_of_units_per_week number of units for earning line
     *
     * @return $this
     */
    public function setNumberOfUnitsPerWeek($number_of_units_per_week)
    {

        $this->container['number_of_units_per_week'] = $number_of_units_per_week;

        return $this;
    }



    /**
     * Gets rate_per_unit
     *
     * @return double|null
     */
    public function getRatePerUnit()
    {
        return $this->container['rate_per_unit'];
    }

    /**
     * Sets rate_per_unit
     *
     * @param double|null $rate_per_unit Rate per unit of the EarningsLine.
     *
     * @return $this
     */
    public function setRatePerUnit($rate_per_unit)
    {

        $this->container['rate_per_unit'] = $rate_per_unit;

        return $this;
    }



    /**
     * Gets normal_number_of_units
     *
     * @return double|null
     */
    public function getNormalNumberOfUnits()
    {
        return $this->container['normal_number_of_units'];
    }

    /**
     * Sets normal_number_of_units
     *
     * @param double|null $normal_number_of_units Normal number of units for EarningsLine. Applicable when RateType is \"MULTIPLE\"
     *
     * @return $this
     */
    public function setNormalNumberOfUnits($normal_number_of_units)
    {

        $this->container['normal_number_of_units'] = $normal_number_of_units;

        return $this;
    }



    /**
     * Gets amount
     *
     * @return double|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double|null $amount Earnings rate amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {

        $this->container['amount'] = $amount;

        return $this;
    }



    /**
     * Gets number_of_units
     *
     * @return double|null
     */
    public function getNumberOfUnits()
    {
        return $this->container['number_of_units'];
    }

    /**
     * Sets number_of_units
     *
     * @param double|null $number_of_units Earnings rate number of units.
     *
     * @return $this
     */
    public function setNumberOfUnits($number_of_units)
    {

        $this->container['number_of_units'] = $number_of_units;

        return $this;
    }



    /**
     * Gets fixed_amount
     *
     * @return double|null
     */
    public function getFixedAmount()
    {
        return $this->container['fixed_amount'];
    }

    /**
     * Sets fixed_amount
     *
     * @param double|null $fixed_amount Earnings rate amount. Only applicable if the EarningsRate RateType is Fixed
     *
     * @return $this
     */
    public function setFixedAmount($fixed_amount)
    {

        $this->container['fixed_amount'] = $fixed_amount;

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
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


