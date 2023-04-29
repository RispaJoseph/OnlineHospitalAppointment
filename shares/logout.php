<?php
	session_start();
	session_destroy();
	echo "<script> parent.location.href='../common'; </script>";
?>