<?php
session_start();

if (isset($_SESSION['usuario'])){
	$lista = unserialize($_SESSION['rutas']); 
	//var_dump($lista);

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
</head>
<body jscontroller="csphid" jsmodel="gmV9qc" jsaction="rcuQ6b:WYd;F9BhIf:uAM5ec;w047Tc:dj7Cne;">
	<div>
		<div class="M63kCb"></div>
		<div class="fktJzd AKpWA fOU46b" jsname="UzWXSb">
			<header id="atIdViewHeader">
				<div class="BbxBP" jscontroller="YVkQ9" jsaction="rcuQ6b:ywL4Jf;l7cyfd:ywL4Jf;jLKRTe:ywL4Jf; keydown:Hq2uPe;" data-top-navigation="false">
					<div class="VLoccc ELAV1d" jsname="rtFGi">
						<div class="Pvc6xe">
							<div jsname="I8J07e" class="TlfmSc">
								<a jsname="jIujaf" class="QTKDff">Cargi-Propen</a>
							</div>
							<div jsname="I8J07e" class="TlfmSc" align="rigth">
								<a href="logout.php" jsname="jIujaf" class="QTKDff">Cerrar	</a>
							</div>
						</div>
						<div jsname="mADGA" class="zDUgLc">
						</div>
					</div>
				</div>
				<script type="text/javascript">DOCS_timing['navv'] = new Date().getTime();</script>
			</header>
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
													<h1 id="h.p_RGmoNN5Bj8vJ" class="zfr3Q duRjpb" style="text-align: center;">Portal de Aplicaciones</h1>
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
				<section id="h.p_WFyOx_wsYVjA" class="yaqOZd" style="">
					<div class="yaqOZd IFuOkc"></div>
					<div class="mYVXT">
						<div class="LS81yb VICjCf">
							<div class="hJDwNd-AhqUyc-uQSCkd JNdkSc">
								<div class="oKdM2c" align="center">

<?php	
$i=0;
					foreach ($lista as $value) {
                                            if($i<=9){
                                            $i++;
                                            }else{
                                                $i=1;
                                            }
?>
									<div id="h.p_hRyepA-VGPCy" class="hJDwNd-AhqUyc-wNfPc pSzOP-AhqUyc-wNfPc jXK9ad D2fZ2">
										<div class="jXK9ad-SmKAyb jXK9ad-SmKAyb-c4YZDc">
											<div class="tyJCtd baZpAe">
												<div class="t3iYD">
													<a href="<?php echo $value['ruta']?>" target="_blank">
                                                                                                            <img src="imagenes/imagen<?php echo $i ?>.png" class="CENy8b"/>
                                                                           
													</a>
                                                                                                    <p class="p"><?php echo $value['menu']?></p>
												</div>
											</div>
										</div>
									</div>
<?php
                                        }
?>
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


													
						
<?php
}
else{
	header("Location: index.php");
	exit();
}
?>