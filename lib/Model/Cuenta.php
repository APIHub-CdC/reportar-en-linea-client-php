<?php

namespace APIHub\Client\Model;

use \ArrayAccess;
use \APIHub\Client\ObjectSerializer;

class Cuenta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $apihubModelName = 'Cuenta';
    
    protected static $apihubTypes = [
        'clave_actual_otorgante' => 'string',
        'nombre_otorgante' => 'string',
        'cuenta_actual' => 'string',
        'tipo_responsabilidad' => 'string',
        'tipo_cuenta' => 'string',
        'tipo_contrato' => 'string',
        'clave_unidad_monetaria' => 'string',
        'valor_activo_valuacion' => 'string',
        'numero_pagos' => 'string',
        'frecuencia_pagos' => 'string',
        'monto_pagar' => 'string',
        'fecha_apertura_cuenta' => 'string',
        'fecha_ultimo_pago' => 'string',
        'fecha_ultima_compra' => 'string',
        'fecha_cierre_cuenta' => 'string',
        'fecha_corte' => 'string',
        'garantia' => 'string',
        'credito_maximo' => 'string',
        'saldo_actual' => 'string',
        'limite_credito' => 'string',
        'saldo_vencido' => 'string',
        'numero_pagos_vencidos' => 'string',
        'pago_actual' => 'string',
        'historico_pagos' => 'string',
        'clave_prevencion' => 'string',
        'total_pagos_reportados' => 'string',
        'clave_anterior_otorgante' => 'string',
        'nombre_anterior_otorgante' => 'string',
        'numero_cuenta_anterior' => 'string',
        'fecha_primer_incumplimiento' => 'string',
        'saldo_insoluto' => 'string',
        'monto_ultimo_pago' => 'string',
        'fecha_ingreso_cartera_vencida' => 'string',
        'monto_correspondiente_intereses' => 'string',
        'forma_pago_actual_intereses' => 'string',
        'dias_vencimiento' => 'string',
        'plazo_meses' => 'string',
        'monto_credito_originacion' => 'string',
        'correo_electronico_consumidor' => 'string'
    ];
    
    protected static $apihubFormats = [
        'clave_actual_otorgante' => null,
        'nombre_otorgante' => null,
        'cuenta_actual' => null,
        'tipo_responsabilidad' => null,
        'tipo_cuenta' => null,
        'tipo_contrato' => null,
        'clave_unidad_monetaria' => null,
        'valor_activo_valuacion' => null,
        'numero_pagos' => null,
        'frecuencia_pagos' => null,
        'monto_pagar' => null,
        'fecha_apertura_cuenta' => null,
        'fecha_ultimo_pago' => null,
        'fecha_ultima_compra' => null,
        'fecha_cierre_cuenta' => null,
        'fecha_corte' => null,
        'garantia' => null,
        'credito_maximo' => null,
        'saldo_actual' => null,
        'limite_credito' => null,
        'saldo_vencido' => null,
        'numero_pagos_vencidos' => null,
        'pago_actual' => null,
        'historico_pagos' => null,
        'clave_prevencion' => null,
        'total_pagos_reportados' => null,
        'clave_anterior_otorgante' => null,
        'nombre_anterior_otorgante' => null,
        'numero_cuenta_anterior' => null,
        'fecha_primer_incumplimiento' => null,
        'saldo_insoluto' => null,
        'monto_ultimo_pago' => null,
        'fecha_ingreso_cartera_vencida' => null,
        'monto_correspondiente_intereses' => null,
        'forma_pago_actual_intereses' => null,
        'dias_vencimiento' => null,
        'plazo_meses' => null,
        'monto_credito_originacion' => null,
        'correo_electronico_consumidor' => null
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
        'clave_actual_otorgante' => 'claveActualOtorgante',
        'nombre_otorgante' => 'nombreOtorgante',
        'cuenta_actual' => 'cuentaActual',
        'tipo_responsabilidad' => 'tipoResponsabilidad',
        'tipo_cuenta' => 'tipoCuenta',
        'tipo_contrato' => 'tipoContrato',
        'clave_unidad_monetaria' => 'claveUnidadMonetaria',
        'valor_activo_valuacion' => 'valorActivoValuacion',
        'numero_pagos' => 'numeroPagos',
        'frecuencia_pagos' => 'frecuenciaPagos',
        'monto_pagar' => 'montoPagar',
        'fecha_apertura_cuenta' => 'fechaAperturaCuenta',
        'fecha_ultimo_pago' => 'fechaUltimoPago',
        'fecha_ultima_compra' => 'fechaUltimaCompra',
        'fecha_cierre_cuenta' => 'fechaCierreCuenta',
        'fecha_corte' => 'fechaCorte',
        'garantia' => 'garantia',
        'credito_maximo' => 'creditoMaximo',
        'saldo_actual' => 'saldoActual',
        'limite_credito' => 'limiteCredito',
        'saldo_vencido' => 'saldoVencido',
        'numero_pagos_vencidos' => 'numeroPagosVencidos',
        'pago_actual' => 'pagoActual',
        'historico_pagos' => 'historicoPagos',
        'clave_prevencion' => 'clavePrevencion',
        'total_pagos_reportados' => 'totalPagosReportados',
        'clave_anterior_otorgante' => 'claveAnteriorOtorgante',
        'nombre_anterior_otorgante' => 'nombreAnteriorOtorgante',
        'numero_cuenta_anterior' => 'numeroCuentaAnterior',
        'fecha_primer_incumplimiento' => 'fechaPrimerIncumplimiento',
        'saldo_insoluto' => 'saldoInsoluto',
        'monto_ultimo_pago' => 'montoUltimoPago',
        'fecha_ingreso_cartera_vencida' => 'fechaIngresoCarteraVencida',
        'monto_correspondiente_intereses' => 'montoCorrespondienteIntereses',
        'forma_pago_actual_intereses' => 'formaPagoActualIntereses',
        'dias_vencimiento' => 'diasVencimiento',
        'plazo_meses' => 'plazoMeses',
        'monto_credito_originacion' => 'montoCreditoOriginacion',
        'correo_electronico_consumidor' => 'correoElectronicoConsumidor'
    ];
    
    protected static $setters = [
        'clave_actual_otorgante' => 'setClaveActualOtorgante',
        'nombre_otorgante' => 'setNombreOtorgante',
        'cuenta_actual' => 'setCuentaActual',
        'tipo_responsabilidad' => 'setTipoResponsabilidad',
        'tipo_cuenta' => 'setTipoCuenta',
        'tipo_contrato' => 'setTipoContrato',
        'clave_unidad_monetaria' => 'setClaveUnidadMonetaria',
        'valor_activo_valuacion' => 'setValorActivoValuacion',
        'numero_pagos' => 'setNumeroPagos',
        'frecuencia_pagos' => 'setFrecuenciaPagos',
        'monto_pagar' => 'setMontoPagar',
        'fecha_apertura_cuenta' => 'setFechaAperturaCuenta',
        'fecha_ultimo_pago' => 'setFechaUltimoPago',
        'fecha_ultima_compra' => 'setFechaUltimaCompra',
        'fecha_cierre_cuenta' => 'setFechaCierreCuenta',
        'fecha_corte' => 'setFechaCorte',
        'garantia' => 'setGarantia',
        'credito_maximo' => 'setCreditoMaximo',
        'saldo_actual' => 'setSaldoActual',
        'limite_credito' => 'setLimiteCredito',
        'saldo_vencido' => 'setSaldoVencido',
        'numero_pagos_vencidos' => 'setNumeroPagosVencidos',
        'pago_actual' => 'setPagoActual',
        'historico_pagos' => 'setHistoricoPagos',
        'clave_prevencion' => 'setClavePrevencion',
        'total_pagos_reportados' => 'setTotalPagosReportados',
        'clave_anterior_otorgante' => 'setClaveAnteriorOtorgante',
        'nombre_anterior_otorgante' => 'setNombreAnteriorOtorgante',
        'numero_cuenta_anterior' => 'setNumeroCuentaAnterior',
        'fecha_primer_incumplimiento' => 'setFechaPrimerIncumplimiento',
        'saldo_insoluto' => 'setSaldoInsoluto',
        'monto_ultimo_pago' => 'setMontoUltimoPago',
        'fecha_ingreso_cartera_vencida' => 'setFechaIngresoCarteraVencida',
        'monto_correspondiente_intereses' => 'setMontoCorrespondienteIntereses',
        'forma_pago_actual_intereses' => 'setFormaPagoActualIntereses',
        'dias_vencimiento' => 'setDiasVencimiento',
        'plazo_meses' => 'setPlazoMeses',
        'monto_credito_originacion' => 'setMontoCreditoOriginacion',
        'correo_electronico_consumidor' => 'setCorreoElectronicoConsumidor'
    ];
    
    protected static $getters = [
        'clave_actual_otorgante' => 'getClaveActualOtorgante',
        'nombre_otorgante' => 'getNombreOtorgante',
        'cuenta_actual' => 'getCuentaActual',
        'tipo_responsabilidad' => 'getTipoResponsabilidad',
        'tipo_cuenta' => 'getTipoCuenta',
        'tipo_contrato' => 'getTipoContrato',
        'clave_unidad_monetaria' => 'getClaveUnidadMonetaria',
        'valor_activo_valuacion' => 'getValorActivoValuacion',
        'numero_pagos' => 'getNumeroPagos',
        'frecuencia_pagos' => 'getFrecuenciaPagos',
        'monto_pagar' => 'getMontoPagar',
        'fecha_apertura_cuenta' => 'getFechaAperturaCuenta',
        'fecha_ultimo_pago' => 'getFechaUltimoPago',
        'fecha_ultima_compra' => 'getFechaUltimaCompra',
        'fecha_cierre_cuenta' => 'getFechaCierreCuenta',
        'fecha_corte' => 'getFechaCorte',
        'garantia' => 'getGarantia',
        'credito_maximo' => 'getCreditoMaximo',
        'saldo_actual' => 'getSaldoActual',
        'limite_credito' => 'getLimiteCredito',
        'saldo_vencido' => 'getSaldoVencido',
        'numero_pagos_vencidos' => 'getNumeroPagosVencidos',
        'pago_actual' => 'getPagoActual',
        'historico_pagos' => 'getHistoricoPagos',
        'clave_prevencion' => 'getClavePrevencion',
        'total_pagos_reportados' => 'getTotalPagosReportados',
        'clave_anterior_otorgante' => 'getClaveAnteriorOtorgante',
        'nombre_anterior_otorgante' => 'getNombreAnteriorOtorgante',
        'numero_cuenta_anterior' => 'getNumeroCuentaAnterior',
        'fecha_primer_incumplimiento' => 'getFechaPrimerIncumplimiento',
        'saldo_insoluto' => 'getSaldoInsoluto',
        'monto_ultimo_pago' => 'getMontoUltimoPago',
        'fecha_ingreso_cartera_vencida' => 'getFechaIngresoCarteraVencida',
        'monto_correspondiente_intereses' => 'getMontoCorrespondienteIntereses',
        'forma_pago_actual_intereses' => 'getFormaPagoActualIntereses',
        'dias_vencimiento' => 'getDiasVencimiento',
        'plazo_meses' => 'getPlazoMeses',
        'monto_credito_originacion' => 'getMontoCreditoOriginacion',
        'correo_electronico_consumidor' => 'getCorreoElectronicoConsumidor'
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
        $this->container['clave_actual_otorgante'] = isset($data['clave_actual_otorgante']) ? $data['clave_actual_otorgante'] : null;
        $this->container['nombre_otorgante'] = isset($data['nombre_otorgante']) ? $data['nombre_otorgante'] : null;
        $this->container['cuenta_actual'] = isset($data['cuenta_actual']) ? $data['cuenta_actual'] : null;
        $this->container['tipo_responsabilidad'] = isset($data['tipo_responsabilidad']) ? $data['tipo_responsabilidad'] : null;
        $this->container['tipo_cuenta'] = isset($data['tipo_cuenta']) ? $data['tipo_cuenta'] : null;
        $this->container['tipo_contrato'] = isset($data['tipo_contrato']) ? $data['tipo_contrato'] : null;
        $this->container['clave_unidad_monetaria'] = isset($data['clave_unidad_monetaria']) ? $data['clave_unidad_monetaria'] : null;
        $this->container['valor_activo_valuacion'] = isset($data['valor_activo_valuacion']) ? $data['valor_activo_valuacion'] : null;
        $this->container['numero_pagos'] = isset($data['numero_pagos']) ? $data['numero_pagos'] : null;
        $this->container['frecuencia_pagos'] = isset($data['frecuencia_pagos']) ? $data['frecuencia_pagos'] : null;
        $this->container['monto_pagar'] = isset($data['monto_pagar']) ? $data['monto_pagar'] : null;
        $this->container['fecha_apertura_cuenta'] = isset($data['fecha_apertura_cuenta']) ? $data['fecha_apertura_cuenta'] : null;
        $this->container['fecha_ultimo_pago'] = isset($data['fecha_ultimo_pago']) ? $data['fecha_ultimo_pago'] : null;
        $this->container['fecha_ultima_compra'] = isset($data['fecha_ultima_compra']) ? $data['fecha_ultima_compra'] : null;
        $this->container['fecha_cierre_cuenta'] = isset($data['fecha_cierre_cuenta']) ? $data['fecha_cierre_cuenta'] : null;
        $this->container['fecha_corte'] = isset($data['fecha_corte']) ? $data['fecha_corte'] : null;
        $this->container['garantia'] = isset($data['garantia']) ? $data['garantia'] : null;
        $this->container['credito_maximo'] = isset($data['credito_maximo']) ? $data['credito_maximo'] : null;
        $this->container['saldo_actual'] = isset($data['saldo_actual']) ? $data['saldo_actual'] : null;
        $this->container['limite_credito'] = isset($data['limite_credito']) ? $data['limite_credito'] : null;
        $this->container['saldo_vencido'] = isset($data['saldo_vencido']) ? $data['saldo_vencido'] : null;
        $this->container['numero_pagos_vencidos'] = isset($data['numero_pagos_vencidos']) ? $data['numero_pagos_vencidos'] : null;
        $this->container['pago_actual'] = isset($data['pago_actual']) ? $data['pago_actual'] : null;
        $this->container['historico_pagos'] = isset($data['historico_pagos']) ? $data['historico_pagos'] : null;
        $this->container['clave_prevencion'] = isset($data['clave_prevencion']) ? $data['clave_prevencion'] : null;
        $this->container['total_pagos_reportados'] = isset($data['total_pagos_reportados']) ? $data['total_pagos_reportados'] : null;
        $this->container['clave_anterior_otorgante'] = isset($data['clave_anterior_otorgante']) ? $data['clave_anterior_otorgante'] : null;
        $this->container['nombre_anterior_otorgante'] = isset($data['nombre_anterior_otorgante']) ? $data['nombre_anterior_otorgante'] : null;
        $this->container['numero_cuenta_anterior'] = isset($data['numero_cuenta_anterior']) ? $data['numero_cuenta_anterior'] : null;
        $this->container['fecha_primer_incumplimiento'] = isset($data['fecha_primer_incumplimiento']) ? $data['fecha_primer_incumplimiento'] : null;
        $this->container['saldo_insoluto'] = isset($data['saldo_insoluto']) ? $data['saldo_insoluto'] : null;
        $this->container['monto_ultimo_pago'] = isset($data['monto_ultimo_pago']) ? $data['monto_ultimo_pago'] : null;
        $this->container['fecha_ingreso_cartera_vencida'] = isset($data['fecha_ingreso_cartera_vencida']) ? $data['fecha_ingreso_cartera_vencida'] : null;
        $this->container['monto_correspondiente_intereses'] = isset($data['monto_correspondiente_intereses']) ? $data['monto_correspondiente_intereses'] : null;
        $this->container['forma_pago_actual_intereses'] = isset($data['forma_pago_actual_intereses']) ? $data['forma_pago_actual_intereses'] : null;
        $this->container['dias_vencimiento'] = isset($data['dias_vencimiento']) ? $data['dias_vencimiento'] : null;
        $this->container['plazo_meses'] = isset($data['plazo_meses']) ? $data['plazo_meses'] : null;
        $this->container['monto_credito_originacion'] = isset($data['monto_credito_originacion']) ? $data['monto_credito_originacion'] : null;
        $this->container['correo_electronico_consumidor'] = isset($data['correo_electronico_consumidor']) ? $data['correo_electronico_consumidor'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['clave_actual_otorgante']) && (mb_strlen($this->container['clave_actual_otorgante']) > 10)) {
            $invalidProperties[] = "invalid value for 'clave_actual_otorgante', the character length must be smaller than or equal to 10.";
        }
        if (!is_null($this->container['clave_actual_otorgante']) && (mb_strlen($this->container['clave_actual_otorgante']) < 10)) {
            $invalidProperties[] = "invalid value for 'clave_actual_otorgante', the character length must be bigger than or equal to 10.";
        }
        if (!is_null($this->container['nombre_otorgante']) && (mb_strlen($this->container['nombre_otorgante']) > 40)) {
            $invalidProperties[] = "invalid value for 'nombre_otorgante', the character length must be smaller than or equal to 40.";
        }
        if (!is_null($this->container['nombre_otorgante']) && (mb_strlen($this->container['nombre_otorgante']) < 0)) {
            $invalidProperties[] = "invalid value for 'nombre_otorgante', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['cuenta_actual']) && (mb_strlen($this->container['cuenta_actual']) > 25)) {
            $invalidProperties[] = "invalid value for 'cuenta_actual', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['cuenta_actual']) && (mb_strlen($this->container['cuenta_actual']) < 0)) {
            $invalidProperties[] = "invalid value for 'cuenta_actual', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['tipo_responsabilidad']) && (mb_strlen($this->container['tipo_responsabilidad']) > 1)) {
            $invalidProperties[] = "invalid value for 'tipo_responsabilidad', the character length must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['tipo_responsabilidad']) && (mb_strlen($this->container['tipo_responsabilidad']) < 0)) {
            $invalidProperties[] = "invalid value for 'tipo_responsabilidad', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['tipo_cuenta']) && (mb_strlen($this->container['tipo_cuenta']) > 1)) {
            $invalidProperties[] = "invalid value for 'tipo_cuenta', the character length must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['tipo_cuenta']) && (mb_strlen($this->container['tipo_cuenta']) < 0)) {
            $invalidProperties[] = "invalid value for 'tipo_cuenta', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['tipo_contrato']) && (mb_strlen($this->container['tipo_contrato']) > 2)) {
            $invalidProperties[] = "invalid value for 'tipo_contrato', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['tipo_contrato']) && (mb_strlen($this->container['tipo_contrato']) < 0)) {
            $invalidProperties[] = "invalid value for 'tipo_contrato', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['clave_unidad_monetaria']) && (mb_strlen($this->container['clave_unidad_monetaria']) > 2)) {
            $invalidProperties[] = "invalid value for 'clave_unidad_monetaria', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['clave_unidad_monetaria']) && (mb_strlen($this->container['clave_unidad_monetaria']) < 0)) {
            $invalidProperties[] = "invalid value for 'clave_unidad_monetaria', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['valor_activo_valuacion']) && (mb_strlen($this->container['valor_activo_valuacion']) > 9)) {
            $invalidProperties[] = "invalid value for 'valor_activo_valuacion', the character length must be smaller than or equal to 9.";
        }
        if (!is_null($this->container['valor_activo_valuacion']) && (mb_strlen($this->container['valor_activo_valuacion']) < 0)) {
            $invalidProperties[] = "invalid value for 'valor_activo_valuacion', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['numero_pagos']) && (mb_strlen($this->container['numero_pagos']) > 4)) {
            $invalidProperties[] = "invalid value for 'numero_pagos', the character length must be smaller than or equal to 4.";
        }
        if (!is_null($this->container['numero_pagos']) && (mb_strlen($this->container['numero_pagos']) < 0)) {
            $invalidProperties[] = "invalid value for 'numero_pagos', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['frecuencia_pagos']) && (mb_strlen($this->container['frecuencia_pagos']) > 1)) {
            $invalidProperties[] = "invalid value for 'frecuencia_pagos', the character length must be smaller than or equal to 1.";
        }
        if (!is_null($this->container['frecuencia_pagos']) && (mb_strlen($this->container['frecuencia_pagos']) < 0)) {
            $invalidProperties[] = "invalid value for 'frecuencia_pagos', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['monto_pagar']) && (mb_strlen($this->container['monto_pagar']) > 9)) {
            $invalidProperties[] = "invalid value for 'monto_pagar', the character length must be smaller than or equal to 9.";
        }
        if (!is_null($this->container['monto_pagar']) && (mb_strlen($this->container['monto_pagar']) < 0)) {
            $invalidProperties[] = "invalid value for 'monto_pagar', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_apertura_cuenta']) && (mb_strlen($this->container['fecha_apertura_cuenta']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_apertura_cuenta', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_apertura_cuenta']) && (mb_strlen($this->container['fecha_apertura_cuenta']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_apertura_cuenta', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_ultimo_pago']) && (mb_strlen($this->container['fecha_ultimo_pago']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_ultimo_pago', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_ultimo_pago']) && (mb_strlen($this->container['fecha_ultimo_pago']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_ultimo_pago', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_ultima_compra']) && (mb_strlen($this->container['fecha_ultima_compra']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_ultima_compra', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_ultima_compra']) && (mb_strlen($this->container['fecha_ultima_compra']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_ultima_compra', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_cierre_cuenta']) && (mb_strlen($this->container['fecha_cierre_cuenta']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_cierre_cuenta', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_cierre_cuenta']) && (mb_strlen($this->container['fecha_cierre_cuenta']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_cierre_cuenta', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_corte']) && (mb_strlen($this->container['fecha_corte']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_corte', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_corte']) && (mb_strlen($this->container['fecha_corte']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_corte', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['garantia']) && (mb_strlen($this->container['garantia']) > 200)) {
            $invalidProperties[] = "invalid value for 'garantia', the character length must be smaller than or equal to 200.";
        }
        if (!is_null($this->container['garantia']) && (mb_strlen($this->container['garantia']) < 0)) {
            $invalidProperties[] = "invalid value for 'garantia', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['credito_maximo']) && (mb_strlen($this->container['credito_maximo']) > 9)) {
            $invalidProperties[] = "invalid value for 'credito_maximo', the character length must be smaller than or equal to 9.";
        }
        if (!is_null($this->container['credito_maximo']) && (mb_strlen($this->container['credito_maximo']) < 0)) {
            $invalidProperties[] = "invalid value for 'credito_maximo', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['saldo_actual']) && (mb_strlen($this->container['saldo_actual']) > 10)) {
            $invalidProperties[] = "invalid value for 'saldo_actual', the character length must be smaller than or equal to 10.";
        }
        if (!is_null($this->container['saldo_actual']) && (mb_strlen($this->container['saldo_actual']) < 0)) {
            $invalidProperties[] = "invalid value for 'saldo_actual', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['limite_credito']) && (mb_strlen($this->container['limite_credito']) > 9)) {
            $invalidProperties[] = "invalid value for 'limite_credito', the character length must be smaller than or equal to 9.";
        }
        if (!is_null($this->container['limite_credito']) && (mb_strlen($this->container['limite_credito']) < 0)) {
            $invalidProperties[] = "invalid value for 'limite_credito', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['saldo_vencido']) && (mb_strlen($this->container['saldo_vencido']) > 9)) {
            $invalidProperties[] = "invalid value for 'saldo_vencido', the character length must be smaller than or equal to 9.";
        }
        if (!is_null($this->container['saldo_vencido']) && (mb_strlen($this->container['saldo_vencido']) < 0)) {
            $invalidProperties[] = "invalid value for 'saldo_vencido', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['numero_pagos_vencidos']) && (mb_strlen($this->container['numero_pagos_vencidos']) > 4)) {
            $invalidProperties[] = "invalid value for 'numero_pagos_vencidos', the character length must be smaller than or equal to 4.";
        }
        if (!is_null($this->container['numero_pagos_vencidos']) && (mb_strlen($this->container['numero_pagos_vencidos']) < 0)) {
            $invalidProperties[] = "invalid value for 'numero_pagos_vencidos', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['pago_actual']) && (mb_strlen($this->container['pago_actual']) > 2)) {
            $invalidProperties[] = "invalid value for 'pago_actual', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['pago_actual']) && (mb_strlen($this->container['pago_actual']) < 0)) {
            $invalidProperties[] = "invalid value for 'pago_actual', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['historico_pagos']) && (mb_strlen($this->container['historico_pagos']) > 168)) {
            $invalidProperties[] = "invalid value for 'historico_pagos', the character length must be smaller than or equal to 168.";
        }
        if (!is_null($this->container['historico_pagos']) && (mb_strlen($this->container['historico_pagos']) < 0)) {
            $invalidProperties[] = "invalid value for 'historico_pagos', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['clave_prevencion']) && (mb_strlen($this->container['clave_prevencion']) > 2)) {
            $invalidProperties[] = "invalid value for 'clave_prevencion', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['clave_prevencion']) && (mb_strlen($this->container['clave_prevencion']) < 0)) {
            $invalidProperties[] = "invalid value for 'clave_prevencion', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['total_pagos_reportados']) && (mb_strlen($this->container['total_pagos_reportados']) > 3)) {
            $invalidProperties[] = "invalid value for 'total_pagos_reportados', the character length must be smaller than or equal to 3.";
        }
        if (!is_null($this->container['total_pagos_reportados']) && (mb_strlen($this->container['total_pagos_reportados']) < 0)) {
            $invalidProperties[] = "invalid value for 'total_pagos_reportados', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['clave_anterior_otorgante']) && (mb_strlen($this->container['clave_anterior_otorgante']) > 10)) {
            $invalidProperties[] = "invalid value for 'clave_anterior_otorgante', the character length must be smaller than or equal to 10.";
        }
        if (!is_null($this->container['clave_anterior_otorgante']) && (mb_strlen($this->container['clave_anterior_otorgante']) < 0)) {
            $invalidProperties[] = "invalid value for 'clave_anterior_otorgante', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['nombre_anterior_otorgante']) && (mb_strlen($this->container['nombre_anterior_otorgante']) > 40)) {
            $invalidProperties[] = "invalid value for 'nombre_anterior_otorgante', the character length must be smaller than or equal to 40.";
        }
        if (!is_null($this->container['nombre_anterior_otorgante']) && (mb_strlen($this->container['nombre_anterior_otorgante']) < 0)) {
            $invalidProperties[] = "invalid value for 'nombre_anterior_otorgante', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['numero_cuenta_anterior']) && (mb_strlen($this->container['numero_cuenta_anterior']) > 25)) {
            $invalidProperties[] = "invalid value for 'numero_cuenta_anterior', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['numero_cuenta_anterior']) && (mb_strlen($this->container['numero_cuenta_anterior']) < 0)) {
            $invalidProperties[] = "invalid value for 'numero_cuenta_anterior', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_primer_incumplimiento']) && (mb_strlen($this->container['fecha_primer_incumplimiento']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_primer_incumplimiento', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_primer_incumplimiento']) && (mb_strlen($this->container['fecha_primer_incumplimiento']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_primer_incumplimiento', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['saldo_insoluto']) && (mb_strlen($this->container['saldo_insoluto']) > 10)) {
            $invalidProperties[] = "invalid value for 'saldo_insoluto', the character length must be smaller than or equal to 10.";
        }
        if (!is_null($this->container['saldo_insoluto']) && (mb_strlen($this->container['saldo_insoluto']) < 0)) {
            $invalidProperties[] = "invalid value for 'saldo_insoluto', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['monto_ultimo_pago']) && (mb_strlen($this->container['monto_ultimo_pago']) > 10)) {
            $invalidProperties[] = "invalid value for 'monto_ultimo_pago', the character length must be smaller than or equal to 10.";
        }
        if (!is_null($this->container['monto_ultimo_pago']) && (mb_strlen($this->container['monto_ultimo_pago']) < 0)) {
            $invalidProperties[] = "invalid value for 'monto_ultimo_pago', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['fecha_ingreso_cartera_vencida']) && (mb_strlen($this->container['fecha_ingreso_cartera_vencida']) > 8)) {
            $invalidProperties[] = "invalid value for 'fecha_ingreso_cartera_vencida', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['fecha_ingreso_cartera_vencida']) && (mb_strlen($this->container['fecha_ingreso_cartera_vencida']) < 0)) {
            $invalidProperties[] = "invalid value for 'fecha_ingreso_cartera_vencida', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['monto_correspondiente_intereses']) && (mb_strlen($this->container['monto_correspondiente_intereses']) > 9)) {
            $invalidProperties[] = "invalid value for 'monto_correspondiente_intereses', the character length must be smaller than or equal to 9.";
        }
        if (!is_null($this->container['monto_correspondiente_intereses']) && (mb_strlen($this->container['monto_correspondiente_intereses']) < 0)) {
            $invalidProperties[] = "invalid value for 'monto_correspondiente_intereses', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['forma_pago_actual_intereses']) && (mb_strlen($this->container['forma_pago_actual_intereses']) > 2)) {
            $invalidProperties[] = "invalid value for 'forma_pago_actual_intereses', the character length must be smaller than or equal to 2.";
        }
        if (!is_null($this->container['forma_pago_actual_intereses']) && (mb_strlen($this->container['forma_pago_actual_intereses']) < 0)) {
            $invalidProperties[] = "invalid value for 'forma_pago_actual_intereses', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['dias_vencimiento']) && (mb_strlen($this->container['dias_vencimiento']) > 3)) {
            $invalidProperties[] = "invalid value for 'dias_vencimiento', the character length must be smaller than or equal to 3.";
        }
        if (!is_null($this->container['dias_vencimiento']) && (mb_strlen($this->container['dias_vencimiento']) < 0)) {
            $invalidProperties[] = "invalid value for 'dias_vencimiento', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['plazo_meses']) && (mb_strlen($this->container['plazo_meses']) > 6)) {
            $invalidProperties[] = "invalid value for 'plazo_meses', the character length must be smaller than or equal to 6.";
        }
        if (!is_null($this->container['plazo_meses']) && (mb_strlen($this->container['plazo_meses']) < 0)) {
            $invalidProperties[] = "invalid value for 'plazo_meses', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['monto_credito_originacion']) && (mb_strlen($this->container['monto_credito_originacion']) > 10)) {
            $invalidProperties[] = "invalid value for 'monto_credito_originacion', the character length must be smaller than or equal to 10.";
        }
        if (!is_null($this->container['monto_credito_originacion']) && (mb_strlen($this->container['monto_credito_originacion']) < 0)) {
            $invalidProperties[] = "invalid value for 'monto_credito_originacion', the character length must be bigger than or equal to 0.";
        }
        if (!is_null($this->container['correo_electronico_consumidor']) && (mb_strlen($this->container['correo_electronico_consumidor']) > 40)) {
            $invalidProperties[] = "invalid value for 'correo_electronico_consumidor', the character length must be smaller than or equal to 40.";
        }
        if (!is_null($this->container['correo_electronico_consumidor']) && (mb_strlen($this->container['correo_electronico_consumidor']) < 0)) {
            $invalidProperties[] = "invalid value for 'correo_electronico_consumidor', the character length must be bigger than or equal to 0.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getClaveActualOtorgante()
    {
        return $this->container['clave_actual_otorgante'];
    }
    
    public function setClaveActualOtorgante($clave_actual_otorgante)
    {
        if (!is_null($clave_actual_otorgante) && (mb_strlen($clave_actual_otorgante) > 10)) {
            throw new \InvalidArgumentException('invalid length for $clave_actual_otorgante when calling Cuenta., must be smaller than or equal to 10.');
        }
        if (!is_null($clave_actual_otorgante) && (mb_strlen($clave_actual_otorgante) < 10)) {
            throw new \InvalidArgumentException('invalid length for $clave_actual_otorgante when calling Cuenta., must be bigger than or equal to 10.');
        }
        $this->container['clave_actual_otorgante'] = $clave_actual_otorgante;
        return $this;
    }
    
    public function getNombreOtorgante()
    {
        return $this->container['nombre_otorgante'];
    }
    
    public function setNombreOtorgante($nombre_otorgante)
    {
        if (!is_null($nombre_otorgante) && (mb_strlen($nombre_otorgante) > 40)) {
            throw new \InvalidArgumentException('invalid length for $nombre_otorgante when calling Cuenta., must be smaller than or equal to 40.');
        }
        if (!is_null($nombre_otorgante) && (mb_strlen($nombre_otorgante) < 0)) {
            throw new \InvalidArgumentException('invalid length for $nombre_otorgante when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['nombre_otorgante'] = $nombre_otorgante;
        return $this;
    }
    
    public function getCuentaActual()
    {
        return $this->container['cuenta_actual'];
    }
    
    public function setCuentaActual($cuenta_actual)
    {
        if (!is_null($cuenta_actual) && (mb_strlen($cuenta_actual) > 25)) {
            throw new \InvalidArgumentException('invalid length for $cuenta_actual when calling Cuenta., must be smaller than or equal to 25.');
        }
        if (!is_null($cuenta_actual) && (mb_strlen($cuenta_actual) < 0)) {
            throw new \InvalidArgumentException('invalid length for $cuenta_actual when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['cuenta_actual'] = $cuenta_actual;
        return $this;
    }
    
    public function getTipoResponsabilidad()
    {
        return $this->container['tipo_responsabilidad'];
    }
    
    public function setTipoResponsabilidad($tipo_responsabilidad)
    {
        if (!is_null($tipo_responsabilidad) && (mb_strlen($tipo_responsabilidad) > 1)) {
            throw new \InvalidArgumentException('invalid length for $tipo_responsabilidad when calling Cuenta., must be smaller than or equal to 1.');
        }
        if (!is_null($tipo_responsabilidad) && (mb_strlen($tipo_responsabilidad) < 0)) {
            throw new \InvalidArgumentException('invalid length for $tipo_responsabilidad when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['tipo_responsabilidad'] = $tipo_responsabilidad;
        return $this;
    }
    
    public function getTipoCuenta()
    {
        return $this->container['tipo_cuenta'];
    }
    
    public function setTipoCuenta($tipo_cuenta)
    {
        if (!is_null($tipo_cuenta) && (mb_strlen($tipo_cuenta) > 1)) {
            throw new \InvalidArgumentException('invalid length for $tipo_cuenta when calling Cuenta., must be smaller than or equal to 1.');
        }
        if (!is_null($tipo_cuenta) && (mb_strlen($tipo_cuenta) < 0)) {
            throw new \InvalidArgumentException('invalid length for $tipo_cuenta when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['tipo_cuenta'] = $tipo_cuenta;
        return $this;
    }
    
    public function getTipoContrato()
    {
        return $this->container['tipo_contrato'];
    }
    
    public function setTipoContrato($tipo_contrato)
    {
        if (!is_null($tipo_contrato) && (mb_strlen($tipo_contrato) > 2)) {
            throw new \InvalidArgumentException('invalid length for $tipo_contrato when calling Cuenta., must be smaller than or equal to 2.');
        }
        if (!is_null($tipo_contrato) && (mb_strlen($tipo_contrato) < 0)) {
            throw new \InvalidArgumentException('invalid length for $tipo_contrato when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['tipo_contrato'] = $tipo_contrato;
        return $this;
    }
    
    public function getClaveUnidadMonetaria()
    {
        return $this->container['clave_unidad_monetaria'];
    }
    
    public function setClaveUnidadMonetaria($clave_unidad_monetaria)
    {
        if (!is_null($clave_unidad_monetaria) && (mb_strlen($clave_unidad_monetaria) > 2)) {
            throw new \InvalidArgumentException('invalid length for $clave_unidad_monetaria when calling Cuenta., must be smaller than or equal to 2.');
        }
        if (!is_null($clave_unidad_monetaria) && (mb_strlen($clave_unidad_monetaria) < 0)) {
            throw new \InvalidArgumentException('invalid length for $clave_unidad_monetaria when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['clave_unidad_monetaria'] = $clave_unidad_monetaria;
        return $this;
    }
    
    public function getValorActivoValuacion()
    {
        return $this->container['valor_activo_valuacion'];
    }
    
    public function setValorActivoValuacion($valor_activo_valuacion)
    {
        if (!is_null($valor_activo_valuacion) && (mb_strlen($valor_activo_valuacion) > 9)) {
            throw new \InvalidArgumentException('invalid length for $valor_activo_valuacion when calling Cuenta., must be smaller than or equal to 9.');
        }
        if (!is_null($valor_activo_valuacion) && (mb_strlen($valor_activo_valuacion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $valor_activo_valuacion when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['valor_activo_valuacion'] = $valor_activo_valuacion;
        return $this;
    }
    
    public function getNumeroPagos()
    {
        return $this->container['numero_pagos'];
    }
    
    public function setNumeroPagos($numero_pagos)
    {
        if (!is_null($numero_pagos) && (mb_strlen($numero_pagos) > 4)) {
            throw new \InvalidArgumentException('invalid length for $numero_pagos when calling Cuenta., must be smaller than or equal to 4.');
        }
        if (!is_null($numero_pagos) && (mb_strlen($numero_pagos) < 0)) {
            throw new \InvalidArgumentException('invalid length for $numero_pagos when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['numero_pagos'] = $numero_pagos;
        return $this;
    }
    
    public function getFrecuenciaPagos()
    {
        return $this->container['frecuencia_pagos'];
    }
    
    public function setFrecuenciaPagos($frecuencia_pagos)
    {
        if (!is_null($frecuencia_pagos) && (mb_strlen($frecuencia_pagos) > 1)) {
            throw new \InvalidArgumentException('invalid length for $frecuencia_pagos when calling Cuenta., must be smaller than or equal to 1.');
        }
        if (!is_null($frecuencia_pagos) && (mb_strlen($frecuencia_pagos) < 0)) {
            throw new \InvalidArgumentException('invalid length for $frecuencia_pagos when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['frecuencia_pagos'] = $frecuencia_pagos;
        return $this;
    }
    
    public function getMontoPagar()
    {
        return $this->container['monto_pagar'];
    }
    
    public function setMontoPagar($monto_pagar)
    {
        if (!is_null($monto_pagar) && (mb_strlen($monto_pagar) > 9)) {
            throw new \InvalidArgumentException('invalid length for $monto_pagar when calling Cuenta., must be smaller than or equal to 9.');
        }
        if (!is_null($monto_pagar) && (mb_strlen($monto_pagar) < 0)) {
            throw new \InvalidArgumentException('invalid length for $monto_pagar when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['monto_pagar'] = $monto_pagar;
        return $this;
    }
    
    public function getFechaAperturaCuenta()
    {
        return $this->container['fecha_apertura_cuenta'];
    }
    
    public function setFechaAperturaCuenta($fecha_apertura_cuenta)
    {
        if (!is_null($fecha_apertura_cuenta) && (mb_strlen($fecha_apertura_cuenta) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_apertura_cuenta when calling Cuenta., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_apertura_cuenta) && (mb_strlen($fecha_apertura_cuenta) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_apertura_cuenta when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['fecha_apertura_cuenta'] = $fecha_apertura_cuenta;
        return $this;
    }
    
    public function getFechaUltimoPago()
    {
        return $this->container['fecha_ultimo_pago'];
    }
    
    public function setFechaUltimoPago($fecha_ultimo_pago)
    {
        if (!is_null($fecha_ultimo_pago) && (mb_strlen($fecha_ultimo_pago) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_ultimo_pago when calling Cuenta., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_ultimo_pago) && (mb_strlen($fecha_ultimo_pago) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_ultimo_pago when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['fecha_ultimo_pago'] = $fecha_ultimo_pago;
        return $this;
    }
    
    public function getFechaUltimaCompra()
    {
        return $this->container['fecha_ultima_compra'];
    }
    
    public function setFechaUltimaCompra($fecha_ultima_compra)
    {
        if (!is_null($fecha_ultima_compra) && (mb_strlen($fecha_ultima_compra) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_ultima_compra when calling Cuenta., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_ultima_compra) && (mb_strlen($fecha_ultima_compra) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_ultima_compra when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['fecha_ultima_compra'] = $fecha_ultima_compra;
        return $this;
    }
    
    public function getFechaCierreCuenta()
    {
        return $this->container['fecha_cierre_cuenta'];
    }
    
    public function setFechaCierreCuenta($fecha_cierre_cuenta)
    {
        if (!is_null($fecha_cierre_cuenta) && (mb_strlen($fecha_cierre_cuenta) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_cierre_cuenta when calling Cuenta., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_cierre_cuenta) && (mb_strlen($fecha_cierre_cuenta) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_cierre_cuenta when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['fecha_cierre_cuenta'] = $fecha_cierre_cuenta;
        return $this;
    }
    
    public function getFechaCorte()
    {
        return $this->container['fecha_corte'];
    }
    
    public function setFechaCorte($fecha_corte)
    {
        if (!is_null($fecha_corte) && (mb_strlen($fecha_corte) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_corte when calling Cuenta., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_corte) && (mb_strlen($fecha_corte) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_corte when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['fecha_corte'] = $fecha_corte;
        return $this;
    }
    
    public function getGarantia()
    {
        return $this->container['garantia'];
    }
    
    public function setGarantia($garantia)
    {
        if (!is_null($garantia) && (mb_strlen($garantia) > 200)) {
            throw new \InvalidArgumentException('invalid length for $garantia when calling Cuenta., must be smaller than or equal to 200.');
        }
        if (!is_null($garantia) && (mb_strlen($garantia) < 0)) {
            throw new \InvalidArgumentException('invalid length for $garantia when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['garantia'] = $garantia;
        return $this;
    }
    
    public function getCreditoMaximo()
    {
        return $this->container['credito_maximo'];
    }
    
    public function setCreditoMaximo($credito_maximo)
    {
        if (!is_null($credito_maximo) && (mb_strlen($credito_maximo) > 9)) {
            throw new \InvalidArgumentException('invalid length for $credito_maximo when calling Cuenta., must be smaller than or equal to 9.');
        }
        if (!is_null($credito_maximo) && (mb_strlen($credito_maximo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $credito_maximo when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['credito_maximo'] = $credito_maximo;
        return $this;
    }
    
    public function getSaldoActual()
    {
        return $this->container['saldo_actual'];
    }
    
    public function setSaldoActual($saldo_actual)
    {
        if (!is_null($saldo_actual) && (mb_strlen($saldo_actual) > 10)) {
            throw new \InvalidArgumentException('invalid length for $saldo_actual when calling Cuenta., must be smaller than or equal to 10.');
        }
        if (!is_null($saldo_actual) && (mb_strlen($saldo_actual) < 0)) {
            throw new \InvalidArgumentException('invalid length for $saldo_actual when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['saldo_actual'] = $saldo_actual;
        return $this;
    }
    
    public function getLimiteCredito()
    {
        return $this->container['limite_credito'];
    }
    
    public function setLimiteCredito($limite_credito)
    {
        if (!is_null($limite_credito) && (mb_strlen($limite_credito) > 9)) {
            throw new \InvalidArgumentException('invalid length for $limite_credito when calling Cuenta., must be smaller than or equal to 9.');
        }
        if (!is_null($limite_credito) && (mb_strlen($limite_credito) < 0)) {
            throw new \InvalidArgumentException('invalid length for $limite_credito when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['limite_credito'] = $limite_credito;
        return $this;
    }
    
    public function getSaldoVencido()
    {
        return $this->container['saldo_vencido'];
    }
    
    public function setSaldoVencido($saldo_vencido)
    {
        if (!is_null($saldo_vencido) && (mb_strlen($saldo_vencido) > 9)) {
            throw new \InvalidArgumentException('invalid length for $saldo_vencido when calling Cuenta., must be smaller than or equal to 9.');
        }
        if (!is_null($saldo_vencido) && (mb_strlen($saldo_vencido) < 0)) {
            throw new \InvalidArgumentException('invalid length for $saldo_vencido when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['saldo_vencido'] = $saldo_vencido;
        return $this;
    }
    
    public function getNumeroPagosVencidos()
    {
        return $this->container['numero_pagos_vencidos'];
    }
    
    public function setNumeroPagosVencidos($numero_pagos_vencidos)
    {
        if (!is_null($numero_pagos_vencidos) && (mb_strlen($numero_pagos_vencidos) > 4)) {
            throw new \InvalidArgumentException('invalid length for $numero_pagos_vencidos when calling Cuenta., must be smaller than or equal to 4.');
        }
        if (!is_null($numero_pagos_vencidos) && (mb_strlen($numero_pagos_vencidos) < 0)) {
            throw new \InvalidArgumentException('invalid length for $numero_pagos_vencidos when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['numero_pagos_vencidos'] = $numero_pagos_vencidos;
        return $this;
    }
    
    public function getPagoActual()
    {
        return $this->container['pago_actual'];
    }
    
    public function setPagoActual($pago_actual)
    {
        if (!is_null($pago_actual) && (mb_strlen($pago_actual) > 2)) {
            throw new \InvalidArgumentException('invalid length for $pago_actual when calling Cuenta., must be smaller than or equal to 2.');
        }
        if (!is_null($pago_actual) && (mb_strlen($pago_actual) < 0)) {
            throw new \InvalidArgumentException('invalid length for $pago_actual when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['pago_actual'] = $pago_actual;
        return $this;
    }
    
    public function getHistoricoPagos()
    {
        return $this->container['historico_pagos'];
    }
    
    public function setHistoricoPagos($historico_pagos)
    {
        if (!is_null($historico_pagos) && (mb_strlen($historico_pagos) > 168)) {
            throw new \InvalidArgumentException('invalid length for $historico_pagos when calling Cuenta., must be smaller than or equal to 168.');
        }
        if (!is_null($historico_pagos) && (mb_strlen($historico_pagos) < 0)) {
            throw new \InvalidArgumentException('invalid length for $historico_pagos when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['historico_pagos'] = $historico_pagos;
        return $this;
    }
    
    public function getClavePrevencion()
    {
        return $this->container['clave_prevencion'];
    }
    
    public function setClavePrevencion($clave_prevencion)
    {
        if (!is_null($clave_prevencion) && (mb_strlen($clave_prevencion) > 2)) {
            throw new \InvalidArgumentException('invalid length for $clave_prevencion when calling Cuenta., must be smaller than or equal to 2.');
        }
        if (!is_null($clave_prevencion) && (mb_strlen($clave_prevencion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $clave_prevencion when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['clave_prevencion'] = $clave_prevencion;
        return $this;
    }
    
    public function getTotalPagosReportados()
    {
        return $this->container['total_pagos_reportados'];
    }
    
    public function setTotalPagosReportados($total_pagos_reportados)
    {
        if (!is_null($total_pagos_reportados) && (mb_strlen($total_pagos_reportados) > 3)) {
            throw new \InvalidArgumentException('invalid length for $total_pagos_reportados when calling Cuenta., must be smaller than or equal to 3.');
        }
        if (!is_null($total_pagos_reportados) && (mb_strlen($total_pagos_reportados) < 0)) {
            throw new \InvalidArgumentException('invalid length for $total_pagos_reportados when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['total_pagos_reportados'] = $total_pagos_reportados;
        return $this;
    }
    
    public function getClaveAnteriorOtorgante()
    {
        return $this->container['clave_anterior_otorgante'];
    }
    
    public function setClaveAnteriorOtorgante($clave_anterior_otorgante)
    {
        if (!is_null($clave_anterior_otorgante) && (mb_strlen($clave_anterior_otorgante) > 10)) {
            throw new \InvalidArgumentException('invalid length for $clave_anterior_otorgante when calling Cuenta., must be smaller than or equal to 10.');
        }
        if (!is_null($clave_anterior_otorgante) && (mb_strlen($clave_anterior_otorgante) < 0)) {
            throw new \InvalidArgumentException('invalid length for $clave_anterior_otorgante when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['clave_anterior_otorgante'] = $clave_anterior_otorgante;
        return $this;
    }
    
    public function getNombreAnteriorOtorgante()
    {
        return $this->container['nombre_anterior_otorgante'];
    }
    
    public function setNombreAnteriorOtorgante($nombre_anterior_otorgante)
    {
        if (!is_null($nombre_anterior_otorgante) && (mb_strlen($nombre_anterior_otorgante) > 40)) {
            throw new \InvalidArgumentException('invalid length for $nombre_anterior_otorgante when calling Cuenta., must be smaller than or equal to 40.');
        }
        if (!is_null($nombre_anterior_otorgante) && (mb_strlen($nombre_anterior_otorgante) < 0)) {
            throw new \InvalidArgumentException('invalid length for $nombre_anterior_otorgante when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['nombre_anterior_otorgante'] = $nombre_anterior_otorgante;
        return $this;
    }
    
    public function getNumeroCuentaAnterior()
    {
        return $this->container['numero_cuenta_anterior'];
    }
    
    public function setNumeroCuentaAnterior($numero_cuenta_anterior)
    {
        if (!is_null($numero_cuenta_anterior) && (mb_strlen($numero_cuenta_anterior) > 25)) {
            throw new \InvalidArgumentException('invalid length for $numero_cuenta_anterior when calling Cuenta., must be smaller than or equal to 25.');
        }
        if (!is_null($numero_cuenta_anterior) && (mb_strlen($numero_cuenta_anterior) < 0)) {
            throw new \InvalidArgumentException('invalid length for $numero_cuenta_anterior when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['numero_cuenta_anterior'] = $numero_cuenta_anterior;
        return $this;
    }
    
    public function getFechaPrimerIncumplimiento()
    {
        return $this->container['fecha_primer_incumplimiento'];
    }
    
    public function setFechaPrimerIncumplimiento($fecha_primer_incumplimiento)
    {
        if (!is_null($fecha_primer_incumplimiento) && (mb_strlen($fecha_primer_incumplimiento) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_primer_incumplimiento when calling Cuenta., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_primer_incumplimiento) && (mb_strlen($fecha_primer_incumplimiento) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_primer_incumplimiento when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['fecha_primer_incumplimiento'] = $fecha_primer_incumplimiento;
        return $this;
    }
    
    public function getSaldoInsoluto()
    {
        return $this->container['saldo_insoluto'];
    }
    
    public function setSaldoInsoluto($saldo_insoluto)
    {
        if (!is_null($saldo_insoluto) && (mb_strlen($saldo_insoluto) > 10)) {
            throw new \InvalidArgumentException('invalid length for $saldo_insoluto when calling Cuenta., must be smaller than or equal to 10.');
        }
        if (!is_null($saldo_insoluto) && (mb_strlen($saldo_insoluto) < 0)) {
            throw new \InvalidArgumentException('invalid length for $saldo_insoluto when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['saldo_insoluto'] = $saldo_insoluto;
        return $this;
    }
    
    public function getMontoUltimoPago()
    {
        return $this->container['monto_ultimo_pago'];
    }
    
    public function setMontoUltimoPago($monto_ultimo_pago)
    {
        if (!is_null($monto_ultimo_pago) && (mb_strlen($monto_ultimo_pago) > 10)) {
            throw new \InvalidArgumentException('invalid length for $monto_ultimo_pago when calling Cuenta., must be smaller than or equal to 10.');
        }
        if (!is_null($monto_ultimo_pago) && (mb_strlen($monto_ultimo_pago) < 0)) {
            throw new \InvalidArgumentException('invalid length for $monto_ultimo_pago when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['monto_ultimo_pago'] = $monto_ultimo_pago;
        return $this;
    }
    
    public function getFechaIngresoCarteraVencida()
    {
        return $this->container['fecha_ingreso_cartera_vencida'];
    }
    
    public function setFechaIngresoCarteraVencida($fecha_ingreso_cartera_vencida)
    {
        if (!is_null($fecha_ingreso_cartera_vencida) && (mb_strlen($fecha_ingreso_cartera_vencida) > 8)) {
            throw new \InvalidArgumentException('invalid length for $fecha_ingreso_cartera_vencida when calling Cuenta., must be smaller than or equal to 8.');
        }
        if (!is_null($fecha_ingreso_cartera_vencida) && (mb_strlen($fecha_ingreso_cartera_vencida) < 0)) {
            throw new \InvalidArgumentException('invalid length for $fecha_ingreso_cartera_vencida when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['fecha_ingreso_cartera_vencida'] = $fecha_ingreso_cartera_vencida;
        return $this;
    }
    
    public function getMontoCorrespondienteIntereses()
    {
        return $this->container['monto_correspondiente_intereses'];
    }
    
    public function setMontoCorrespondienteIntereses($monto_correspondiente_intereses)
    {
        if (!is_null($monto_correspondiente_intereses) && (mb_strlen($monto_correspondiente_intereses) > 9)) {
            throw new \InvalidArgumentException('invalid length for $monto_correspondiente_intereses when calling Cuenta., must be smaller than or equal to 9.');
        }
        if (!is_null($monto_correspondiente_intereses) && (mb_strlen($monto_correspondiente_intereses) < 0)) {
            throw new \InvalidArgumentException('invalid length for $monto_correspondiente_intereses when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['monto_correspondiente_intereses'] = $monto_correspondiente_intereses;
        return $this;
    }
    
    public function getFormaPagoActualIntereses()
    {
        return $this->container['forma_pago_actual_intereses'];
    }
    
    public function setFormaPagoActualIntereses($forma_pago_actual_intereses)
    {
        if (!is_null($forma_pago_actual_intereses) && (mb_strlen($forma_pago_actual_intereses) > 2)) {
            throw new \InvalidArgumentException('invalid length for $forma_pago_actual_intereses when calling Cuenta., must be smaller than or equal to 2.');
        }
        if (!is_null($forma_pago_actual_intereses) && (mb_strlen($forma_pago_actual_intereses) < 0)) {
            throw new \InvalidArgumentException('invalid length for $forma_pago_actual_intereses when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['forma_pago_actual_intereses'] = $forma_pago_actual_intereses;
        return $this;
    }
    
    public function getDiasVencimiento()
    {
        return $this->container['dias_vencimiento'];
    }
    
    public function setDiasVencimiento($dias_vencimiento)
    {
        if (!is_null($dias_vencimiento) && (mb_strlen($dias_vencimiento) > 3)) {
            throw new \InvalidArgumentException('invalid length for $dias_vencimiento when calling Cuenta., must be smaller than or equal to 3.');
        }
        if (!is_null($dias_vencimiento) && (mb_strlen($dias_vencimiento) < 0)) {
            throw new \InvalidArgumentException('invalid length for $dias_vencimiento when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['dias_vencimiento'] = $dias_vencimiento;
        return $this;
    }
    
    public function getPlazoMeses()
    {
        return $this->container['plazo_meses'];
    }
    
    public function setPlazoMeses($plazo_meses)
    {
        if (!is_null($plazo_meses) && (mb_strlen($plazo_meses) > 6)) {
            throw new \InvalidArgumentException('invalid length for $plazo_meses when calling Cuenta., must be smaller than or equal to 6.');
        }
        if (!is_null($plazo_meses) && (mb_strlen($plazo_meses) < 0)) {
            throw new \InvalidArgumentException('invalid length for $plazo_meses when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['plazo_meses'] = $plazo_meses;
        return $this;
    }
    
    public function getMontoCreditoOriginacion()
    {
        return $this->container['monto_credito_originacion'];
    }
    
    public function setMontoCreditoOriginacion($monto_credito_originacion)
    {
        if (!is_null($monto_credito_originacion) && (mb_strlen($monto_credito_originacion) > 10)) {
            throw new \InvalidArgumentException('invalid length for $monto_credito_originacion when calling Cuenta., must be smaller than or equal to 10.');
        }
        if (!is_null($monto_credito_originacion) && (mb_strlen($monto_credito_originacion) < 0)) {
            throw new \InvalidArgumentException('invalid length for $monto_credito_originacion when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['monto_credito_originacion'] = $monto_credito_originacion;
        return $this;
    }
    
    public function getCorreoElectronicoConsumidor()
    {
        return $this->container['correo_electronico_consumidor'];
    }
    
    public function setCorreoElectronicoConsumidor($correo_electronico_consumidor)
    {
        if (!is_null($correo_electronico_consumidor) && (mb_strlen($correo_electronico_consumidor) > 40)) {
            throw new \InvalidArgumentException('invalid length for $correo_electronico_consumidor when calling Cuenta., must be smaller than or equal to 40.');
        }
        if (!is_null($correo_electronico_consumidor) && (mb_strlen($correo_electronico_consumidor) < 0)) {
            throw new \InvalidArgumentException('invalid length for $correo_electronico_consumidor when calling Cuenta., must be bigger than or equal to 0.');
        }
        $this->container['correo_electronico_consumidor'] = $correo_electronico_consumidor;
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
