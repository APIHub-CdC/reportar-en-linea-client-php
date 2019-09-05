<?php

namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class Encabezado implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Encabezado';
    
    protected static $apihubTypes = [
        'clave_otorgante' => 'string',
        'nombre_otorgante' => 'string'
    ];
    
    protected static $apihubFormats = [
        'clave_otorgante' => null,
        'nombre_otorgante' => null
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
        'clave_otorgante' => 'claveOtorgante',
        'nombre_otorgante' => 'nombreOtorgante'
    ];
    
    protected static $setters = [
        'clave_otorgante' => 'setClaveOtorgante',
        'nombre_otorgante' => 'setNombreOtorgante'
    ];
    
    protected static $getters = [
        'clave_otorgante' => 'getClaveOtorgante',
        'nombre_otorgante' => 'getNombreOtorgante'
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
        $this->container['clave_otorgante'] = isset($data['clave_otorgante']) ? $data['clave_otorgante'] : null;
        $this->container['nombre_otorgante'] = isset($data['nombre_otorgante']) ? $data['nombre_otorgante'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['clave_otorgante']) && (mb_strlen($this->container['clave_otorgante']) > 10)) {
            $invalidProperties[] = "invalid value for 'clave_otorgante', the character length must be smaller than or equal to 10.";
        }
        if (!is_null($this->container['clave_otorgante']) && (mb_strlen($this->container['clave_otorgante']) < 0)) {
            $invalidProperties[] = "invalid value for 'clave_otorgante', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getClaveOtorgante()
    {
        return $this->container['clave_otorgante'];
    }
    
    public function setClaveOtorgante($clave_otorgante)
    {
        if (!is_null($clave_otorgante) && (mb_strlen($clave_otorgante) > 10)) {
            throw new \InvalidArgumentException('invalid length for $clave_otorgante when calling Encabezado., must be smaller than or equal to 10.');
        }
        if (!is_null($clave_otorgante) && (mb_strlen($clave_otorgante) < 0)) {
            throw new \InvalidArgumentException('invalid length for $clave_otorgante when calling Encabezado., must be bigger than or equal to 0.');
        }
        $this->container['clave_otorgante'] = $clave_otorgante;
        return $this;
    }
    
    public function getNombreOtorgante()
    {
        return $this->container['nombre_otorgante'];
    }
    
    public function setNombreOtorgante($nombre_otorgante)
    {
        $this->container['nombre_otorgante'] = $nombre_otorgante;
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
