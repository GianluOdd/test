<?php
		
		class Conexion
		{
			private $conexion;
			function __construct()
			{
				try
				{
					$this->conexion = new PDO('mysql:host=localhost;dbname=dbreservoir', 'root', '');
				}
				catch(PDOException $e)
				{
					$this->conexion = null;
				}
			}
			function getConexion()
			{
				return $this->conexion;
			}
		}
?>