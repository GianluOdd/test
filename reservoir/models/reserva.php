<?php
			require_once ($_SERVER['DOCUMENT_ROOT'] . "/reservoir/models/conexion.php");		
			
			class Reserva
			{
				private $id, $rut, $nombre, $fecha_hora;
				
				public function __construct($id=null,$rut=null,$nombre=null, $fecha_hora=null)
				{
					$this->id = $id;
					$this->rut = $rut;
					$this->nombre = $nombre;
					$this->fecha_hora= $fecha_hora;
				}				
				public function getId() { return $this->id; }
				public function getRut() { return $this->rut; }
				public function getNombre() { return $this->nombre; }
				public function getFechaHora() { return $this->fecha_hora; }
				
				public function setId($id) { $this->id = $id; }
				public function setRut($rut) { $this->rut = $rut; }
				public function setNombre($nombre) { $this->nombre = $nombre; }
				public function setFechaHora($fecha_hora) { $this->fecha_hora = $fecha_hora; }
								
				public function crear()
				{					
					 $cnx = new Conexion();
					 $query = "INSERT INTO reservas (rut,nombre, fecha_hora) VALUES (?,?,NOW())";
					 $stmt = $cnx->getConexion()->prepare($query);
					 $stmt->bindParam(1, $this->getRut());
					 $stmt->bindParam(2, $this->getNombre());
					 return $stmt->execute();
				}
			}
?>