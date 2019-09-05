<?php

namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class Persona implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Persona';
    
    protected static $apihubTypes = [
        'nombre' => '\APIHub\Client\Model\Nombre',
        'domicilio' => '\APIHub\Client\Model\Domicilio',
        'empleo' => '\APIHub\Client\Model\Empleo',
        'cuenta' => '\APIHub\Client\Model\Cuenta'
    ];
    
    protected static $apihubFormats = [
        'nombre' => null,
        'domicilio' => null,
        'empleo' => null,
        'cuenta' => null
    ];
    
    public static function swaggerTypes()
    {
        return self::$apihubTypes;
    }
    
    public static function swaggerFormats()
    {
        return self::$apihubFormats;
    }
    
    protected static $attributeMap = [
        'nombre' => 'nombre',
        'domicilio' => 'domicilio',
        'empleo' => 'empleo',
        'cuenta' => 'cuenta'
    ];
    
    protected static $setters = [
        'nombre' => 'setNombre',
        'domicilio' => 'setDomicilio',
        'empleo' => 'setEmpleo',
        'cuenta' => 'setCuenta'
    ];
    
    protected static $getters = [
        'nombre' => 'getNombre',
        'domicilio' => 'getDomicilio',
        'empleo' => 'getEmpleo',
        'cuenta' => 'getCuenta'
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
    
    public function getModelName()
    {
        return self::$apihubModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['domicilio'] = isset($data['domicilio']) ? $data['domicilio'] : null;
        $this->container['empleo'] = isset($data['empleo']) ? $data['empleo'] : null;
        $this->container['cuenta'] = isset($data['cuenta']) ? $data['cuenta'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['nombre'] === null) {
            $invalidProperties[] = "'nombre' can't be null";
        }
        if ($this->container['domicilio'] === null) {
            $invalidProperties[] = "'domicilio' can't be null";
        }
        if ($this->container['empleo'] === null) {
            $invalidProperties[] = "'empleo' can't be null";
        }
        if ($this->container['cuenta'] === null) {
            $invalidProperties[] = "'cuenta' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNombre()
    {
        return $this->container['nombre'];
    }
    
    public function setNombre($nombre)
    {
        $this->container['nombre'] = $nombre;
        return $this;
    }
    
    public function getDomicilio()
    {
        return $this->container['domicilio'];
    }
    
    public function setDomicilio($domicilio)
    {
        $this->container['domicilio'] = $domicilio;
        return $this;
    }
    
    public function getEmpleo()
    {
        return $this->container['empleo'];
    }
    
    public function setEmpleo($empleo)
    {
        $this->container['empleo'] = $empleo;
        return $this;
    }
    
    public function getCuenta()
    {
        return $this->container['cuenta'];
    }
    
    public function setCuenta($cuenta)
    {
        $this->container['cuenta'] = $cuenta;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
