<?php

namespace ReportarEnLinea\Client\Model;

use \ArrayAccess;
use \ReportarEnLinea\Client\ObjectSerializer;

class Empleo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Empleo';
    
    protected static $apihubTypes = [
        'nombre_empresa' => 'string',
        'direccion' => 'string',
        'colonia_poblacion' => 'string',
        'delegacion_municipio' => 'string',
        'ciudad' => 'string',
        'estado' => 'string',
        'cp' => 'string',
        'numero_telefono' => 'string',
        'extension' => 'string',
        'fax' => 'string',
        'puesto' => 'string',
        'fecha_contratacion' => 'string',
        'clave_moneda' => 'string',
        'salario_mensual' => 'string',
        'fecha_ultimo_dia_empleo' => 'string',
        'fecha_verificacion_empleo' => 'string',
        'origen_razon_social_domicilio' => 'string'
    ];
    
    protected static $apihubFormats = [
        'nombre_empresa' => null,
        'direccion' => null,
        'colonia_poblacion' => null,
        'delegacion_municipio' => null,
        'ciudad' => null,
        'estado' => null,
        'cp' => null,
        'numero_telefono' => null,
        'extension' => null,
        'fax' => null,
        'puesto' => null,
        'fecha_contratacion' => null,
        'clave_moneda' => null,
        'salario_mensual' => null,
        'fecha_ultimo_dia_empleo' => null,
        'fecha_verificacion_empleo' => null,
        'origen_razon_social_domicilio' => null
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
        'nombre_empresa' => 'nombreEmpresa',
        'direccion' => 'direccion',
        'colonia_poblacion' => 'coloniaPoblacion',
        'delegacion_municipio' => 'delegacionMunicipio',
        'ciudad' => 'ciudad',
        'estado' => 'estado',
        'cp' => 'cp',
        'numero_telefono' => 'numeroTelefono',
        'extension' => 'extension',
        'fax' => 'fax',
        'puesto' => 'puesto',
        'fecha_contratacion' => 'fechaContratacion',
        'clave_moneda' => 'claveMoneda',
        'salario_mensual' => 'salarioMensual',
        'fecha_ultimo_dia_empleo' => 'fechaUltimoDiaEmpleo',
        'fecha_verificacion_empleo' => 'fechaVerificacionEmpleo',
        'origen_razon_social_domicilio' => 'origenRazonSocialDomicilio'
    ];
    
    protected static $setters = [
        'nombre_empresa' => 'setNombreEmpresa',
        'direccion' => 'setDireccion',
        'colonia_poblacion' => 'setColoniaPoblacion',
        'delegacion_municipio' => 'setDelegacionMunicipio',
        'ciudad' => 'setCiudad',
        'estado' => 'setEstado',
        'cp' => 'setCp',
        'numero_telefono' => 'setNumeroTelefono',
        'extension' => 'setExtension',
        'fax' => 'setFax',
        'puesto' => 'setPuesto',
        'fecha_contratacion' => 'setFechaContratacion',
        'clave_moneda' => 'setClaveMoneda',
        'salario_mensual' => 'setSalarioMensual',
        'fecha_ultimo_dia_empleo' => 'setFechaUltimoDiaEmpleo',
        'fecha_verificacion_empleo' => 'setFechaVerificacionEmpleo',
        'origen_razon_social_domicilio' => 'setOrigenRazonSocialDomicilio'
    ];
    
    protected static $getters = [
        'nombre_empresa' => 'getNombreEmpresa',
        'direccion' => 'getDireccion',
        'colonia_poblacion' => 'getColoniaPoblacion',
        'delegacion_municipio' => 'getDelegacionMunicipio',
        'ciudad' => 'getCiudad',
        'estado' => 'getEstado',
        'cp' => 'getCp',
        'numero_telefono' => 'getNumeroTelefono',
        'extension' => 'getExtension',
        'fax' => 'getFax',
        'puesto' => 'getPuesto',
        'fecha_contratacion' => 'getFechaContratacion',
        'clave_moneda' => 'getClaveMoneda',
        'salario_mensual' => 'getSalarioMensual',
        'fecha_ultimo_dia_empleo' => 'getFechaUltimoDiaEmpleo',
        'fecha_verificacion_empleo' => 'getFechaVerificacionEmpleo',
        'origen_razon_social_domicilio' => 'getOrigenRazonSocialDomicilio'
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
        $this->container['nombre_empresa'] = isset($data['nombre_empresa']) ? $data['nombre_empresa'] : null;
        $this->container['direccion'] = isset($data['direccion']) ? $data['direccion'] : null;
        $this->container['colonia_poblacion'] = isset($data['colonia_poblacion']) ? $data['colonia_poblacion'] : null;
        $this->container['delegacion_municipio'] = isset($data['delegacion_municipio']) ? $data['delegacion_municipio'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
        $this->container['cp'] = isset($data['cp']) ? $data['cp'] : null;
        $this->container['numero_telefono'] = isset($data['numero_telefono']) ? $data['numero_telefono'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['puesto'] = isset($data['puesto']) ? $data['puesto'] : null;
        $this->container['fecha_contratacion'] = isset($data['fecha_contratacion']) ? $data['fecha_contratacion'] : null;
        $this->container['clave_moneda'] = isset($data['clave_moneda']) ? $data['clave_moneda'] : null;
        $this->container['salario_mensual'] = isset($data['salario_mensual']) ? $data['salario_mensual'] : null;
        $this->container['fecha_ultimo_dia_empleo'] = isset($data['fecha_ultimo_dia_empleo']) ? $data['fecha_ultimo_dia_empleo'] : null;
        $this->container['fecha_verificacion_empleo'] = isset($data['fecha_verificacion_empleo']) ? $data['fecha_verificacion_empleo'] : null;
        $this->container['origen_razon_social_domicilio'] = isset($data['origen_razon_social_domicilio']) ? $data['origen_razon_social_domicilio'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['nombre_empresa']) && (mb_strlen($this->container['nombre_empresa']) > 99)) {
            $invalidProperties[] = "invalid value for 'nombre_empresa', the character length must be smaller than or equal to 99.";
        }
        if (!is_null($this->container['nombre_empresa']) && (mb_strlen($this->container['nombre_empresa']) < 0)) {
            $invalidProperties[] = "invalid value for 'nombre_empresa', the character length must be bigger than or equal to 0.";
        }
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
        if (!is_null($this->container['cp']) && (mb_strlen($this->container['cp']) > 5)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be smaller than or equal to 5.";
        }
        if (!is_null($this->container['cp']) && (mb_strlen($this->container['cp']) < 0)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be bigger than or equal to 0.";
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
        if (!is_null($this->container['puesto']) && (mb_strlen($this->container['puesto']) > 60)) {
            $invalidProperties[] = "invalid value for 'puesto', the character length must be smaller than or equal to 60.";
        }
        if (!is_null($this->container['puesto']) && (mb_strlen($this->container['puesto']) < 0)) {
            $invalidProperties[] = "invalid value for 'puesto', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_contratacion']) && (mb_strlen($this->container['fecha_contratacion']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_contratacion', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_contratacion']) && (mb_strlen($this->container['fecha_contratacion']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_contratacion', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['clave_moneda']) && (mb_strlen($this->container['clave_moneda']) > 2)) {
            $invalidProperties[] = "invalid value for 'clave_moneda', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['clave_moneda']) && (mb_strlen($this->container['clave_moneda']) < 0)) {
            $invalidProperties[] = "invalid value for 'clave_moneda', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['salario_mensual']) && (mb_strlen($this->container['salario_mensual']) > 9)) {
            $invalidProperties[] = "invalid value for 'salario_mensual', the character length must be smaller than or equal to 9.";
        }
        if (!is_null($this->container['salario_mensual']) && (mb_strlen($this->container['salario_mensual']) < 0)) {
            $invalidProperties[] = "invalid value for 'salario_mensual', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_ultimo_dia_empleo']) && (mb_strlen($this->container['fecha_ultimo_dia_empleo']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_ultimo_dia_empleo', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_ultimo_dia_empleo']) && (mb_strlen($this->container['fecha_ultimo_dia_empleo']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_ultimo_dia_empleo', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_verificacion_empleo']) && (mb_strlen($this->container['fecha_verificacion_empleo']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_verificacion_empleo', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_verificacion_empleo']) && (mb_strlen($this->container['fecha_verificacion_empleo']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_verificacion_empleo', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['origen_razon_social_domicilio']) && (mb_strlen($this->container['origen_razon_social_domicilio']) > 2)) {
            $invalidProperties[] = "invalid value for 'origen_razon_social_domicilio', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['origen_razon_social_domicilio']) && (mb_strlen($this->container['origen_razon_social_domicilio']) < 0)) {
            $invalidProperties[] = "invalid value for 'origen_razon_social_domicilio', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNombreEmpresa()
    {
        return $this->container['nombre_empresa'];
    }
    
    public function setNombreEmpresa($nombre_empresa)
    {
        if (!is_null($nombre_empresa) && (mb_strlen($nombre_empresa) > 99)) {
            throw new \InvalidArgumentException('invalid length for $nombre_empresa when calling Empleo., must be smaller than or equal to 99.');
        }
        if (!is_null($nombre_empresa) && (mb_strlen($nombre_empresa) < 0)) {
            throw new \InvalidArgumentException('invalid length for $nombre_empresa when calling Empleo., must be bigger than or equal to 0.');
        }
        $this->container['nombre_empresa'] = $nombre_empresa;
        return $this;
    }
    
    public function getDireccion()
    {
        return $this->container['direccion'];
    }
    
    public function setDireccion($direccion)
    {
        if (!is_null($direccion) && (mb_strlen($direccion) > 80)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling Empleo., must be smaller than or equal to 80.');
        }
        if (!is_null($direccion) && (mb_strlen($direccion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling Empleo., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling Empleo., must be smaller than or equal to 65.');
        }
        if (!is_null($colonia_poblacion) && (mb_strlen($colonia_poblacion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling Empleo., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling Empleo., must be smaller than or equal to 65.');
        }
        if (!is_null($delegacion_municipio) && (mb_strlen($delegacion_municipio) < 0)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling Empleo., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid length for $ciudad when calling Empleo., must be smaller than or equal to 65.');
        }
        if (!is_null($ciudad) && (mb_strlen($ciudad) < 0)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling Empleo., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid length for $estado when calling Empleo., must be smaller than or equal to 4.');
        }
        if (!is_null($estado) && (mb_strlen($estado) < 0)) {
            throw new \InvalidArgumentException('invalid length for $estado when calling Empleo., must be bigger than or equal to 0.');
        }
        $this->container['estado'] = $estado;
        return $this;
    }
    
    public function getCp()
    {
        return $this->container['cp'];
    }
    
    public function setCp($cp)
    {
        if (!is_null($cp) && (mb_strlen($cp) > 5)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling Empleo., must be smaller than or equal to 5.');
        }
        if (!is_null($cp) && (mb_strlen($cp) < 0)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling Empleo., must be bigger than or equal to 0.');
        }
        $this->container['cp'] = $cp;
        return $this;
    }
    
    public function getNumeroTelefono()
    {
        return $this->container['numero_telefono'];
    }
    
    public function setNumeroTelefono($numero_telefono)
    {
        if (!is_null($numero_telefono) && (mb_strlen($numero_telefono) > 20)) {
            throw new \InvalidArgumentException('invalid length for $numero_telefono when calling Empleo., must be smaller than or equal to 20.');
        }
        if (!is_null($numero_telefono) && (mb_strlen($numero_telefono) < 0)) {
            throw new \InvalidArgumentException('invalid length for $numero_telefono when calling Empleo., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid length for $extension when calling Empleo., must be smaller than or equal to 8.');
        }
        if (!is_null($extension) && (mb_strlen($extension) < 0)) {
            throw new \InvalidArgumentException('invalid length for $extension when calling Empleo., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid length for $fax when calling Empleo., must be smaller than or equal to 20.');
        }
        if (!is_null($fax) && (mb_strlen($fax) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fax when calling Empleo., must be bigger than or equal to 0.');
        }
        $this->container['fax'] = $fax;
        return $this;
    }
    
    public function getPuesto()
    {
        return $this->container['puesto'];
    }
    
    public function setPuesto($puesto)
    {
        if (!is_null($puesto) && (mb_strlen($puesto) > 60)) {
            throw new \InvalidArgumentException('invalid length for $puesto when calling Empleo., must be smaller than or equal to 60.');
        }
        if (!is_null($puesto) && (mb_strlen($puesto) < 0)) {
            throw new \InvalidArgumentException('invalid length for $puesto when calling Empleo., must be bigger than or equal to 0.');
        }
        $this->container['puesto'] = $puesto;
        return $this;
    }
    
    public function getFechaContratacion()
    {
        return $this->container['fecha_contratacion'];
    }
    
    public function setFechaContratacion($fecha_contratacion)
    {
        if (!is_null($fecha_contratacion) && (mb_strlen($fecha_contratacion) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_contratacion when calling Empleo., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_contratacion) && (mb_strlen($fecha_contratacion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_contratacion when calling Empleo., must be bigger than or equal to 0.');
        }
        $this->container['fecha_contratacion'] = $fecha_contratacion;
        return $this;
    }
    
    public function getClaveMoneda()
    {
        return $this->container['clave_moneda'];
    }
    
    public function setClaveMoneda($clave_moneda)
    {
        if (!is_null($clave_moneda) && (mb_strlen($clave_moneda) > 2)) {
            throw new \InvalidArgumentException('invalid length for $clave_moneda when calling Empleo., must be smaller than or equal to 2.');
        }
        if (!is_null($clave_moneda) && (mb_strlen($clave_moneda) < 0)) {
            throw new \InvalidArgumentException('invalid length for $clave_moneda when calling Empleo., must be bigger than or equal to 0.');
        }
        $this->container['clave_moneda'] = $clave_moneda;
        return $this;
    }
    
    public function getSalarioMensual()
    {
        return $this->container['salario_mensual'];
    }
    
    public function setSalarioMensual($salario_mensual)
    {
        if (!is_null($salario_mensual) && (mb_strlen($salario_mensual) > 9)) {
            throw new \InvalidArgumentException('invalid length for $salario_mensual when calling Empleo., must be smaller than or equal to 9.');
        }
        if (!is_null($salario_mensual) && (mb_strlen($salario_mensual) < 0)) {
            throw new \InvalidArgumentException('invalid length for $salario_mensual when calling Empleo., must be bigger than or equal to 0.');
        }
        $this->container['salario_mensual'] = $salario_mensual;
        return $this;
    }
    
    public function getFechaUltimoDiaEmpleo()
    {
        return $this->container['fecha_ultimo_dia_empleo'];
    }
    
    public function setFechaUltimoDiaEmpleo($fecha_ultimo_dia_empleo)
    {
        if (!is_null($fecha_ultimo_dia_empleo) && (mb_strlen($fecha_ultimo_dia_empleo) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_ultimo_dia_empleo when calling Empleo., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_ultimo_dia_empleo) && (mb_strlen($fecha_ultimo_dia_empleo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_ultimo_dia_empleo when calling Empleo., must be bigger than or equal to 0.');
        }
        $this->container['fecha_ultimo_dia_empleo'] = $fecha_ultimo_dia_empleo;
        return $this;
    }
    
    public function getFechaVerificacionEmpleo()
    {
        return $this->container['fecha_verificacion_empleo'];
    }
    
    public function setFechaVerificacionEmpleo($fecha_verificacion_empleo)
    {
        if (!is_null($fecha_verificacion_empleo) && (mb_strlen($fecha_verificacion_empleo) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_verificacion_empleo when calling Empleo., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_verificacion_empleo) && (mb_strlen($fecha_verificacion_empleo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_verificacion_empleo when calling Empleo., must be bigger than or equal to 0.');
        }
        $this->container['fecha_verificacion_empleo'] = $fecha_verificacion_empleo;
        return $this;
    }
    
    public function getOrigenRazonSocialDomicilio()
    {
        return $this->container['origen_razon_social_domicilio'];
    }
    
    public function setOrigenRazonSocialDomicilio($origen_razon_social_domicilio)
    {
        if (!is_null($origen_razon_social_domicilio) && (mb_strlen($origen_razon_social_domicilio) > 2)) {
            throw new \InvalidArgumentException('invalid length for $origen_razon_social_domicilio when calling Empleo., must be smaller than or equal to 2.');
        }
        if (!is_null($origen_razon_social_domicilio) && (mb_strlen($origen_razon_social_domicilio) < 0)) {
            throw new \InvalidArgumentException('invalid length for $origen_razon_social_domicilio when calling Empleo., must be bigger than or equal to 0.');
        }
        $this->container['origen_razon_social_domicilio'] = $origen_razon_social_domicilio;
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
