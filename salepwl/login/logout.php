<?php 
	session_start();
	session_destroy();
	echo "<script>alert('Berhasil Logout!')</script>";
	echo "<script>document.location = '../login/index.php'</script>";
 ?>