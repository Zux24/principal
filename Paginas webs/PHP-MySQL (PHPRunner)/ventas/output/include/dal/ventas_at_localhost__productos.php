<?php
$dalTableproductos = array();
$dalTableproductos["id_producto"] = array("type"=>3,"varname"=>"id_producto", "name" => "id_producto");
$dalTableproductos["Nombre"] = array("type"=>200,"varname"=>"Nombre", "name" => "Nombre");
$dalTableproductos["Precios"] = array("type"=>3,"varname"=>"Precios", "name" => "Precios");
$dalTableproductos["Caracteristicas"] = array("type"=>201,"varname"=>"Caracteristicas", "name" => "Caracteristicas");
	$dalTableproductos["id_producto"]["key"]=true;

$dal_info["ventas_at_localhost__productos"] = &$dalTableproductos;
?>