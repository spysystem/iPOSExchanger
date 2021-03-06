<?php
/**
 * DeliveryLine
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
 * DeliveryLine Class Doc Comment
 *
 * @category Class
 * @package     iPOS
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeliveryLine implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DeliveryLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'idVaremodtagelse' => 'string',
        'idVare' => 'string',
        'antalModtaget' => 'string',
        'eAN' => 'string',
        'kosprisNu' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'idVaremodtagelse' => null,
        'idVare' => null,
        'antalModtaget' => null,
        'eAN' => null,
        'kosprisNu' => null
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
        'idVaremodtagelse' => 'id_varemodtagelse',
        'idVare' => 'id_vare',
        'antalModtaget' => 'Antal_modtaget',
        'eAN' => 'EAN',
        'kosprisNu' => 'Kospris_nu'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'idVaremodtagelse' => 'setIdVaremodtagelse',
        'idVare' => 'setIdVare',
        'antalModtaget' => 'setAntalModtaget',
        'eAN' => 'setEAN',
        'kosprisNu' => 'setKosprisNu'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'idVaremodtagelse' => 'getIdVaremodtagelse',
        'idVare' => 'getIdVare',
        'antalModtaget' => 'getAntalModtaget',
        'eAN' => 'getEAN',
        'kosprisNu' => 'getKosprisNu'
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
        $this->container['idVaremodtagelse'] = isset($data['idVaremodtagelse']) ? $data['idVaremodtagelse'] : null;
        $this->container['idVare'] = isset($data['idVare']) ? $data['idVare'] : null;
        $this->container['antalModtaget'] = isset($data['antalModtaget']) ? $data['antalModtaget'] : null;
        $this->container['eAN'] = isset($data['eAN']) ? $data['eAN'] : null;
        $this->container['kosprisNu'] = isset($data['kosprisNu']) ? $data['kosprisNu'] : null;
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
     * Gets idVaremodtagelse
     *
     * @return string
     */
    public function getIdVaremodtagelse()
    {
        return $this->container['idVaremodtagelse'];
    }

    /**
     * Sets idVaremodtagelse
     *
     * @param string $idVaremodtagelse idVaremodtagelse
     *
     * @return $this
     */
    public function setIdVaremodtagelse($idVaremodtagelse)
    {
        $this->container['idVaremodtagelse'] = $idVaremodtagelse;

        return $this;
    }

    /**
     * Gets idVare
     *
     * @return string
     */
    public function getIdVare()
    {
        return $this->container['idVare'];
    }

    /**
     * Sets idVare
     *
     * @param string $idVare idVare
     *
     * @return $this
     */
    public function setIdVare($idVare)
    {
        $this->container['idVare'] = $idVare;

        return $this;
    }

    /**
     * Gets antalModtaget
     *
     * @return string
     */
    public function getAntalModtaget()
    {
        return $this->container['antalModtaget'];
    }

    /**
     * Sets antalModtaget
     *
     * @param string $antalModtaget antalModtaget
     *
     * @return $this
     */
    public function setAntalModtaget($antalModtaget)
    {
        $this->container['antalModtaget'] = $antalModtaget;

        return $this;
    }

    /**
     * Gets eAN
     *
     * @return string
     */
    public function getEAN()
    {
        return $this->container['eAN'];
    }

    /**
     * Sets eAN
     *
     * @param string $eAN eAN
     *
     * @return $this
     */
    public function setEAN($eAN)
    {
        $this->container['eAN'] = $eAN;

        return $this;
    }

    /**
     * Gets kosprisNu
     *
     * @return string
     */
    public function getKosprisNu()
    {
        return $this->container['kosprisNu'];
    }

    /**
     * Sets kosprisNu
     *
     * @param string $kosprisNu kosprisNu
     *
     * @return $this
     */
    public function setKosprisNu($kosprisNu)
    {
        $this->container['kosprisNu'] = $kosprisNu;

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

