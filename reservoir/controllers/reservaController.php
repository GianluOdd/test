<?php
		
		require_once ($_SERVER['DOCUMENT_ROOT'] . "/reservoir/models/reserva.php");
		
		class ReservaController
		{
			public $reserva;	
			public function __construct()
			{
				$this->reserva = new Reserva();
			}
			
			public function crear($rut=null, $nombre=null)
			{
			
				if($_SERVER['REQUEST_METHOD'] == 'GET')
				{
					include "views/sections/cabecera.php";
					include "views/frm_reserva.php";
					include "views/sections/pie.php";
				}
				
				if($_SERVER['REQUEST_METHOD'] == 'POST')
				{
					$this->reserva->setRut($_POST['txtRut']);
					$this->reserva->setNombre($_POST['txtNombre']);
					
					if($this->reserva->crear())
					{
						echo "Reserva ingresada correctamente <br/>";
						echo "<a href='index.php'>Volver</a>";
					}
					else
					{
						echo "No se pudo realizar la reserva <br/>";
						echo "<a href='index.php'>Volver</a>";
					}					
				}
			}
		}
?>