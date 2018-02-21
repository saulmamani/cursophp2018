<?php 

class Operacion
{
	//atributos
	public $a;
	public $b;

	//metodos
	function sumar()
	{
		return $this->a + $this->b;
	}

	function restar()
	{
		return $this->a - $this->b;
	}

	function multiplicar()
	{
		return $this->a * $this->b;
	}

	function dividir()
	{
		return $this->a / $this->b;
	}	

	function sumarRango()
	{
		$s = 0;
		while ($this->a <= $this->b) {
			$s += $this->a;
			$this->a++;
		}
		return $s;
	}
}

?>