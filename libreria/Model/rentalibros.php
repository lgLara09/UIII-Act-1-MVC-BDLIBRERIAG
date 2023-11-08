<?php
class rentalibros
{
	private $pdo;
    
    public $id;
    public $id_libro;
    public $nombre_libro;
    public $genero;
    public $autor_libro;
    public $codigo_fabrica;
	public $editorial;
    public $fecha_venta_renta;
    public $precio;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Conexion::StartUp();     
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

			$stm = $this->pdo->prepare("SELECT * FROM tbl_libro");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function getting($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM tbl_libro WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM tbl_libro WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE tbl_libro SET 
						id_libro          = ?, 
						nombre_libro        = ?,
                        genero        = ?,
						autor_libro            = ?, 
						codigo_fabrica		 = ?,
						editorial            = ?, 
						fecha_venta_renta		 = ?, 
						precio 		= ?

				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->id_libro, 
                        $data->nombre_libro,
                        $data->genero,
                        $data->autor_libro,
                        $data->codigo_fabrica,
						$data->editorial,
                        $data->fecha_venta_renta,
                        $data->precio,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar($data)
	{
		try 
		{
		$sql = "INSERT INTO `tbl_libro` (id_libro,nombre_libro,genero,autor_libro,codigo_fabrica,editorial,fecha_venta_renta,precio) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->id_libro, 
                    $data->nombre_libro,
                    $data->genero,
                    $data->autor_libro,
                    $data->codigo_fabrica,
                    $data->editorial,
                    $data->fecha_venta_renta,
                    $data->precio                     
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>
