<?php
session_start();
$con = mysql_connect('localhost', 'sca', 'w6FCR56sLT')  or die('No se pudo conectar: ' . mysql_error());
mysql_select_db('igh',$con) or die('No se pudo seleccionar la base de datos');
$user = $_POST['user'];
$pass = md5($_POST['pass']);
if($user == null || $pass ==  null){

 echo "<script>alert('Completar todos los campos.')</script>";
}
else{
	 $SQL="SELECT idusuario, nombre, apaterno, amaterno FROM usuario where Usuario='".$user."' and Clave='".$pass."' ;";
	 $query =mysql_query($SQL,$con);
	if(mysql_num_rows($query)> 0){
		while($rows = mysql_fetch_array($query)){
			$_SESSION['nombre'] = $rows['nombre']; 
			$_SESSION['apaterno'] = $rows['apaterno'];
			$_SESSION['amaterno'] = $rows['amaterno'];
			$idusuario = $rows['idusuario'];
		}
		$_SESSION['usuario'] = $user;

		$SQL = "
					SELECT menu.idmenu as idmenu,menu, ruta, menu_ext.imagen
					from menu_usuario 
					inner join menu on menu_usuario.idmenu = menu.idmenu
					inner join menu_ext on menu_usuario.idmenu = menu_ext.idmenu
					where idusuario = ".$idusuario."
					and  estatus=1";
		$query2 =mysql_query($SQL,$con);

		$arr = array();
		
		while($r = mysql_fetch_array($query2)){
			$arr[] = $r;
		}
		//print_r($arr);

		

		 $_SESSION['rutas'] = serialize($arr);

		
		echo '<script>location.href="welcome.php";</script>';
	}
	else{
		echo "<script>alert('Usuario y/o contraseña inválidos, intente otra vez.')</script>";
	}
}

?>