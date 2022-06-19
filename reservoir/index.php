<?php
			require_once ($_SERVER['DOCUMENT_ROOT'] . "/reservoir/controllers/reservaController.php");			
			
			$reservaController = new ReservaController();
		
			$reservaController->crear();
			
	?>