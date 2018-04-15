<?php
defined('BASEPATH') OR exit('No direct
	script access allowed');

require_once( APPPATH.'/libraries/
	REST_Controller.php');
use Restserver\libraries\REST_Controller;


class Infante extends REST_Controller
{

	function __construct(){
		header("Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS");
		header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding");
		header("Access-Control-Allow-Origin: *");

		parent::__construct();
		$this->load->database();
	}

	public function get_NombreInfante( $pagina = 0 ){
		$pagina = $pagina * 10:

		$query = $this->db->query('SELECT `Nombre` FROM `infante`');

		$respuesta = array(
			'error' => FALSE,
			'infante' => $query->result_array()
		);

		$this->response( $respuesta );
	}

	public function get_Consejo() {
		$arrayData = array(
			"Como estas?",
			"Si te sientes estresado, toma un descanso de 5 minutos",
			"Asegurese de cepillarte los dientes por lo menos 2 veces al dia",
			"Toma una caminata de 30 minutos todos los dias"
		);
		$randTip = array_rand($arrayData, 1);
		echo $arrayData[$randTip[0]] . "\n";
	}

	public function get_Data() {
		$arrayData = [];
		array_push($arrayData, "Hola Juan");
		array_push("Dejeme obtener su historial");
		$collection = "SELECT * FROM infante";
		$collection.
	}

	public function get_DetallePaciente() {
		$query = $this->db->query('SELECT * FROM `infante` WHERE `Nombre`= ' );
	}

	

}
