<?php
class producto
{
	private $pdo;
    
    public $id_producto;
    public $nombre;
    public $precio;
    public $stock;  
    public $id_categoria;
    public $id_proveedor;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM producto");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}


	public function Obtener($id_producto)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM producto WHERE id_producto = ?");
			          

			$stm->execute(array($id_producto));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_producto)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM producto WHERE id_producto = ?");			          

			$stm->execute(array($id_producto));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE producto SET 
						nombre      		= ?,
						precio          = ?, 
						stock        = ?,
                        id_categoria        = ?,
                        id_proveedor        = ?
						
				    WHERE id_producto = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    
                        $data->nombre,                        
                        $data->precio,
                         $data->stock,
                        $data->id_categoria, 
						$data->id_proveedor, 
                        $data->id_producto
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(producto $data)
	{
		try 
		{
		$sql = "INSERT INTO producto (nombre,precio,stock,id_categoria,id_proveedor) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					
					 $data->nombre, 
                    $data->precio,
                    $data->stock, 
                    $data->id_categoria, 
                     $data->id_proveedor 
                   
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}