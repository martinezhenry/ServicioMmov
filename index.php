<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//consultar usuaruios
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://sysethical.com/easyftp/usuario/getUser");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//$data = json_decode(curl_exec($ch),true);  
$data = curl_exec($ch);
print_r($data);
curl_close($ch);

/*
//crear usuario
$postData = array(
    'nombre' => 'prueba11',
    'email' => 'prueba11@ejemplo.com',
    'pwd' => '1234'
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/restful/crearUsuario");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
//http_build_query => Generar una cadena de consulta codificada estilo URL a partir de array  
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
print_r($data);
curl_close($ch);


//login

$postData = array(
    'email' => 'prueba11@ejemplo.com',
    'pwd' => '1234'
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/restful/login");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_POST, true);
//http_build_query => Generar una cadena de consulta codificada estilo URL a partir de array  
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
print_r($data);
curl_close($ch);


// modificar usuario

$data = array("nombre" => 'usuario');
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/restful/actualizarNombre/3");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
$data = curl_exec($ch);
print_r($data);
curl_close($ch);
    

// borrar usuario

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://localhost/restful/borrarUsuario/1");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'DELETE');
$data = curl_exec($ch);
print_r($data);
curl_close($ch);
*/
?>