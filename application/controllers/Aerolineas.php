<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aerolineas extends CI_Controller {
	//definiendo el constructor de la clase
	public function __construct(){
		parent:: __construct();
		$this->load->model('aerolinea'); //llamamos al modelo
	}

	public function index()
	{
		$data["listadoAerolineas"]= $this->aerolinea->obtenerTodosAerolinea(); // aerolinea es el nombre del modelo
		$this->load->view('header');
		$this->load->view('aerolineas/index',$data);
		$this->load->view('footer');
	}

	//para ingresar nuevo colegio
  public function nuevo(){
    $this->load->view('header');
		$this->load->view('aerolineas/nuevo');
		$this->load->view('footer');
  }
	// funcion para capturar los valores del formulario nuevo
	public function guardarAerolinea(){
		$datosNuevoAerolinea=array(
			"id_aer"=>$this->input->post('id_aer'),
			"nombre_aer"=>$this->input->post('nombre_aer'),
			"telefono_aer"=>$this->input->post('telefono_aer'),
      "correo_aer"=>$this->input->post('correo_aer'),
			"numavion_aer"=>$this->input->post('numavion_aer')

		);
		print_r($datosNuevoAerolinea);
		if ($this->aerolinea->insertar($datosNuevoAerolinea)) { //aerolinea es el nombre del modelo
			redirect('aerolineas/index');
		} else {
			echo "<h1>ERROR</h1>";
		}
}

// funcion para eliminar colegio
	public function borrar($id_aer){
		if ($this->colegio->eliminarPorId($id_aer)) {//colegio es el nombre del modelo
			echo "Eliminado exitosamente";
		} else {
			echo "ERROR AL ELIMINAR :(";
		}

	}

	//fuincion para renderizar el formulario de actualizacion
	public function actualizar($id){
		$data["aerolineaEditar"]=$this->aerolinea->obtenerPorId($id);
		$this->load->view('header');
		$this->load->view('aerolineas/actualizar',$data);// debemos poner $data para que nos muestre los datos en la vista
		$this->load->view('footer');

	}


	public function procesarActualizacion(){
		$datosAerolineaEditado=array(
      "id_aer"=>$this->input->post('id_aer'),
			"nombre_aer"=>$this->input->post('nombre_aer'),
			"telefono_aer"=>$this->input->post('telefono_aer'),
      "correo_aer"=>$this->input->post('correo_aer'),
			"numavion_aer"=>$this->input->post('numavion_aer')
		);
		$id=$this->input->post("id_aer");
		if ($this->aerolinea->actualizar($id,$datosAerolineaEditado)) {
			redirect('aerolineas/index');
		} else {
			echo "<h1>ERROR</h1>";
		}
}
} //cierre de la clase
