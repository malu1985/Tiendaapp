<?php
require_once '../modelo/producto.php';

class productoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new producto();
    }
    
    public function Index(){
        require_once '../vista/header.php';
        require_once '../vista/producto/producto.php';
       
    }
	
	public function Indexuser(){
        require_once '../vista/header.php';
        require_once '../vista/producto/producto_user.php';
       
    }
    
    public function Crud(){
        $producto = new producto();
        
        if(isset($_REQUEST['id_producto'])){
            $producto = $this->model->Obtener($_REQUEST['id_producto']);
        }
        
        require_once '../vista/header.php';
        require_once '../vista/producto/producto-editar.php';
        
    }
	 public function Cruduser(){
        $producto = new producto();
        
        if(isset($_REQUEST['id_producto'])){
            $producto = $this->model->Obtener($_REQUEST['id_producto']);
        }
        
        require_once '../vista/header.php';
        require_once '../vista/producto/producto-editaruser.php';
        
    }
	
    
    public function Guardar(){
        $producto = new producto();
        
        $producto->id_producto = $_REQUEST['id_producto'];
        $producto->nombre = $_REQUEST['nombre'];
        $producto->precio = $_REQUEST['precio'];
        $producto->stock = $_REQUEST['stock'];
        $producto->id_categoria = $_REQUEST['id_categoria'];  
        $producto->id_proveedor = $_REQUEST['id_proveedor'];    
      

        $producto->id_producto > 0 
            ? $this->model->Actualizar($producto)
            : $this->model->Registrar($producto);
        
        header('Location: ../vista/vista_producto.php');
    }
	
	 public function Guardaruser(){
        $producto = new producto();
        
        $producto->id_producto = $_REQUEST['id_producto'];
        $producto->nombre = $_REQUEST['nombre'];
        $producto->precio = $_REQUEST['precio'];
        $producto->stock = $_REQUEST['stock'];
        $producto->id_categoria = $_REQUEST['id_categoria'];  
        $producto->id_proveedor = $_REQUEST['id_proveedor'];    
      

        $producto->id_producto > 0 
            ? $this->model->Actualizar($producto)
            : $this->model->Registrar($producto);
        
        header('Location: ../vista/vista_productouser.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_producto']);
        header('Location: ../vista/vista_producto.php');
    }
}