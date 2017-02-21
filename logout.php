<?php
	session_start();
	session_destroy();
	echo 'Ha terminado la sessión';
?>
<script>location.href= 'index.php'</script>