<?php
/**
 * SalesReport
 *
 * PHP version 5
 *
 * @category Class
 * @package  iPOS
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
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
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace iPOS\Model;

use \ArrayAccess;

/**
 * SalesReport Class Doc Comment
 *
 * @category    Class */
/**
 * @package     iPOS
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class SalesReport implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SalesReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
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
        'idLokation' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
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
        'idLokation' => 'id_lokation'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
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
        'idLokation' => 'setIdLokation'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
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
        'idLokation' => 'getIdLokation'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
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
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets antal
     * @return string
     */
    public function getAntal()
    {
        return $this->container['antal'];
    }

    /**
     * Sets antal
     * @param string $antal
     * @return $this
     */
    public function setAntal($antal)
    {
        $this->container['antal'] = $antal;

        return $this;
    }

    /**
     * Gets ean
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     * @param string $ean
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets sPYAPris
     * @return string
     */
    public function getSPYAPris()
    {
        return $this->container['sPYAPris'];
    }

    /**
     * Sets sPYAPris
     * @param string $sPYAPris
     * @return $this
     */
    public function setSPYAPris($sPYAPris)
    {
        $this->container['sPYAPris'] = $sPYAPris;

        return $this;
    }

    /**
     * Gets uIDatoBon
     * @return string
     */
    public function getUIDatoBon()
    {
        return $this->container['uIDatoBon'];
    }

    /**
     * Sets uIDatoBon
     * @param string $uIDatoBon
     * @return $this
     */
    public function setUIDatoBon($uIDatoBon)
    {
        $this->container['uIDatoBon'] = $uIDatoBon;

        return $this;
    }

    /**
     * Gets lgIkkePLager
     * @return string
     */
    public function getLgIkkePLager()
    {
        return $this->container['lgIkkePLager'];
    }

    /**
     * Sets lgIkkePLager
     * @param string $lgIkkePLager
     * @return $this
     */
    public function setLgIkkePLager($lgIkkePLager)
    {
        $this->container['lgIkkePLager'] = $lgIkkePLager;

        return $this;
    }

    /**
     * Gets sPYRelevant
     * @return string
     */
    public function getSPYRelevant()
    {
        return $this->container['sPYRelevant'];
    }

    /**
     * Sets sPYRelevant
     * @param string $sPYRelevant
     * @return $this
     */
    public function setSPYRelevant($sPYRelevant)
    {
        $this->container['sPYRelevant'] = $sPYRelevant;

        return $this;
    }

    /**
     * Gets sPYDone
     * @return string
     */
    public function getSPYDone()
    {
        return $this->container['sPYDone'];
    }

    /**
     * Sets sPYDone
     * @param string $sPYDone
     * @return $this
     */
    public function setSPYDone($sPYDone)
    {
        $this->container['sPYDone'] = $sPYDone;

        return $this;
    }

    /**
     * Gets idLokation
     * @return string
     */
    public function getIdLokation()
    {
        return $this->container['idLokation'];
    }

    /**
     * Sets idLokation
     * @param string $idLokation
     * @return $this
     */
    public function setIdLokation($idLokation)
    {
        $this->container['idLokation'] = $idLokation;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\iPOS\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\iPOS\ObjectSerializer::sanitizeForSerialization($this));
    }
}
