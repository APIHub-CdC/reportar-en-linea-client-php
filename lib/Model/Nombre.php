<?php

namespace ReportarEnLinea\Client\Model;

use \ArrayAccess;
use \ReportarEnLinea\Client\ObjectSerializer;

class Nombre implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Nombre';
    
    protected static $apihubTypes = [
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'apellido_adicional' => 'string',
        'nombres' => 'string',
        'fecha_nacimiento' => 'string',
        'rfc' => 'string',
        'curp' => 'string',
        'numero_seguridad_social' => 'string',
        'nacionalidad' => 'string',
        'residencia' => 'string',
        'numero_licencia_conducir' => 'string',
        'estado_civil' => 'string',
        'sexo' => 'string',
        'clave_elector_ife' => 'string',
        'numero_dependientes' => 'string',
        'fecha_defuncion' => 'string',
        'tipo_persona' => 'string',
        'indicador_defuncion' => 'string'
    ];
    
    protected static $apihubFormats = [
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'apellido_adicional' => null,
        'nombres' => null,
        'fecha_nacimiento' => null,
        'rfc' => null,
        'curp' => null,
        'numero_seguridad_social' => null,
        'nacionalidad' => null,
        'residencia' => null,
        'numero_licencia_conducir' => null,
        'estado_civil' => null,
        'sexo' => null,
        'clave_elector_ife' => null,
        'numero_dependientes' => null,
        'fecha_defuncion' => null,
        'tipo_persona' => null,
        'indicador_defuncion' => null
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
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'apellido_adicional' => 'apellidoAdicional',
        'nombres' => 'nombres',
        'fecha_nacimiento' => 'fechaNacimiento',
        'rfc' => 'rfc',
        'curp' => 'curp',
        'numero_seguridad_social' => 'numeroSeguridadSocial',
        'nacionalidad' => 'nacionalidad',
        'residencia' => 'residencia',
        'numero_licencia_conducir' => 'numeroLicenciaConducir',
        'estado_civil' => 'estadoCivil',
        'sexo' => 'sexo',
        'clave_elector_ife' => 'claveElectorIFE',
        'numero_dependientes' => 'numeroDependientes',
        'fecha_defuncion' => 'fechaDefuncion',
        'tipo_persona' => 'tipoPersona',
        'indicador_defuncion' => 'indicadorDefuncion'
    ];
    
    protected static $setters = [
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'apellido_adicional' => 'setApellidoAdicional',
        'nombres' => 'setNombres',
        'fecha_nacimiento' => 'setFechaNacimiento',
        'rfc' => 'setRfc',
        'curp' => 'setCurp',
        'numero_seguridad_social' => 'setNumeroSeguridadSocial',
        'nacionalidad' => 'setNacionalidad',
        'residencia' => 'setResidencia',
        'numero_licencia_conducir' => 'setNumeroLicenciaConducir',
        'estado_civil' => 'setEstadoCivil',
        'sexo' => 'setSexo',
        'clave_elector_ife' => 'setClaveElectorIfe',
        'numero_dependientes' => 'setNumeroDependientes',
        'fecha_defuncion' => 'setFechaDefuncion',
        'tipo_persona' => 'setTipoPersona',
        'indicador_defuncion' => 'setIndicadorDefuncion'
    ];
    
    protected static $getters = [
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'apellido_adicional' => 'getApellidoAdicional',
        'nombres' => 'getNombres',
        'fecha_nacimiento' => 'getFechaNacimiento',
        'rfc' => 'getRfc',
        'curp' => 'getCurp',
        'numero_seguridad_social' => 'getNumeroSeguridadSocial',
        'nacionalidad' => 'getNacionalidad',
        'residencia' => 'getResidencia',
        'numero_licencia_conducir' => 'getNumeroLicenciaConducir',
        'estado_civil' => 'getEstadoCivil',
        'sexo' => 'getSexo',
        'clave_elector_ife' => 'getClaveElectorIfe',
        'numero_dependientes' => 'getNumeroDependientes',
        'fecha_defuncion' => 'getFechaDefuncion',
        'tipo_persona' => 'getTipoPersona',
        'indicador_defuncion' => 'getIndicadorDefuncion'
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
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['apellido_adicional'] = isset($data['apellido_adicional']) ? $data['apellido_adicional'] : null;
        $this->container['nombres'] = isset($data['nombres']) ? $data['nombres'] : null;
        $this->container['fecha_nacimiento'] = isset($data['fecha_nacimiento']) ? $data['fecha_nacimiento'] : null;
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
        $this->container['numero_seguridad_social'] = isset($data['numero_seguridad_social']) ? $data['numero_seguridad_social'] : null;
        $this->container['nacionalidad'] = isset($data['nacionalidad']) ? $data['nacionalidad'] : null;
        $this->container['residencia'] = isset($data['residencia']) ? $data['residencia'] : null;
        $this->container['numero_licencia_conducir'] = isset($data['numero_licencia_conducir']) ? $data['numero_licencia_conducir'] : null;
        $this->container['estado_civil'] = isset($data['estado_civil']) ? $data['estado_civil'] : null;
        $this->container['sexo'] = isset($data['sexo']) ? $data['sexo'] : null;
        $this->container['clave_elector_ife'] = isset($data['clave_elector_ife']) ? $data['clave_elector_ife'] : null;
        $this->container['numero_dependientes'] = isset($data['numero_dependientes']) ? $data['numero_dependientes'] : null;
        $this->container['fecha_defuncion'] = isset($data['fecha_defuncion']) ? $data['fecha_defuncion'] : null;
        $this->container['tipo_persona'] = isset($data['tipo_persona']) ? $data['tipo_persona'] : null;
        $this->container['indicador_defuncion'] = isset($data['indicador_defuncion']) ? $data['indicador_defuncion'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['apellido_paterno']) && (mb_strlen($this->container['apellido_paterno']) > 30)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['apellido_paterno']) && (mb_strlen($this->container['apellido_paterno']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['apellido_materno']) && (mb_strlen($this->container['apellido_materno']) > 30)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['apellido_materno']) && (mb_strlen($this->container['apellido_materno']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['apellido_adicional']) && (mb_strlen($this->container['apellido_adicional']) > 30)) {
            $invalidProperties[] = "invalid value for 'apellido_adicional', the character length must be smaller than or equal to 30.";
        }
        if (!is_null($this->container['apellido_adicional']) && (mb_strlen($this->container['apellido_adicional']) < 0)) {
            $invalidProperties[] = "invalid value for 'apellido_adicional', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['nombres']) && (mb_strlen($this->container['nombres']) > 50)) {
            $invalidProperties[] = "invalid value for 'nombres', the character length must be smaller than or equal to 50.";
        }
        if (!is_null($this->container['nombres']) && (mb_strlen($this->container['nombres']) < 0)) {
            $invalidProperties[] = "invalid value for 'nombres', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_nacimiento']) && (mb_strlen($this->container['fecha_nacimiento']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_nacimiento', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_nacimiento']) && (mb_strlen($this->container['fecha_nacimiento']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_nacimiento', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['rfc']) && (mb_strlen($this->container['rfc']) > 13)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be smaller than or equal to 13.";
        }
        if (!is_null($this->container['rfc']) && (mb_strlen($this->container['rfc']) < 0)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['curp']) && (mb_strlen($this->container['curp']) > 18)) {
            $invalidProperties[] = "invalid value for 'curp', the character length must be smaller than or equal to 18.";
        }
        if (!is_null($this->container['curp']) && (mb_strlen($this->container['curp']) < 0)) {
            $invalidProperties[] = "invalid value for 'curp', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['numero_seguridad_social']) && (mb_strlen($this->container['numero_seguridad_social']) > 11)) {
            $invalidProperties[] = "invalid value for 'numero_seguridad_social', the character length must be smaller than or equal to 11.";
        }
        if (!is_null($this->container['numero_seguridad_social']) && (mb_strlen($this->container['numero_seguridad_social']) < 0)) {
            $invalidProperties[] = "invalid value for 'numero_seguridad_social', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['nacionalidad']) && (mb_strlen($this->container['nacionalidad']) > 2)) {
            $invalidProperties[] = "invalid value for 'nacionalidad', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['nacionalidad']) && (mb_strlen($this->container['nacionalidad']) < 0)) {
            $invalidProperties[] = "invalid value for 'nacionalidad', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['residencia']) && (mb_strlen($this->container['residencia']) > 1)) {
            $invalidProperties[] = "invalid value for 'residencia', the character length must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['residencia']) && (mb_strlen($this->container['residencia']) < 0)) {
            $invalidProperties[] = "invalid value for 'residencia', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['numero_licencia_conducir']) && (mb_strlen($this->container['numero_licencia_conducir']) > 20)) {
            $invalidProperties[] = "invalid value for 'numero_licencia_conducir', the character length must be smaller than or equal to 20.";
        }
        if (!is_null($this->container['numero_licencia_conducir']) && (mb_strlen($this->container['numero_licencia_conducir']) < 0)) {
            $invalidProperties[] = "invalid value for 'numero_licencia_conducir', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['estado_civil']) && (mb_strlen($this->container['estado_civil']) > 1)) {
            $invalidProperties[] = "invalid value for 'estado_civil', the character length must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['estado_civil']) && (mb_strlen($this->container['estado_civil']) < 0)) {
            $invalidProperties[] = "invalid value for 'estado_civil', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['sexo']) && (mb_strlen($this->container['sexo']) > 1)) {
            $invalidProperties[] = "invalid value for 'sexo', the character length must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['sexo']) && (mb_strlen($this->container['sexo']) < 0)) {
            $invalidProperties[] = "invalid value for 'sexo', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['clave_elector_ife']) && (mb_strlen($this->container['clave_elector_ife']) > 20)) {
            $invalidProperties[] = "invalid value for 'clave_elector_ife', the character length must be smaller than or equal to 20.";
        }
        if (!is_null($this->container['clave_elector_ife']) && (mb_strlen($this->container['clave_elector_ife']) < 0)) {
            $invalidProperties[] = "invalid value for 'clave_elector_ife', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['numero_dependientes']) && (mb_strlen($this->container['numero_dependientes']) > 2)) {
            $invalidProperties[] = "invalid value for 'numero_dependientes', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['numero_dependientes']) && (mb_strlen($this->container['numero_dependientes']) < 0)) {
            $invalidProperties[] = "invalid value for 'numero_dependientes', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_defuncion']) && (mb_strlen($this->container['fecha_defuncion']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_defuncion', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_defuncion']) && (mb_strlen($this->container['fecha_defuncion']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_defuncion', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['tipo_persona']) && (mb_strlen($this->container['tipo_persona']) > 2)) {
            $invalidProperties[] = "invalid value for 'tipo_persona', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['tipo_persona']) && (mb_strlen($this->container['tipo_persona']) < 0)) {
            $invalidProperties[] = "invalid value for 'tipo_persona', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['indicador_defuncion']) && (mb_strlen($this->container['indicador_defuncion']) > 1)) {
            $invalidProperties[] = "invalid value for 'indicador_defuncion', the character length must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['indicador_defuncion']) && (mb_strlen($this->container['indicador_defuncion']) < 0)) {
            $invalidProperties[] = "invalid value for 'indicador_defuncion', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }
    
    public function setApellidoPaterno($apellido_paterno)
    {
        if (!is_null($apellido_paterno) && (mb_strlen($apellido_paterno) > 30)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling Nombre., must be smaller than or equal to 30.');
        }
        if (!is_null($apellido_paterno) && (mb_strlen($apellido_paterno) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['apellido_paterno'] = $apellido_paterno;
        return $this;
    }
    
    public function getApellidoMaterno()
    {
        return $this->container['apellido_materno'];
    }
    
    public function setApellidoMaterno($apellido_materno)
    {
        if (!is_null($apellido_materno) && (mb_strlen($apellido_materno) > 30)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling Nombre., must be smaller than or equal to 30.');
        }
        if (!is_null($apellido_materno) && (mb_strlen($apellido_materno) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['apellido_materno'] = $apellido_materno;
        return $this;
    }
    
    public function getApellidoAdicional()
    {
        return $this->container['apellido_adicional'];
    }
    
    public function setApellidoAdicional($apellido_adicional)
    {
        if (!is_null($apellido_adicional) && (mb_strlen($apellido_adicional) > 30)) {
            throw new \InvalidArgumentException('invalid length for $apellido_adicional when calling Nombre., must be smaller than or equal to 30.');
        }
        if (!is_null($apellido_adicional) && (mb_strlen($apellido_adicional) < 0)) {
            throw new \InvalidArgumentException('invalid length for $apellido_adicional when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['apellido_adicional'] = $apellido_adicional;
        return $this;
    }
    
    public function getNombres()
    {
        return $this->container['nombres'];
    }
    
    public function setNombres($nombres)
    {
        if (!is_null($nombres) && (mb_strlen($nombres) > 50)) {
            throw new \InvalidArgumentException('invalid length for $nombres when calling Nombre., must be smaller than or equal to 50.');
        }
        if (!is_null($nombres) && (mb_strlen($nombres) < 0)) {
            throw new \InvalidArgumentException('invalid length for $nombres when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['nombres'] = $nombres;
        return $this;
    }
    
    public function getFechaNacimiento()
    {
        return $this->container['fecha_nacimiento'];
    }
    
    public function setFechaNacimiento($fecha_nacimiento)
    {
        if (!is_null($fecha_nacimiento) && (mb_strlen($fecha_nacimiento) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_nacimiento when calling Nombre., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_nacimiento) && (mb_strlen($fecha_nacimiento) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_nacimiento when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['fecha_nacimiento'] = $fecha_nacimiento;
        return $this;
    }
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        if (!is_null($rfc) && (mb_strlen($rfc) > 13)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling Nombre., must be smaller than or equal to 13.');
        }
        if (!is_null($rfc) && (mb_strlen($rfc) < 0)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getCurp()
    {
        return $this->container['curp'];
    }
    
    public function setCurp($curp)
    {
        if (!is_null($curp) && (mb_strlen($curp) > 18)) {
            throw new \InvalidArgumentException('invalid length for $curp when calling Nombre., must be smaller than or equal to 18.');
        }
        if (!is_null($curp) && (mb_strlen($curp) < 0)) {
            throw new \InvalidArgumentException('invalid length for $curp when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['curp'] = $curp;
        return $this;
    }
    
    public function getNumeroSeguridadSocial()
    {
        return $this->container['numero_seguridad_social'];
    }
    
    public function setNumeroSeguridadSocial($numero_seguridad_social)
    {
        if (!is_null($numero_seguridad_social) && (mb_strlen($numero_seguridad_social) > 11)) {
            throw new \InvalidArgumentException('invalid length for $numero_seguridad_social when calling Nombre., must be smaller than or equal to 11.');
        }
        if (!is_null($numero_seguridad_social) && (mb_strlen($numero_seguridad_social) < 0)) {
            throw new \InvalidArgumentException('invalid length for $numero_seguridad_social when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['numero_seguridad_social'] = $numero_seguridad_social;
        return $this;
    }
    
    public function getNacionalidad()
    {
        return $this->container['nacionalidad'];
    }
    
    public function setNacionalidad($nacionalidad)
    {
        if (!is_null($nacionalidad) && (mb_strlen($nacionalidad) > 2)) {
            throw new \InvalidArgumentException('invalid length for $nacionalidad when calling Nombre., must be smaller than or equal to 2.');
        }
        if (!is_null($nacionalidad) && (mb_strlen($nacionalidad) < 0)) {
            throw new \InvalidArgumentException('invalid length for $nacionalidad when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['nacionalidad'] = $nacionalidad;
        return $this;
    }
    
    public function getResidencia()
    {
        return $this->container['residencia'];
    }
    
    public function setResidencia($residencia)
    {
        if (!is_null($residencia) && (mb_strlen($residencia) > 1)) {
            throw new \InvalidArgumentException('invalid length for $residencia when calling Nombre., must be smaller than or equal to 1.');
        }
        if (!is_null($residencia) && (mb_strlen($residencia) < 0)) {
            throw new \InvalidArgumentException('invalid length for $residencia when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['residencia'] = $residencia;
        return $this;
    }
    
    public function getNumeroLicenciaConducir()
    {
        return $this->container['numero_licencia_conducir'];
    }
    
    public function setNumeroLicenciaConducir($numero_licencia_conducir)
    {
        if (!is_null($numero_licencia_conducir) && (mb_strlen($numero_licencia_conducir) > 20)) {
            throw new \InvalidArgumentException('invalid length for $numero_licencia_conducir when calling Nombre., must be smaller than or equal to 20.');
        }
        if (!is_null($numero_licencia_conducir) && (mb_strlen($numero_licencia_conducir) < 0)) {
            throw new \InvalidArgumentException('invalid length for $numero_licencia_conducir when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['numero_licencia_conducir'] = $numero_licencia_conducir;
        return $this;
    }
    
    public function getEstadoCivil()
    {
        return $this->container['estado_civil'];
    }
    
    public function setEstadoCivil($estado_civil)
    {
        if (!is_null($estado_civil) && (mb_strlen($estado_civil) > 1)) {
            throw new \InvalidArgumentException('invalid length for $estado_civil when calling Nombre., must be smaller than or equal to 1.');
        }
        if (!is_null($estado_civil) && (mb_strlen($estado_civil) < 0)) {
            throw new \InvalidArgumentException('invalid length for $estado_civil when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['estado_civil'] = $estado_civil;
        return $this;
    }
    
    public function getSexo()
    {
        return $this->container['sexo'];
    }
    
    public function setSexo($sexo)
    {
        if (!is_null($sexo) && (mb_strlen($sexo) > 1)) {
            throw new \InvalidArgumentException('invalid length for $sexo when calling Nombre., must be smaller than or equal to 1.');
        }
        if (!is_null($sexo) && (mb_strlen($sexo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $sexo when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['sexo'] = $sexo;
        return $this;
    }
    
    public function getClaveElectorIfe()
    {
        return $this->container['clave_elector_ife'];
    }
    
    public function setClaveElectorIfe($clave_elector_ife)
    {
        if (!is_null($clave_elector_ife) && (mb_strlen($clave_elector_ife) > 20)) {
            throw new \InvalidArgumentException('invalid length for $clave_elector_ife when calling Nombre., must be smaller than or equal to 20.');
        }
        if (!is_null($clave_elector_ife) && (mb_strlen($clave_elector_ife) < 0)) {
            throw new \InvalidArgumentException('invalid length for $clave_elector_ife when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['clave_elector_ife'] = $clave_elector_ife;
        return $this;
    }
    
    public function getNumeroDependientes()
    {
        return $this->container['numero_dependientes'];
    }
    
    public function setNumeroDependientes($numero_dependientes)
    {
        if (!is_null($numero_dependientes) && (mb_strlen($numero_dependientes) > 2)) {
            throw new \InvalidArgumentException('invalid length for $numero_dependientes when calling Nombre., must be smaller than or equal to 2.');
        }
        if (!is_null($numero_dependientes) && (mb_strlen($numero_dependientes) < 0)) {
            throw new \InvalidArgumentException('invalid length for $numero_dependientes when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['numero_dependientes'] = $numero_dependientes;
        return $this;
    }
    
    public function getFechaDefuncion()
    {
        return $this->container['fecha_defuncion'];
    }
    
    public function setFechaDefuncion($fecha_defuncion)
    {
        if (!is_null($fecha_defuncion) && (mb_strlen($fecha_defuncion) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_defuncion when calling Nombre., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_defuncion) && (mb_strlen($fecha_defuncion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_defuncion when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['fecha_defuncion'] = $fecha_defuncion;
        return $this;
    }
    
    public function getTipoPersona()
    {
        return $this->container['tipo_persona'];
    }
    
    public function setTipoPersona($tipo_persona)
    {
        if (!is_null($tipo_persona) && (mb_strlen($tipo_persona) > 2)) {
            throw new \InvalidArgumentException('invalid length for $tipo_persona when calling Nombre., must be smaller than or equal to 2.');
        }
        if (!is_null($tipo_persona) && (mb_strlen($tipo_persona) < 0)) {
            throw new \InvalidArgumentException('invalid length for $tipo_persona when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['tipo_persona'] = $tipo_persona;
        return $this;
    }
    
    public function getIndicadorDefuncion()
    {
        return $this->container['indicador_defuncion'];
    }
    
    public function setIndicadorDefuncion($indicador_defuncion)
    {
        if (!is_null($indicador_defuncion) && (mb_strlen($indicador_defuncion) > 1)) {
            throw new \InvalidArgumentException('invalid length for $indicador_defuncion when calling Nombre., must be smaller than or equal to 1.');
        }
        if (!is_null($indicador_defuncion) && (mb_strlen($indicador_defuncion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $indicador_defuncion when calling Nombre., must be bigger than or equal to 0.');
        }
        $this->container['indicador_defuncion'] = $indicador_defuncion;
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
