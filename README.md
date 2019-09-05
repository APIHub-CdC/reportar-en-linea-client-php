# califica-reportarenlinea-client-php

Carga de cuentas de personas físicas.

## Requisitos

PHP 7.1 ó superior

### Dependencias adicionales
- Se debe contar con las siguientes dependencias de PHP:
    - ext-curl
    - ext-mbstring
- En caso de no ser así, para linux use los siguientes comandos

```sh
#ejemplo con php en versión 7.3 para otra versión colocar php{version}-curl
apt-get install php7.3-curl
apt-get install php7.3-mbstring
```
- Composer [vea como instalar][1]

## Instalación

Ejecutar: `composer install`

## Guía de inicio

### Paso 1. Generar llave y certificado

- Se tiene que tener un contenedor en formato PKCS12.
- En caso de no contar con uno, ejecutar las instrucciones contenidas en **lib/Interceptor/key_pair_gen.sh** ó con los siguientes comandos.
- **opcional**: Para cifrar el contenedor, colocar una contraseña en una variable de ambiente.
```sh
export KEY_PASSWORD=your_password
```
- Definir los nombres de archivos y alias.
```sh
export PRIVATE_KEY_FILE=pri_key.pem
export CERTIFICATE_FILE=certificate.pem
export SUBJECT=/C=MX/ST=MX/L=MX/O=CDC/CN=CDC
export PKCS12_FILE=keypair.p12
export ALIAS=circulo_de_credito
```
- Generar llave y certificado.
```sh
#Genera la llave privada.
openssl ecparam -name secp384r1 -genkey -out ${PRIVATE_KEY_FILE}

#Genera el certificado público.
openssl req -new -x509 -days 365 \
    -key ${PRIVATE_KEY_FILE} \
    -out ${CERTIFICATE_FILE} \
    -subj "${SUBJECT}"
```
- Generar contenedor en formato PKCS12.
```sh
# Genera el archivo pkcs12 a partir de la llave privada y el certificado.
# Deberá empaquetar la llave privada y el certificado.
openssl pkcs12 -name ${ALIAS} \
    -export -out ${PKCS12_FILE} \
    -inkey ${PRIVATE_KEY_FILE} \
    -in ${CERTIFICATE_FILE} -password pass:${KEY_PASSWORD}
```

### Paso 2. Carga del certificado dentro del portal de desarrolladores
 1. Iniciar sesión.
 2. Dar clic en la sección "**Mis aplicaciones**".
 3. Seleccionar la aplicación.
 4. Ir a la pestaña de "**Certificados para @tuApp**".
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/applications.png">
    </p>
 5. Al abrirse la ventana emergente, seleccionar el certificado previamente creado y dar clic en el botón "**Cargar**":
    <p align="center">
      <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/upload_cert.png" width="268">
    </p>

### Paso 3. Descarga del certificado de Círculo de Crédito dentro del portal de desarrolladores
 1. Iniciar sesión.
 2. Dar clic en la sección "**Mis aplicaciones**".
 3. Seleccionar la aplicación.
 4. Ir a la pestaña de "**Certificados para @tuApp**".
    <p align="center">
        <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/applications.png">
    </p>
 5. Al abrirse la ventana emergente, dar clic al botón "**Descargar**":
    <p align="center">
        <img src="https://github.com/APIHub-CdC/imagenes-cdc/blob/master/download_cert.png" width="268">
    </p>

 > Es importante que este contenedor sea almacenado en la siguiente ruta:
 > **/path/to/repository/lib/Interceptor/keypair.p12**
 >
 > Así mismo el certificado proporcionado por círculo de crédito en la siguiente ruta:
 > **/path/to/repository/lib/Interceptor/cdc_cert.pem**

- En caso de que no se almacene así, se debe especificar la ruta donde se encuentra el contenedor y el certificado. Ver el siguiente ejemplo:

```php
/**
* Esto es parte del setUp() de las pruebas unitarias.
*/
$password = getenv('KEY_PASSWORD');
$this->signer = new \APIHub\Client\Interceptor\KeyHandler(
    "/example/route/keypair.p12",
    "/example/route/cdc_cert.pem",
    $password
);
```
 > **NOTA:** Sólamente en caso de que el contenedor haya cifrado, se debe colocar la contraseña en una variable de ambiente e indicar el nombre de la misma, como se ve en la imagen anterior.

### Paso 4. Modificar URL

 Modificar la URL de la petición en ***lib/Configuration.php*** en la línea 19, como se muestra en el siguiente fragmento de código:

 ```php
 protected $host = 'the_url';
 ```

### Paso 5. Capturar los datos de la petición

Es importante contar con el setUp() que se encargará de firmar y verificar la petición.

```php
<?php
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
```
```php

<?php
/**
* Este es el método que se será ejecutado en la prueba ubicado en path/to/repository/test/Api/CargaDeCuentasDePersonasFsicasApiTest.php 

*/
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
?>
```
## Pruebas unitarias

Para ejecutar las pruebas unitarias:

```sh
./vendor/bin/phpunit
```

[1]: https://getcomposer.org/doc/00-intro.md#installation-linux-unix-macos
