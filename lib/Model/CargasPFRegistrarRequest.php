<?php

namespace ReportarEnLinea\Client\Model;

use \ArrayAccess;
use \ReportarEnLinea\Client\ObjectSerializer;

class CargasPFRegistrarRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'CargasPFRegistrarRequest';
    
    protected static $apihubTypes = [
        'encabezado' => '\ReportarEnLinea\Client\Model\Encabezado',
        'persona' => '\ReportarEnLinea\Client\Model\Persona'
    ];
    
    protected static $apihubFormats = [
        'encabezado' => null,
        'persona' => null
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
        'encabezado' => 'encabezado',
        'persona' => 'persona'
    ];
    
    protected static $setters = [
        'encabezado' => 'setEncabezado',
        'persona' => 'setPersona'
    ];
    
    protected static $getters = [
        'encabezado' => 'getEncabezado',
        'persona' => 'getPersona'
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
        $this->container['encabezado'] = isset($data['encabezado']) ? $data['encabezado'] : null;
        $this->container['persona'] = isset($data['persona']) ? $data['persona'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['encabezado'] === null) {
            $invalidProperties[] = "'encabezado' can't be null";
        }
        if ($this->container['persona'] === null) {
            $invalidProperties[] = "'persona' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getEncabezado()
    {
        return $this->container['encabezado'];
    }
    
    public function setEncabezado($encabezado)
    {
        $this->container['encabezado'] = $encabezado;
        return $this;
    }
    
    public function getPersona()
    {
        return $this->container['persona'];
    }
    
    public function setPersona($persona)
    {
        $this->container['persona'] = $persona;
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
