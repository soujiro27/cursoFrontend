<?php

class MySQL{  
private $conexion;  
private $total_consultas;  
public function open(){  
if(!isset($this->conexion)){  
	$this->conexion = (mysql_connect('localhost','root','270183jc')) or die(mysql_error());  
	mysql_select_db('curso',$this->conexion) or die(mysql_error());  
}  
}  

public function consulta($consulta){  
	$this->total_consultas++;
	mysql_query("SET NAMES 'utf8'");
	$resultado = mysql_query($consulta,$this->conexion);  
	if(!$resultado){  
		echo 'MySQL Error: ' . mysql_error().'<br>'.$consulta;  
		exit;  
	}  
	return $resultado;   
}  

public function fetch_array($consulta){   
	return mysql_fetch_array($consulta);  
}  
public function num_rows($consulta){   
	return mysql_num_rows($consulta);  
}  
public function getTotalConsultas(){  
	return $this->total_consultas;  
}
public function close(){ 
	if ($this->conexion){ 
		return mysql_close($this->conexion); 
	} 
}  
}?>  