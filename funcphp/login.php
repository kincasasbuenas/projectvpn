<?php
	session_start();
	require_once("conexion.php");
	class vpn
	{
		public function inicia_sesion()
		{
			$user=$_POST['user'];
			$pass=$_POST['pass'];

			$query = "select * from usuarios WHERE user='".$user."' and password='".$pass."';";
			$resultado=mysql_query($query,conexion::conectar());

			if($reg=mysql_fetch_array($resultado))
			{
				
				$_SESSION['user']=$reg['nombre1']." ".$reg['apellido1'];
				return 1;
			}
			else
			{
				$error='Usuario y/o contraseña incorrecta, vuelve a intentarlo';
				$_SESSION['error']=$error;
				return 0;
			}
			mysql_close(conexion::conectar());
		}
	}

	$xx=new vpn();
	$xx->inicia_sesion();
?>