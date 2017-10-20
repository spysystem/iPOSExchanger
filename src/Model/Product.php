<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category    Class */
/**
 * @package     iPOS
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Product implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iD' => 'string',
        'eANNr' => 'string',
        'varetekst' => 'string',
        'vareBeskrivelse' => 'string',
        'varenrLeverandr' => 'string',
        'salgspris' => 'string',
        'salgsprisInclMoms' => 'string',
        'kostpris' => 'string',
        'kostprisDKK' => 'string',
        'avanceIKr' => 'string',
        'iDVaregruppe' => 'string',
        'lagerStatusNskes' => 'string',
        'color' => 'string',
        'size' => 'string'
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
        'iD' => 'ID',
        'eANNr' => 'EAN nr',
        'varetekst' => 'Varetekst',
        'vareBeskrivelse' => 'VareBeskrivelse',
        'varenrLeverandr' => 'Varenr_Leverandør',
        'salgspris' => 'Salgspris',
        'salgsprisInclMoms' => 'Salgspris Incl moms',
        'kostpris' => 'Kostpris',
        'kostprisDKK' => 'kostpris_DKK',
        'avanceIKr' => 'Avance i Kr',
        'iDVaregruppe' => 'ID_varegruppe',
        'lagerStatusNskes' => 'Lager Status ønskes',
        'color' => 'Color',
        'size' => 'Size'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'iD' => 'setID',
        'eANNr' => 'setEANNr',
        'varetekst' => 'setVaretekst',
        'vareBeskrivelse' => 'setVareBeskrivelse',
        'varenrLeverandr' => 'setVarenrLeverandr',
        'salgspris' => 'setSalgspris',
        'salgsprisInclMoms' => 'setSalgsprisInclMoms',
        'kostpris' => 'setKostpris',
        'kostprisDKK' => 'setKostprisDKK',
        'avanceIKr' => 'setAvanceIKr',
        'iDVaregruppe' => 'setIDVaregruppe',
        'lagerStatusNskes' => 'setLagerStatusNskes',
        'color' => 'setColor',
        'size' => 'setSize'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'iD' => 'getID',
        'eANNr' => 'getEANNr',
        'varetekst' => 'getVaretekst',
        'vareBeskrivelse' => 'getVareBeskrivelse',
        'varenrLeverandr' => 'getVarenrLeverandr',
        'salgspris' => 'getSalgspris',
        'salgsprisInclMoms' => 'getSalgsprisInclMoms',
        'kostpris' => 'getKostpris',
        'kostprisDKK' => 'getKostprisDKK',
        'avanceIKr' => 'getAvanceIKr',
        'iDVaregruppe' => 'getIDVaregruppe',
        'lagerStatusNskes' => 'getLagerStatusNskes',
        'color' => 'getColor',
        'size' => 'getSize'
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
        $this->container['iD'] = isset($data['iD']) ? $data['iD'] : null;
        $this->container['eANNr'] = isset($data['eANNr']) ? $data['eANNr'] : null;
        $this->container['varetekst'] = isset($data['varetekst']) ? $data['varetekst'] : null;
        $this->container['vareBeskrivelse'] = isset($data['vareBeskrivelse']) ? $data['vareBeskrivelse'] : null;
        $this->container['varenrLeverandr'] = isset($data['varenrLeverandr']) ? $data['varenrLeverandr'] : null;
        $this->container['salgspris'] = isset($data['salgspris']) ? $data['salgspris'] : null;
        $this->container['salgsprisInclMoms'] = isset($data['salgsprisInclMoms']) ? $data['salgsprisInclMoms'] : null;
        $this->container['kostpris'] = isset($data['kostpris']) ? $data['kostpris'] : null;
        $this->container['kostprisDKK'] = isset($data['kostprisDKK']) ? $data['kostprisDKK'] : null;
        $this->container['avanceIKr'] = isset($data['avanceIKr']) ? $data['avanceIKr'] : null;
        $this->container['iDVaregruppe'] = isset($data['iDVaregruppe']) ? $data['iDVaregruppe'] : null;
        $this->container['lagerStatusNskes'] = isset($data['lagerStatusNskes']) ? $data['lagerStatusNskes'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
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
     * Gets iD
     * @return string
     */
    public function getID()
    {
        return $this->container['iD'];
    }

    /**
     * Sets iD
     * @param string $iD ID (= EAN)
     * @return $this
     */
    public function setID($iD)
    {
        $this->container['iD'] = $iD;

        return $this;
    }

    /**
     * Gets eANNr
     * @return string
     */
    public function getEANNr()
    {
        return $this->container['eANNr'];
    }

    /**
     * Sets eANNr
     * @param string $eANNr EAN code
     * @return $this
     */
    public function setEANNr($eANNr)
    {
        $this->container['eANNr'] = $eANNr;

        return $this;
    }

    /**
     * Gets varetekst
     * @return string
     */
    public function getVaretekst()
    {
        return $this->container['varetekst'];
    }

    /**
     * Sets varetekst
     * @param string $varetekst Style Name  + Color + Size (+Assortment)
     * @return $this
     */
    public function setVaretekst($varetekst)
    {
        $this->container['varetekst'] = $varetekst;

        return $this;
    }

    /**
     * Gets vareBeskrivelse
     * @return string
     */
    public function getVareBeskrivelse()
    {
        return $this->container['vareBeskrivelse'];
    }

    /**
     * Sets vareBeskrivelse
     * @param string $vareBeskrivelse Type + Category + Quality + Weight + Country
     * @return $this
     */
    public function setVareBeskrivelse($vareBeskrivelse)
    {
        $this->container['vareBeskrivelse'] = $vareBeskrivelse;

        return $this;
    }

    /**
     * Gets varenrLeverandr
     * @return string
     */
    public function getVarenrLeverandr()
    {
        return $this->container['varenrLeverandr'];
    }

    /**
     * Sets varenrLeverandr
     * @param string $varenrLeverandr Style No
     * @return $this
     */
    public function setVarenrLeverandr($varenrLeverandr)
    {
        $this->container['varenrLeverandr'] = $varenrLeverandr;

        return $this;
    }

    /**
     * Gets salgspris
     * @return string
     */
    public function getSalgspris()
    {
        return $this->container['salgspris'];
    }

    /**
     * Sets salgspris
     * @param string $salgspris Sales Price
     * @return $this
     */
    public function setSalgspris($salgspris)
    {
        $this->container['salgspris'] = $salgspris;

        return $this;
    }

    /**
     * Gets salgsprisInclMoms
     * @return string
     */
    public function getSalgsprisInclMoms()
    {
        return $this->container['salgsprisInclMoms'];
    }

    /**
     * Sets salgsprisInclMoms
     * @param string $salgsprisInclMoms Sales price including taxes
     * @return $this
     */
    public function setSalgsprisInclMoms($salgsprisInclMoms)
    {
        $this->container['salgsprisInclMoms'] = $salgsprisInclMoms;

        return $this;
    }

    /**
     * Gets kostpris
     * @return string
     */
    public function getKostpris()
    {
        return $this->container['kostpris'];
    }

    /**
     * Sets kostpris
     * @param string $kostpris Engross Price customer currency
     * @return $this
     */
    public function setKostpris($kostpris)
    {
        $this->container['kostpris'] = $kostpris;

        return $this;
    }

    /**
     * Gets kostprisDKK
     * @return string
     */
    public function getKostprisDKK()
    {
        return $this->container['kostprisDKK'];
    }

    /**
     * Sets kostprisDKK
     * @param string $kostprisDKK Engross Price DKK
     * @return $this
     */
    public function setKostprisDKK($kostprisDKK)
    {
        $this->container['kostprisDKK'] = $kostprisDKK;

        return $this;
    }

    /**
     * Gets avanceIKr
     * @return string
     */
    public function getAvanceIKr()
    {
        return $this->container['avanceIKr'];
    }

    /**
     * Sets avanceIKr
     * @param string $avanceIKr round(sales price - cost price, 2)
     * @return $this
     */
    public function setAvanceIKr($avanceIKr)
    {
        $this->container['avanceIKr'] = $avanceIKr;

        return $this;
    }

    /**
     * Gets iDVaregruppe
     * @return string
     */
    public function getIDVaregruppe()
    {
        return $this->container['iDVaregruppe'];
    }

    /**
     * Sets iDVaregruppe
     * @param string $iDVaregruppe Spy Group ID
     * @return $this
     */
    public function setIDVaregruppe($iDVaregruppe)
    {
        $this->container['iDVaregruppe'] = $iDVaregruppe;

        return $this;
    }

    /**
     * Gets lagerStatusNskes
     * @return string
     */
    public function getLagerStatusNskes()
    {
        return $this->container['lagerStatusNskes'];
    }

    /**
     * Sets lagerStatusNskes
     * @param string $lagerStatusNskes Always set to 1
     * @return $this
     */
    public function setLagerStatusNskes($lagerStatusNskes)
    {
        $this->container['lagerStatusNskes'] = $lagerStatusNskes;

        return $this;
    }

    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     * @param string $color Color
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets size
     * @return string
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     * @param string $size Color
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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
