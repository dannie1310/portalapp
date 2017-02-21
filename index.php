<?php
session_start();
if (isset($_SESSION['usuario'])){
	header('Location: welcome.php');
}
else{
?>


<!DOCTYPE html>
<html lang="es" itemscope itemtype="http://schema.org/WebPage">
<head>
	<script type="text/javascript">var DOCS_timing={}; DOCS_timing['sl']=new Date().getTime();</script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="icon" href="//ssl.gstatic.com/atari/images/favicon_2.ico" />
	<meta name="robots" content="noindex" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Cargi-Propen" />
	<meta itemprop="url" property="og:url" content="https://sites.google.com/grupohi.mx/cgpp" />
	<meta itemprop="image" property="og:image" content="https://www.gstatic.com/images/branding/product/1x/atari_512dp.png" />
	<link href="//fonts.googleapis.com/css?family=Quicksand%3A300%2C400%2C700%7CSource%20Sans%20Pro%3A400%2C400italic%2C600%2C700%2C700italic" rel="stylesheet" type="text/css" />
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700|Source+Code+Pro:400,700" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://www.gstatic.com/_/atari/_/ss/k=atari.vw.-1jqldvjwgh9sp.L.I11.O/d=1/rs=AGEqA5no3dWadVxUmql5EV1CFJXcYR2vOg" />
	<title itemprop="name">Cargi-Propen</title>
	<link href="style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript">document.createElement('content');(function(){}).call(this);</script>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body jscontroller="csphid" jsmodel="gmV9qc" jsaction="rcuQ6b:WYd;F9BhIf:uAM5ec;w047Tc:dj7Cne;">
	<div>
		<div class="M63kCb"></div>
		<div class="fktJzd AKpWA fOU46b" jsname="UzWXSb">

			<div role="main" class="UtePc RCETm yMcSQd Ly6Unf" jscontroller="oVfKv" jsaction="Jddzq: Ffcznf;">
				<section id="h.p_Ky5K5OEij8ux" class="yaqOZd LB7kq cJgDec nyKByd O13XJf" style="">
					<div class="Nu95r">
						<div class="yaqOZd IFuOkc" style="background-size: cover; background-position: center center; background-image: url('imagenes/imagen.jpg');" jsname="LQX2Vd">
						</div>
					</div>
					<div class="mYVXT">
						<div class="LS81yb VICjCf">
							<div class="hJDwNd-AhqUyc-uQSCkd JNdkSc">
								<div class="oKdM2c">
									<div class="hJDwNd-AhqUyc-ibL1re jXK9ad D2fZ2 L6cTce-purZT L6cTce-pSzOP">
										<div class="jXK9ad-SmKAyb jXK9ad-SmKAyb-c4YZDc">
											<div class="tyJCtd baZpAe"></div>
										</div>
									</div>
									<div id="h.p_CI-ca8kmj8u5" class="hJDwNd-AhqUyc-OiUrBf jXK9ad D2fZ2 GNzUNc">
										<div class="jXK9ad-SmKAyb jXK9ad-SmKAyb-c4YZDc">		
												<div class="tyJCtd mGzaTb baZpAe lkHyyc">
													<div id="resultado"></div>
													<form method="POST" action="return false" onsubmit="return false" align="center">
														<h3 id="h.p_RGmoNN5Bj8vJ" class="zfr3Q duRjpb" style="text-align: center;">Inicio de Sesi&oacute;n</h3>
														<br><span  class="zfr3Q QTKDff">Usuario:</span><br><input type="text" name="user" id="user" placeholder="Usuario">
														<br><span  class="zfr3Q QTKDff">Clave:</span><br><input type="password" name="pass" id="pass" placeholder="*********">
														<br><button id="Validar">Entrar</button>
													</form>
												</div>
										</div>
									</div>
									<div class="hJDwNd-AhqUyc-ibL1re jXK9ad D2fZ2 L6cTce-purZT L6cTce-pSzOP">
										<div class="jXK9ad-SmKAyb jXK9ad-SmKAyb-c4YZDc">
											<div class="tyJCtd baZpAe"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

			</div>
		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	$('#Validar').on('click',function(){
		user=$('#user').val();
		pass=$('#pass').val();
		$.ajax({
			url: 'validar.php',
			type: 'POST',
			data: 'user=' + user + '&pass=' + pass,
			success: function(resp){
				$('#resultado').html(resp);
			}
		});
	});

</script>

<?php
}
?>
