<?php
	
	class conexion 
	{
		public static function conectar()
		{
			$conexion =mysql_connect("localhost","root","");
			mysql_query("SET NAMES 'utf8'");
			mysql_select_db("redvpn");
			return $conexion;
		}		
	}
/*prueba de conexion
	$cnn= new conexion ();
	if($cnn->conectar())
	{
		echo "conectado";
	}
	else
	{
		echo "desconectado";
	}
*/

?>