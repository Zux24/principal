<?php
$dalTableusuarios = array();
$dalTableusuarios["usuario"] = array("type"=>200,"varname"=>"usuario", "name" => "usuario");
$dalTableusuarios["password"] = array("type"=>200,"varname"=>"password", "name" => "password");
$dalTableusuarios["tipo"] = array("type"=>129,"varname"=>"tipo", "name" => "tipo");
	$dalTableusuarios["usuario"]["key"]=true;

$dal_info["ventas_at_localhost__usuarios"] = &$dalTableusuarios;
?>