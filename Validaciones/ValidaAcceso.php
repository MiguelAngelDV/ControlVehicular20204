<?php

	$FUserName = $_POST['userName'];
	$FPassword = $_POST['password'];

	include("./php/Conexion.php");
	$Con=Conectar();
	$SQL="SELECT * FROM cuentas WHERE nombreUsuario='$FUserName'";
	$Resultado=Consultar($Con,$SQL);

	// Array
	// 0 - Nombre de usuario
	// 1 - Password
	// 2 - Tipo de Cuenta
	// 3 - Intentos
	// 4 - Bloqueado
	// 5 - Status

	$n=mysqli_num_rows($Resultado);
	if($n==1){
		$Fila=mysqli_fetch_row($Resultado);
		if($FPassword==$Fila[1]){
			if($Fila[4]==1){
				if($Fila[5] == 0){
					print("Acceso correcto");
					if($Fila[2]==1){
						//Administrador
						header('Location: MenuAdministrador.html');
					}else{
						//Usuario
						header('Location: MenuUsuario.html');
					}
				}else{
					print("Cuenta Bloqueada");
				}
			}else{
				print("LA CUENTA NO ESTA ACTIVA");
			}
		}else{
			print("EL PASSWORD ES INCORRECTO");
			$SQL="UPDATE cuentas SET intentos=intentos+1 WHERE nombreUsuario='$FUserName'";
			Consultar($Con,$SQL);
			if($Fila[3] > 2){
				$SQL="UPDATE cuentas SET bloqueado=1 WHERE nombreUsuario='$FUserName'";
				Consultar($Con,$SQL);
			}
		}
	}else{
		print("EL USUARIO NO EXISTE");
	}
	Cerrar($Con);
?>
