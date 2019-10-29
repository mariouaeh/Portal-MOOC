<?php

	$estado = false;
	if (isset($_SESSION['cuenta'])) {
		$user = $_SESSION['cuenta'];
		$estado = true;
	}
?>