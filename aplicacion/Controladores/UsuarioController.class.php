<?php 
class UsuarioController
{
	private function myquery($sql)
	{
		$cadcon = Conexion::conectar();
		$res = $cadcon->query($sql);
		Conexion::desconectar($cadcon);

		return $res;
	}

	//listar registros
	public function listar()
	{
		$sql = "SELECT * from usuario";
		return $this->myquery($sql);
	}

	public function buscarPor($id)
	{
		$sql = "SELECT * from usuario where email = $id";
		return $this->myquery($sql);	
	}

	public function insertar(Usuario $reg)
	{
		$sql = "insert into usuario 
				values( '$reg->email' , 
					    '$reg->clave' ,
						'$reg->nombre' ,
						'$reg->celular' ,
						'$reg->rol')";

		return $this->myquery($sql);
	}

	public function eliminar($id)
	{
		$sql = "DELETE FROM usuario where email = $id";
		return $this->myquery($sql);	
	}

	public function modificar(Usuario $reg, $id)
	{
		$sql = " UPDATE usuario SET 
				 nombre = '$reg->nombre',
				 celular = '$reg->celular'
				 where email = $id  ";
		return $this->myquery($sql);	
	}

	public function autenticar($email, $clave)
	{
		$sql = "SELECT * from usuario 
				where email = '$email' 
				and clave = '$clave' ";

		$res = $this->myquery($sql);

		if(mysqli_num_rows($res) > 0)
			return 1;
		else
			return 0;	
	}
};cho

?>