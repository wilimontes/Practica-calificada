<?php
require_once('basedatos.php');

if($_SERVER['REQUEST_METHOD'] === 'POST'){

} else{
    $accion = $_GET['accion'];
    if($accion === 'listar'){
        $sql = $sql = "SELECT A.id, razon_social, B.nombre AS tipo_cliente, 
        C.nombre AS tipo_documento, A.numero_documento, direccion
    FROM cliente A INNER JOIN tipo_cliente B
    ON A.id_tipo_cliente = B.id INNER JOIN tipo_documento C
    ON A.id_tipo_documento = C.id;";;
        $clientes = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
        if(count($clientes) > 0){
            $respuesta = [
                "codigo" => 200,
                "data" => $clientes
            ];
        } else {
            $respuesta = [
                "codigo" => 404,
                "mensaje" => "No hay data disponible"
            ];
        }
        echo json_encode($respuesta);
    }
}