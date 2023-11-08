<?php
require_once 'Model/rentalibros.php';

class rentalibrosController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new rentalibros();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/rentalibros.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new rentalibros();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->getting($_REQUEST['id']);
        }
        
        require_once 'View/header.php';
        require_once 'View/rentalibros-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new rentalibros();
        
        $alm->id = $_REQUEST['id'];
        $alm->id_libro = $_REQUEST['id_libro'];
        $alm->nombre_libro = $_REQUEST['nombre_libro'];
        $alm->genero = $_REQUEST['genero'];
        $alm->autor_libro = $_REQUEST['autor_libro'];
        $alm->codigo_fabrica = $_REQUEST['codigo_fabrica'];
        $alm->editorial = $_REQUEST['editorial'];
        $alm->fecha_venta_renta = $_REQUEST['fecha_venta_renta'];
        $alm->precio = $_REQUEST['precio'];

        // SI ID rentalibros ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA rentalibros, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->id > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->ID > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}
