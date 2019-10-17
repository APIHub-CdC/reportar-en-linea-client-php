<?php

namespace ReportarEnLinea\Client\Model;

use \ArrayAccess;
use \ReportarEnLinea\Client\ObjectSerializer;

class CargasResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'CargasResponse';
    
    protected static $apihubTypes = [
        'estatus' => '\ReportarEnLinea\Client\Model\Estatus'
    ];
    
    protected static $apihubFormats = [
        'estatus' => null
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
        'estatus' => 'estatus'
    ];
    
    protected static $setters = [
        'estatus' => 'setEstatus'
    ];
    
    protected static $getters = [
        'estatus' => 'getEstatus'
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
