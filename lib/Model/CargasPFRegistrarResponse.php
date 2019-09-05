<?php

namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class CargasPFRegistrarResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'CargasPFRegistrarResponse';
    
    protected static $apihubTypes = [
        'estatus' => '\APIHub\Client\Model\Estatus',
        'advertencias' => '\APIHub\Client\Model\Clave[]',
        'rechazos' => '\APIHub\Client\Model\Clave[]'
    ];
    
    protected static $apihubFormats = [
        'estatus' => null,
        'advertencias' => null,
        'rechazos' => null
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
        'estatus' => 'estatus',
        'advertencias' => 'advertencias',
        'rechazos' => 'rechazos'
    ];
    
    protected static $setters = [
        'estatus' => 'setEstatus',
        'advertencias' => 'setAdvertencias',
        'rechazos' => 'setRechazos'
    ];
    
    protected static $getters = [
        'estatus' => 'getEstatus',
        'advertencias' => 'getAdvertencias',
        'rechazos' => 'getRechazos'
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
        $this->container['estatus'] = isset($data['estatus']) ? $data['estatus'] : null;
        $this->container['advertencias'] = isset($data['advertencias']) ? $data['advertencias'] : null;
        $this->container['rechazos'] = isset($data['rechazos']) ? $data['rechazos'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getEstatus()
    {
        return $this->container['estatus'];
    }
    
    public function setEstatus($estatus)
    {
        $this->container['estatus'] = $estatus;
        return $this;
    }
    
    public function getAdvertencias()
    {
        return $this->container['advertencias'];
    }
    
    public function setAdvertencias($advertencias)
    {
        $this->container['advertencias'] = $advertencias;
        return $this;
    }
    
    public function getRechazos()
    {
        return $this->container['rechazos'];
    }
    
    public function setRechazos($rechazos)
    {
        $this->container['rechazos'] = $rechazos;
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
