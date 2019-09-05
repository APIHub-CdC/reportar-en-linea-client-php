<?php
namespace APIHub\Client;

use \GuzzleHttp\Client;
use \GuzzleHttp\HandlerStack;

use \APIHub\Client\ApiException;
use \APIHub\Client\Interceptor\KeyHandler;
use \APIHub\Client\Interceptor\MiddlewareEvents;

class CargaDeCuentasDePersonasFsicasApiTest extends \PHPUnit_Framework_TestCase
{
    
    public function setUp()
    {
        $password = getenv('KEY_PASSWORD');
        $this->signer = new \APIHub\Client\Interceptor\KeyHandler(null, null, $password);
        $events = new \APIHub\Client\Interceptor\MiddlewareEvents($this->signer);
        $handler = \GuzzleHttp\HandlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));
        $handler->push($events->verify_signature_header('x-signature'));

        $client = new \GuzzleHttp\Client(['handler' => $handler]);
        $this->apiInstance = new \APIHub\Client\Api\CargaDeCuentasDePersonasFsicasApi($client);
    }
    
    public function testRegistrar()
    {
        $x_api_key = "your_api_key";
        $username = "your_username";
        $password = "your_password";

        $requestNombre = new \APIHub\Client\Model\Nombre();
        $requestNombre->setApellidoPaterno("PATERNO");
        $requestNombre->setApellidoMaterno("MATERNO");
        $requestNombre->setApellidoAdicional(null);
        $requestNombre->setNombres("NOMBRE");
        $requestNombre->setFechaNacimiento("YYYYMMDD");
        $requestNombre->setRfc("PAPN860627");
        $requestNombre->setCurp("PAPN860627MOCNSB02");
        $requestNombre->setNumeroSeguridadSocial(null);
        $requestNombre->setNacionalidad("MX");
        $requestNombre->setResidencia("1");
        $requestNombre->setNumeroLicenciaConducir(null);
        $requestNombre->setEstadoCivil("S");
        $requestNombre->setSexo("F");
        $requestNombre->setClaveElectorIfe(null);
        $requestNombre->setNumeroDependientes("0");
        $requestNombre->setFechaDefuncion("YYYYMMDD");
        $requestNombre->setTipoPersona("PF");
        $requestNombre->setIndicadorDefuncion("1");

        $requestDomicilio = new \APIHub\Client\Model\Domicilio();
        $requestDomicilio->setDireccion("CONOCIDA S/N");
        $requestDomicilio->setColoniaPoblacion("CONOCIDA");
        $requestDomicilio->setDelegacionMunicipio("MUNICIPIO");
        $requestDomicilio->setCiudad("CIUDAD");
        $requestDomicilio->setEstado("MEX");
        $requestDomicilio->setEstadoExtranjero(null);
        $requestDomicilio->setCp("55010");
        $requestDomicilio->setFechaResidencia("YYYYMMDD");
        $requestDomicilio->setNumeroCelular(null);
        $requestDomicilio->setNumeroTelefono(null);
        $requestDomicilio->setExtension(null);
        $requestDomicilio->setFax(null);
        $requestDomicilio->setTipoDomicilio("C");
        $requestDomicilio->setTipoAsentamiento("2");
        $requestDomicilio->setOrigenDomicilio("2");

        $requestEmpleo = new \APIHub\Client\Model\Empleo();
        $requestEmpleo->setNombreEmpresa("VTA DE PRODUCTOS");
        $requestEmpleo->setDireccion("CONOCIDA S/N");
        $requestEmpleo->setColoniaPoblacion("CONOCIDA");
        $requestEmpleo->setDelegacionMunicipio("MUNICIPIO");
        $requestEmpleo->setCiudad("CIUDAD");
        $requestEmpleo->setEstado("MX");
        $requestEmpleo->setCp("55010");
        $requestEmpleo->setNumeroTelefono(null);
        $requestEmpleo->setExtension(null);
        $requestEmpleo->setFax(null);
        $requestEmpleo->setPuesto(null);
        $requestEmpleo->setFechaContratacion("YYYYMMDD");
        $requestEmpleo->setClaveMoneda("MX");
        $requestEmpleo->setSalarioMensual("5600");
        $requestEmpleo->setFechaUltimoDiaEmpleo("YYYYMMDD");
        $requestEmpleo->setFechaVerificacionEmpleo("YYYYMMDD");
        $requestEmpleo->setOrigenRazonSocialDomicilio("2");

        $requestCuenta = new \APIHub\Client\Model\Cuenta();
        $requestCuenta->setClaveActualOtorgante("0000080008");
        $requestCuenta->setNombreOtorgante("OTORGANTE");
        $requestCuenta->setCuentaActual("TCDC000001");
        $requestCuenta->setTipoResponsabilidad("O");
        $requestCuenta->setTipoCuenta("F");
        $requestCuenta->setTipoContrato("BC");
        $requestCuenta->setClaveUnidadMonetaria("MX");
        $requestCuenta->setValorActivoValuacion(null);
        $requestCuenta->setNumeroPagos("17");
        $requestCuenta->setFrecuenciaPagos("S");
        $requestCuenta->setMontoPagar("0");
        $requestCuenta->setFechaAperturaCuenta("YYYYMMDD");
        $requestCuenta->setFechaUltimoPago("YYYYMMDD");
        $requestCuenta->setFechaUltimaCompra("YYYYMMDD");
        $requestCuenta->setFechaCierreCuenta("YYYYMMDD");
        $requestCuenta->setFechaCorte("YYYYMMDD");
        $requestCuenta->setGarantia(null);
        $requestCuenta->setCreditoMaximo("10000");
        $requestCuenta->setSaldoActual("0");
        $requestCuenta->setLimiteCredito("0");
        $requestCuenta->setSaldoVencido("0");
        $requestCuenta->setNumeroPagosVencidos("2");
        $requestCuenta->setPagoActual(" V");
        $requestCuenta->setHistoricoPagos(null);
        $requestCuenta->setClavePrevencion("1");
        $requestCuenta->setTotalPagosreportados("0");
        $requestCuenta->setClaveAnteriorOtorgante(null);
        $requestCuenta->setNombreAnteriorOtorgante(null);
        $requestCuenta->setNumeroCuentaAnterior(null);
        $requestCuenta->setFechaPrimerIncumplimiento("YYYYMMDD");
        $requestCuenta->setSaldoInsoluto(null);
        $requestCuenta->setMontoUltimoPago(null);
        $requestCuenta->setFechaIngresoCarteraVencida("YYYYMMDD");
        $requestCuenta->setMontoCorrespondienteIntereses("2");
        $requestCuenta->setFormaPagoActualIntereses("2");
        $requestCuenta->setDiasVencimiento("3");
        $requestCuenta->setPlazoMeses(null);
        $requestCuenta->setMontoCreditoOriginacion(null);
        $requestCuenta->setCorreoElectronicoConsumidor(null);

        $requestPersona = new \APIHub\Client\Model\Persona();
        $requestPersona->setNombre($requestNombre);
        $requestPersona->setDomicilio($requestDomicilio);
        $requestPersona->setEmpleo($requestEmpleo);
        $requestPersona->setCuenta($requestCuenta);

        $requestEncabezado = new \APIHub\Client\Model\Encabezado();
        $requestEncabezado->setNombreOtorgante("OTORGANTE");
        $requestEncabezado->setClaveOtorgante("100000");

        $request = new \APIHub\Client\Model\CargasPFRegistrarRequest();
        $request->setEncabezado($requestEncabezado);
        $request->setPersona($requestPersona);
        try {
            $result = $this->apiInstance->registrar($x_api_key, $username, $password, $request);
            print_r($result);
        } catch (Exception $e) {
            echo 'Exception when calling CargaDeCuentasDePersonasFsicasApi->registrar: ', $e->getMessage(), PHP_EOL;
        }
    }
}
