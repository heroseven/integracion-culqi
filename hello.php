<?php
require 'vendor/autoload.php';
require 'culqi.php';

Culqi::$codigoComercio = "5foGNkdG04MR";
Culqi::$llaveSecreta = "amQAHPGYKrDiv0YCT5U9Si3rGr/XQ/hby2GYy3vEbJI=";
Culqi::$servidorBase = 'https://integ-pago.culqi.com';

try {

$data = Pago::crearDatospago(array(

//Numero de pedido de la venta, y debe ser único (de no ser así, recibirá como respuesta un error)
Pago::PARAM_NUM_PEDIDO => "tlvh201507299-2",

//Moneda de la venta ("PEN" O "USD")
Pago::PARAM_MONEDA => "PEN",

//Monto de la venta (ejem: 10.25, no se incluye el punto decimal)
Pago::PARAM_MONTO => "1025",

//Descripción de la venta
Pago::PARAM_DESCRIPCION => "Un protector de smartphone y una memoria microSD de 32 GB.",

//Código del país del cliente Ej. PE, US
Pago::PARAM_COD_PAIS => "PE",

//Ciudad del cliente
Pago::PARAM_CIUDAD => "Lima",

//Dirección del cliente
Pago::PARAM_DIRECCION => "Avenida Javier Prado 2132, San Isidro",

//Número de teléfono del cliente
Pago::PARAM_NUM_TEL => "992765900",

//Correo electrónico del cliente
"correo_electronico" => "wmuro@me.com",

//Identificador de usuario del cliente
"id_usuario_comercio" => "ID002",

//Nombres
"nombres" => "William",

//Apellidos
"apellidos" => "Muro",


));

//Respuesta de la creación de la venta. Cadena cifrada.
$informacionVenta = $data[Pago::PARAM_INFO_VENTA];
echo "Información de la venta: $informacionVenta";
echo "<br>";

echo "Codigo de Comercio: " . $data["codigo_comercio"];
echo "<br>";
echo "Número de pedido: " . $data["numero_pedido"];
echo "<br>";
echo "Código de respuesta: " . $data["codigo_respuesta"];
echo "<br>";
echo "Mensaje de respuesta: " . $data["mensaje_respuesta"];
echo "<br>";
echo "Ticket de la venta: " . $data["ticket"];

} catch (InvalidParamsException $e) {

echo $e->getMessage()."\n";

}
?>