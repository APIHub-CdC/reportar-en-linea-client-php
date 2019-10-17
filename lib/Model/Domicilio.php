<?php

namespace ReportarEnLinea\Client\Model;

use \ArrayAccess;
use \ReportarEnLinea\Client\ObjectSerializer;

class Domicilio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Domicilio';
    
    protected static $apihubTypes = [
        'direccion' => 'string',
        'colonia_poblacion' => 'string',
        'delegacion_municipio' => 'string',
        'ciudad' => 'string',
        'estado' => 'string',
        'estado_extranjero' => 'string',
        'cp' => 'string',
        'fecha_residencia' => 'string',
        'numero_celular' => 'string',
        'numero_telefono' => 'string',
        'extension' => 'string',
        'fax' => 'string',
        'tipo_domicilio' => 'string',
        'tipo_asentamiento' => 'string',
        'origen_domicilio' => 'string'
    ];
    
    protected static $apihubFormats = [
        'direccion' => null,
        'colonia_poblacion' => null,
        'delegacion_municipio' => null,
        'ciudad' => null,
        'estado' => null,
        'estado_extranjero' => null,
        'cp' => null,
        'fecha_residencia' => null,
        'numero_celular' => null,
        'numero_telefono' => null,
        'extension' => null,
        'fax' => null,
        'tipo_domicilio' => null,
        'tipo_asentamiento' => null,
        'origen_domicilio' => null
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
        'direccion' => 'direccion',
        'colonia_poblacion' => 'coloniaPoblacion',
        'delegacion_municipio' => 'delegacionMunicipio',
        'ciudad' => 'ciudad',
        'estado' => 'estado',
        'estado_extranjero' => 'estadoExtranjero',
        'cp' => 'cp',
        'fecha_residencia' => 'fechaResidencia',
        'numero_celular' => 'numeroCelular',
        'numero_telefono' => 'numeroTelefono',
        'extension' => 'extension',
        'fax' => 'fax',
        'tipo_domicilio' => 'tipoDomicilio',
        'tipo_asentamiento' => 'tipoAsentamiento',
        'origen_domicilio' => 'origenDomicilio'
    ];
    
    protected static $setters = [
        'direccion' => 'setDireccion',
        'colonia_poblacion' => 'setColoniaPoblacion',
        'delegacion_municipio' => 'setDelegacionMunicipio',
        'ciudad' => 'setCiudad',
        'estado' => 'setEstado',
        'estado_extranjero' => 'setEstadoExtranjero',
        'cp' => 'setCp',
        'fecha_residencia' => 'setFechaResidencia',
        'numero_celular' => 'setNumeroCelular',
        'numero_telefono' => 'setNumeroTelefono',
        'extension' => 'setExtension',
        'fax' => 'setFax',
        'tipo_domicilio' => 'setTipoDomicilio',
        'tipo_asentamiento' => 'setTipoAsentamiento',
        'origen_domicilio' => 'setOrigenDomicilio'
    ];
    
    protected static $getters = [
        'direccion' => 'getDireccion',
        'colonia_poblacion' => 'getColoniaPoblacion',
        'delegacion_municipio' => 'getDelegacionMunicipio',
        'ciudad' => 'getCiudad',
        'estado' => 'getEstado',
        'estado_extranjero' => 'getEstadoExtranjero',
        'cp' => 'getCp',
        'fecha_residencia' => 'getFechaResidencia',
        'numero_celular' => 'getNumeroCelular',
        'numero_telefono' => 'getNumeroTelefono',
        'extension' => 'getExtension',
        'fax' => 'getFax',
        'tipo_domicilio' => 'getTipoDomicilio',
        'tipo_asentamiento' => 'getTipoAsentamiento',
        'origen_domicilio' => 'getOrigenDomicilio'
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
        $this->container['direccion'] = isset($data['direccion']) ? $data['direccion'] : null;
        $this->container['colonia_poblacion'] = isset($data['colonia_poblacion']) ? $data['colonia_poblacion'] : null;
        $this->container['delegacion_municipio'] = isset($data['delegacion_municipio']) ? $data['delegacion_municipio'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
        $this->container['estado_extranjero'] = isset($data['estado_extranjero']) ? $data['estado_extranjero'] : null;
        $this->container['cp'] = isset($data['cp']) ? $data['cp'] : null;
        $this->container['fecha_residencia'] = isset($data['fecha_residencia']) ? $data['fecha_residencia'] : null;
        $this->container['numero_celular'] = isset($data['numero_celular']) ? $data['numero_celular'] : null;
        $this->container['numero_telefono'] = isset($data['numero_telefono']) ? $data['numero_telefono'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['tipo_domicilio'] = isset($data['tipo_domicilio']) ? $data['tipo_domicilio'] : null;
        $this->container['tipo_asentamiento'] = isset($data['tipo_asentamiento']) ? $data['tipo_asentamiento'] : null;
        $this->container['origen_domicilio'] = isset($data['origen_domicilio']) ? $data['origen_domicilio'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['direccion']) && (mb_strlen($this->container['direccion']) > 80)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be smaller than or equal to 80.";
        }
        if (!is_null($this->container['direccion']) && (mb_strlen($this->container['direccion']) < 0)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['colonia_poblacion']) && (mb_strlen($this->container['colonia_poblacion']) > 65)) {
            $invalidProperties[] = "invalid value for 'colonia_poblacion', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['colonia_poblacion']) && (mb_strlen($this->container['colonia_poblacion']) < 0)) {
            $invalidProperties[] = "invalid value for 'colonia_poblacion', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['delegacion_municipio']) && (mb_strlen($this->container['delegacion_municipio']) > 65)) {
            $invalidProperties[] = "invalid value for 'delegacion_municipio', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['delegacion_municipio']) && (mb_strlen($this->container['delegacion_municipio']) < 0)) {
            $invalidProperties[] = "invalid value for 'delegacion_municipio', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['ciudad']) && (mb_strlen($this->container['ciudad']) > 65)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be smaller than or equal to 65.";
        }
        if (!is_null($this->container['ciudad']) && (mb_strlen($this->container['ciudad']) < 0)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['estado']) && (mb_strlen($this->container['estado']) > 4)) {
            $invalidProperties[] = "invalid value for 'estado', the character length must be smaller than or equal to 4.";
        }
        if (!is_null($this->container['estado']) && (mb_strlen($this->container['estado']) < 0)) {
            $invalidProperties[] = "invalid value for 'estado', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['estado_extranjero']) && (mb_strlen($this->container['estado_extranjero']) > 0)) {
            $invalidProperties[] = "invalid value for 'estado_extranjero', the character length must be smaller than or equal to 0.";
        }
        if (!is_null($this->container['estado_extranjero']) && (mb_strlen($this->container['estado_extranjero']) < 0)) {
            $invalidProperties[] = "invalid value for 'estado_extranjero', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['cp']) && (mb_strlen($this->container['cp']) > 5)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be smaller than or equal to 5.";
        }
        if (!is_null($this->container['cp']) && (mb_strlen($this->container['cp']) < 0)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_residencia']) && (mb_strlen($this->container['fecha_residencia']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_residencia', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_residencia']) && (mb_strlen($this->container['fecha_residencia']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_residencia', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['numero_celular']) && (mb_strlen($this->container['numero_celular']) > 20)) {
            $invalidProperties[] = "invalid value for 'numero_celular', the character length must be smaller than or equal to 20.";
        }
        if (!is_null($this->container['numero_celular']) && (mb_strlen($this->container['numero_celular']) < 0)) {
            $invalidProperties[] = "invalid value for 'numero_celular', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['numero_telefono']) && (mb_strlen($this->container['numero_telefono']) > 20)) {
            $invalidProperties[] = "invalid value for 'numero_telefono', the character length must be smaller than or equal to 20.";
        }
        if (!is_null($this->container['numero_telefono']) && (mb_strlen($this->container['numero_telefono']) < 0)) {
            $invalidProperties[] = "invalid value for 'numero_telefono', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['extension']) && (mb_strlen($this->container['extension']) > 8)) {
            $invalidProperties[] = "invalid value for 'extension', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['extension']) && (mb_strlen($this->container['extension']) < 0)) {
            $invalidProperties[] = "invalid value for 'extension', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fax']) && (mb_strlen($this->container['fax']) > 20)) {
            $invalidProperties[] = "invalid value for 'fax', the character length must be smaller than or equal to 20.";
        }
        if (!is_null($this->container['fax']) && (mb_strlen($this->container['fax']) < 0)) {
            $invalidProperties[] = "invalid value for 'fax', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['tipo_domicilio']) && (mb_strlen($this->container['tipo_domicilio']) > 1)) {
            $invalidProperties[] = "invalid value for 'tipo_domicilio', the character length must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['tipo_domicilio']) && (mb_strlen($this->container['tipo_domicilio']) < 0)) {
            $invalidProperties[] = "invalid value for 'tipo_domicilio', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['tipo_asentamiento']) && (mb_strlen($this->container['tipo_asentamiento']) > 2)) {
            $invalidProperties[] = "invalid value for 'tipo_asentamiento', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['tipo_asentamiento']) && (mb_strlen($this->container['tipo_asentamiento']) < 0)) {
            $invalidProperties[] = "invalid value for 'tipo_asentamiento', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['origen_domicilio']) && (mb_strlen($this->container['origen_domicilio']) > 2)) {
            $invalidProperties[] = "invalid value for 'origen_domicilio', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['origen_domicilio']) && (mb_strlen($this->container['origen_domicilio']) < 0)) {
            $invalidProperties[] = "invalid value for 'origen_domicilio', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getDireccion()
    {
        return $this->container['direccion'];
    }
    
    public function setDireccion($direccion)
    {
        if (!is_null($direccion) && (mb_strlen($direccion) > 80)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling Domicilio., must be smaller than or equal to 80.');
        }
        if (!is_null($direccion) && (mb_strlen($direccion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['direccion'] = $direccion;
        return $this;
    }
    
    public function getColoniaPoblacion()
    {
        return $this->container['colonia_poblacion'];
    }
    
    public function setColoniaPoblacion($colonia_poblacion)
    {
        if (!is_null($colonia_poblacion) && (mb_strlen($colonia_poblacion) > 65)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling Domicilio., must be smaller than or equal to 65.');
        }
        if (!is_null($colonia_poblacion) && (mb_strlen($colonia_poblacion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['colonia_poblacion'] = $colonia_poblacion;
        return $this;
    }
    
    public function getDelegacionMunicipio()
    {
        return $this->container['delegacion_municipio'];
    }
    
    public function setDelegacionMunicipio($delegacion_municipio)
    {
        if (!is_null($delegacion_municipio) && (mb_strlen($delegacion_municipio) > 65)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling Domicilio., must be smaller than or equal to 65.');
        }
        if (!is_null($delegacion_municipio) && (mb_strlen($delegacion_municipio) < 0)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['delegacion_municipio'] = $delegacion_municipio;
        return $this;
    }
    
    public function getCiudad()
    {
        return $this->container['ciudad'];
    }
    
    public function setCiudad($ciudad)
    {
        if (!is_null($ciudad) && (mb_strlen($ciudad) > 65)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling Domicilio., must be smaller than or equal to 65.');
        }
        if (!is_null($ciudad) && (mb_strlen($ciudad) < 0)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['ciudad'] = $ciudad;
        return $this;
    }
    
    public function getEstado()
    {
        return $this->container['estado'];
    }
    
    public function setEstado($estado)
    {
        if (!is_null($estado) && (mb_strlen($estado) > 4)) {
            throw new \InvalidArgumentException('invalid length for $estado when calling Domicilio., must be smaller than or equal to 4.');
        }
        if (!is_null($estado) && (mb_strlen($estado) < 0)) {
            throw new \InvalidArgumentException('invalid length for $estado when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['estado'] = $estado;
        return $this;
    }
    
    public function getEstadoExtranjero()
    {
        return $this->container['estado_extranjero'];
    }
    
    public function setEstadoExtranjero($estado_extranjero)
    {
        if (!is_null($estado_extranjero) && (mb_strlen($estado_extranjero) > 0)) {
            throw new \InvalidArgumentException('invalid length for $estado_extranjero when calling Domicilio., must be smaller than or equal to 0.');
        }
        if (!is_null($estado_extranjero) && (mb_strlen($estado_extranjero) < 0)) {
            throw new \InvalidArgumentException('invalid length for $estado_extranjero when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['estado_extranjero'] = $estado_extranjero;
        return $this;
    }
    
    public function getCp()
    {
        return $this->container['cp'];
    }
    
    public function setCp($cp)
    {
        if (!is_null($cp) && (mb_strlen($cp) > 5)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling Domicilio., must be smaller than or equal to 5.');
        }
        if (!is_null($cp) && (mb_strlen($cp) < 0)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['cp'] = $cp;
        return $this;
    }
    
    public function getFechaResidencia()
    {
        return $this->container['fecha_residencia'];
    }
    
    public function setFechaResidencia($fecha_residencia)
    {
        if (!is_null($fecha_residencia) && (mb_strlen($fecha_residencia) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_residencia when calling Domicilio., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_residencia) && (mb_strlen($fecha_residencia) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_residencia when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['fecha_residencia'] = $fecha_residencia;
        return $this;
    }
    
    public function getNumeroCelular()
    {
        return $this->container['numero_celular'];
    }
    
    public function setNumeroCelular($numero_celular)
    {
        if (!is_null($numero_celular) && (mb_strlen($numero_celular) > 20)) {
            throw new \InvalidArgumentException('invalid length for $numero_celular when calling Domicilio., must be smaller than or equal to 20.');
        }
        if (!is_null($numero_celular) && (mb_strlen($numero_celular) < 0)) {
            throw new \InvalidArgumentException('invalid length for $numero_celular when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['numero_celular'] = $numero_celular;
        return $this;
    }
    
    public function getNumeroTelefono()
    {
        return $this->container['numero_telefono'];
    }
    
    public function setNumeroTelefono($numero_telefono)
    {
        if (!is_null($numero_telefono) && (mb_strlen($numero_telefono) > 20)) {
            throw new \InvalidArgumentException('invalid length for $numero_telefono when calling Domicilio., must be smaller than or equal to 20.');
        }
        if (!is_null($numero_telefono) && (mb_strlen($numero_telefono) < 0)) {
            throw new \InvalidArgumentException('invalid length for $numero_telefono when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['numero_telefono'] = $numero_telefono;
        return $this;
    }
    
    public function getExtension()
    {
        return $this->container['extension'];
    }
    
    public function setExtension($extension)
    {
        if (!is_null($extension) && (mb_strlen($extension) > 8)) {
            throw new \InvalidArgumentException('invalid length for $extension when calling Domicilio., must be smaller than or equal to 8.');
        }
        if (!is_null($extension) && (mb_strlen($extension) < 0)) {
            throw new \InvalidArgumentException('invalid length for $extension when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['extension'] = $extension;
        return $this;
    }
    
    public function getFax()
    {
        return $this->container['fax'];
    }
    
    public function setFax($fax)
    {
        if (!is_null($fax) && (mb_strlen($fax) > 20)) {
            throw new \InvalidArgumentException('invalid length for $fax when calling Domicilio., must be smaller than or equal to 20.');
        }
        if (!is_null($fax) && (mb_strlen($fax) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fax when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['fax'] = $fax;
        return $this;
    }
    
    public function getTipoDomicilio()
    {
        return $this->container['tipo_domicilio'];
    }
    
    public function setTipoDomicilio($tipo_domicilio)
    {
        if (!is_null($tipo_domicilio) && (mb_strlen($tipo_domicilio) > 1)) {
            throw new \InvalidArgumentException('invalid length for $tipo_domicilio when calling Domicilio., must be smaller than or equal to 1.');
        }
        if (!is_null($tipo_domicilio) && (mb_strlen($tipo_domicilio) < 0)) {
            throw new \InvalidArgumentException('invalid length for $tipo_domicilio when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['tipo_domicilio'] = $tipo_domicilio;
        return $this;
    }
    
    public function getTipoAsentamiento()
    {
        return $this->container['tipo_asentamiento'];
    }
    
    public function setTipoAsentamiento($tipo_asentamiento)
    {
        if (!is_null($tipo_asentamiento) && (mb_strlen($tipo_asentamiento) > 2)) {
            throw new \InvalidArgumentException('invalid length for $tipo_asentamiento when calling Domicilio., must be smaller than or equal to 2.');
        }
        if (!is_null($tipo_asentamiento) && (mb_strlen($tipo_asentamiento) < 0)) {
            throw new \InvalidArgumentException('invalid length for $tipo_asentamiento when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['tipo_asentamiento'] = $tipo_asentamiento;
        return $this;
    }
    
    public function getOrigenDomicilio()
    {
        return $this->container['origen_domicilio'];
    }
    
    public function setOrigenDomicilio($origen_domicilio)
    {
        if (!is_null($origen_domicilio) && (mb_strlen($origen_domicilio) > 2)) {
            throw new \InvalidArgumentException('invalid length for $origen_domicilio when calling Domicilio., must be smaller than or equal to 2.');
        }
        if (!is_null($origen_domicilio) && (mb_strlen($origen_domicilio) < 0)) {
            throw new \InvalidArgumentException('invalid length for $origen_domicilio when calling Domicilio., must be bigger than or equal to 0.');
        }
        $this->container['origen_domicilio'] = $origen_domicilio;
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
