<?php
/**
 * SalesReport
 *
 * PHP version 5
 *
 * @category Class
 * @package  iPOS
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * iPOS REST Service
 *
 * Api for connecting to iPOS (FileMaker 16)
 *
 * OpenAPI spec version: 1.0.0
 * Contact: thomas@spysystem.dk
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace iPOS\Model;

use \ArrayAccess;
use \iPOS\ObjectSerializer;

/**
 * SalesReport Class Doc Comment
 *
 * @category Class
 * @package     iPOS
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SalesReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'antal' => 'string',
        'ean' => 'string',
        'sPYAPris' => 'string',
        'uIDatoBon' => 'string',
        'lgIkkePLager' => 'string',
        'sPYRelevant' => 'string',
        'sPYDone' => 'string',
        'idLokation' => 'string',
        'taxStateAmount' => 'string',
        'taxCiyAmount' => 'string',
        'taxStateRate' => 'string',
        'taxCityRate' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'antal' => null,
        'ean' => null,
        'sPYAPris' => null,
        'uIDatoBon' => null,
        'lgIkkePLager' => null,
        'sPYRelevant' => null,
        'sPYDone' => null,
        'idLokation' => null,
        'taxStateAmount' => null,
        'taxCiyAmount' => null,
        'taxStateRate' => null,
        'taxCityRate' => null
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
        'antal' => 'Antal',
        'ean' => 'ean',
        'sPYAPris' => 'SPY_a_pris',
        'uIDatoBon' => 'UI_dato_bon',
        'lgIkkePLager' => 'Læg_ikke_på_lager',
        'sPYRelevant' => 'SPY_relevant',
        'sPYDone' => 'SPY_done',
        'idLokation' => 'id_lokation',
        'taxStateAmount' => 'tax_state_amount',
        'taxCiyAmount' => 'tax_ciy_amount',
        'taxStateRate' => 'tax_state_rate',
        'taxCityRate' => 'tax_city_rate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'antal' => 'setAntal',
        'ean' => 'setEan',
        'sPYAPris' => 'setSPYAPris',
        'uIDatoBon' => 'setUIDatoBon',
        'lgIkkePLager' => 'setLgIkkePLager',
        'sPYRelevant' => 'setSPYRelevant',
        'sPYDone' => 'setSPYDone',
        'idLokation' => 'setIdLokation',
        'taxStateAmount' => 'setTaxStateAmount',
        'taxCiyAmount' => 'setTaxCiyAmount',
        'taxStateRate' => 'setTaxStateRate',
        'taxCityRate' => 'setTaxCityRate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'antal' => 'getAntal',
        'ean' => 'getEan',
        'sPYAPris' => 'getSPYAPris',
        'uIDatoBon' => 'getUIDatoBon',
        'lgIkkePLager' => 'getLgIkkePLager',
        'sPYRelevant' => 'getSPYRelevant',
        'sPYDone' => 'getSPYDone',
        'idLokation' => 'getIdLokation',
        'taxStateAmount' => 'getTaxStateAmount',
        'taxCiyAmount' => 'getTaxCiyAmount',
        'taxStateRate' => 'getTaxStateRate',
        'taxCityRate' => 'getTaxCityRate'
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
        $this->container['antal'] = isset($data['antal']) ? $data['antal'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['sPYAPris'] = isset($data['sPYAPris']) ? $data['sPYAPris'] : null;
        $this->container['uIDatoBon'] = isset($data['uIDatoBon']) ? $data['uIDatoBon'] : null;
        $this->container['lgIkkePLager'] = isset($data['lgIkkePLager']) ? $data['lgIkkePLager'] : null;
        $this->container['sPYRelevant'] = isset($data['sPYRelevant']) ? $data['sPYRelevant'] : null;
        $this->container['sPYDone'] = isset($data['sPYDone']) ? $data['sPYDone'] : null;
        $this->container['idLokation'] = isset($data['idLokation']) ? $data['idLokation'] : null;
        $this->container['taxStateAmount'] = isset($data['taxStateAmount']) ? $data['taxStateAmount'] : null;
        $this->container['taxCiyAmount'] = isset($data['taxCiyAmount']) ? $data['taxCiyAmount'] : null;
        $this->container['taxStateRate'] = isset($data['taxStateRate']) ? $data['taxStateRate'] : null;
        $this->container['taxCityRate'] = isset($data['taxCityRate']) ? $data['taxCityRate'] : null;
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

        return true;
    }


    /**
     * Gets antal
     *
     * @return string
     */
    public function getAntal()
    {
        return $this->container['antal'];
    }

    /**
     * Sets antal
     *
     * @param string $antal antal
     *
     * @return $this
     */
    public function setAntal($antal)
    {
        $this->container['antal'] = $antal;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean ean
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets sPYAPris
     *
     * @return string
     */
    public function getSPYAPris()
    {
        return $this->container['sPYAPris'];
    }

    /**
     * Sets sPYAPris
     *
     * @param string $sPYAPris sPYAPris
     *
     * @return $this
     */
    public function setSPYAPris($sPYAPris)
    {
        $this->container['sPYAPris'] = $sPYAPris;

        return $this;
    }

    /**
     * Gets uIDatoBon
     *
     * @return string
     */
    public function getUIDatoBon()
    {
        return $this->container['uIDatoBon'];
    }

    /**
     * Sets uIDatoBon
     *
     * @param string $uIDatoBon uIDatoBon
     *
     * @return $this
     */
    public function setUIDatoBon($uIDatoBon)
    {
        $this->container['uIDatoBon'] = $uIDatoBon;

        return $this;
    }

    /**
     * Gets lgIkkePLager
     *
     * @return string
     */
    public function getLgIkkePLager()
    {
        return $this->container['lgIkkePLager'];
    }

    /**
     * Sets lgIkkePLager
     *
     * @param string $lgIkkePLager lgIkkePLager
     *
     * @return $this
     */
    public function setLgIkkePLager($lgIkkePLager)
    {
        $this->container['lgIkkePLager'] = $lgIkkePLager;

        return $this;
    }

    /**
     * Gets sPYRelevant
     *
     * @return string
     */
    public function getSPYRelevant()
    {
        return $this->container['sPYRelevant'];
    }

    /**
     * Sets sPYRelevant
     *
     * @param string $sPYRelevant sPYRelevant
     *
     * @return $this
     */
    public function setSPYRelevant($sPYRelevant)
    {
        $this->container['sPYRelevant'] = $sPYRelevant;

        return $this;
    }

    /**
     * Gets sPYDone
     *
     * @return string
     */
    public function getSPYDone()
    {
        return $this->container['sPYDone'];
    }

    /**
     * Sets sPYDone
     *
     * @param string $sPYDone sPYDone
     *
     * @return $this
     */
    public function setSPYDone($sPYDone)
    {
        $this->container['sPYDone'] = $sPYDone;

        return $this;
    }

    /**
     * Gets idLokation
     *
     * @return string
     */
    public function getIdLokation()
    {
        return $this->container['idLokation'];
    }

    /**
     * Sets idLokation
     *
     * @param string $idLokation idLokation
     *
     * @return $this
     */
    public function setIdLokation($idLokation)
    {
        $this->container['idLokation'] = $idLokation;

        return $this;
    }

    /**
     * Gets taxStateAmount
     *
     * @return string
     */
    public function getTaxStateAmount()
    {
        return $this->container['taxStateAmount'];
    }

    /**
     * Sets taxStateAmount
     *
     * @param string $taxStateAmount taxStateAmount
     *
     * @return $this
     */
    public function setTaxStateAmount($taxStateAmount)
    {
        $this->container['taxStateAmount'] = $taxStateAmount;

        return $this;
    }

    /**
     * Gets taxCiyAmount
     *
     * @return string
     */
    public function getTaxCiyAmount()
    {
        return $this->container['taxCiyAmount'];
    }

    /**
     * Sets taxCiyAmount
     *
     * @param string $taxCiyAmount taxCiyAmount
     *
     * @return $this
     */
    public function setTaxCiyAmount($taxCiyAmount)
    {
        $this->container['taxCiyAmount'] = $taxCiyAmount;

        return $this;
    }

    /**
     * Gets taxStateRate
     *
     * @return string
     */
    public function getTaxStateRate()
    {
        return $this->container['taxStateRate'];
    }

    /**
     * Sets taxStateRate
     *
     * @param string $taxStateRate taxStateRate
     *
     * @return $this
     */
    public function setTaxStateRate($taxStateRate)
    {
        $this->container['taxStateRate'] = $taxStateRate;

        return $this;
    }

    /**
     * Gets taxCityRate
     *
     * @return string
     */
    public function getTaxCityRate()
    {
        return $this->container['taxCityRate'];
    }

    /**
     * Sets taxCityRate
     *
     * @param string $taxCityRate taxCityRate
     *
     * @return $this
     */
    public function setTaxCityRate($taxCityRate)
    {
        $this->container['taxCityRate'] = $taxCityRate;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
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
     * @param  integer $offset Offset
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
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
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

