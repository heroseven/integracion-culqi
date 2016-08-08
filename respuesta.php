<?php

Culqi::$codigoComercio = "5foGNkdG04MR";
Culqi::$llaveSecreta = "amQAHPGYKrDiv0YCT5U9Si3rGr/XQ/hby2GYy3vEbJI=";

//Retorna el JSON Descifrado
$llaveCifrada = $_POST['respuesta'];
$respuesta = json_decode(Culqi::decifrar($llaveCifrada));

//Codigo del comercio
echo "Código Comercio" . $respuesta["codigo_comercio"];

//Número de pedido
echo "Número de pedido" . $respuesta["numero_pedido"];

//Código de respuesta
echo "Ticket" . $respuesta["codigo_respuesta"];

//Mensaje de respuesta
echo "Mensaje Respuesta" . $respuesta["mensaje_respuesta"];

//Mensaje de respuesta al usuario
echo "Mensaje Respuesta Usuario" . $respuesta["mensaje_respuesta_usuario"];

//ID de la Transacción
echo "ID Transacción" . $respuesta["id_transaccion"];

//Ticket de la venta
echo "Código Referencia" . $respuesta["ticket"];

//Código de referencia
echo "Código Referencia" . $respuesta["referencia_transaccion"];

//Código de autorización
echo "Código Autorización" . $respuesta["codigo_autorizacion"];

//Marca de la tarjeta
echo "Marca" . $respuesta["marca"];

//Emisor de la tarjeta (dato referencial)
echo "Emisor" . $respuesta["nombre_emisor"];

//País de la tarjeta (dato referencial)
echo "País Tarjeta" . $respuesta["pais_emisor"];

//Número de la tarjeta enmascarado
echo "Número Tarjeta" . $respuesta["numero_tarjeta"];

//Nombres del tarjetahabiente
echo "Apellido del Tarjetahabiente" . $respuesta["apellido_tarjeta_habiente"];

//Apellidos del tarjetahabiente
echo "Nombre del Tarjetahabiente" . $respuesta["nombre_tarjeta_habiente"];


?>