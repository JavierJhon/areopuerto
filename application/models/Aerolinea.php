<?php
  /**
   *
   */
  class Aerolinea extends CI_Model
  {

    function __construct()
    {
      parent:: __construct();
    }
    public function insertar($datos){
      return $this->db->insert("aerolinea",$datos);//insertar en la tabla aerolinea
    }
    //funcionar que consulta todos los colegios de la ddbb
    public function obtenerTodosAerolinea(){
      $aero=$this->db->get('aerolinea'); //aerolinea es le nombre de a tabla en la ddbb// areo es variable
      if ($aero ->num_rows()>0) {
        return $aero;
      } else {
        return false; //cuando no haya datos de areolineas
      }
    }

    //consultando la aerolinea por su id
    public function obtenerPorId($id){
      $this->db->where("id_aer",$id);
      $aero=$this->db->get("aerolinea");
      if ($aero->num_rows()>0) {
        return $aero->row(); //el id es unico, solo hay unico, // row indica que solo va a retornar uno
      } else {
        return false;
      }
    }


    //funcion para eliminar aerolinea
    public function eliminarPorId($id){
      $this->db->where("id_aer",$id); // es el nombre del campo en la tabla aerolinea
      return $this->db->delete("aerolinea"); // aerolinea el nombre de la tabla en la base de datos
    }
    public function actualizar($id, $datos){
      $this->db->where("id_aer", $id);
      return $this->db->update("aerolinea",$datos); //aerolinea es nombre de la tabla, $datos es los datos que voy a actualizar
    }
  }
