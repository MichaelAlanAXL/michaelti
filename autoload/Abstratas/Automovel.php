<?php 

interface Veiculo {

	public function acelerar($velocidade);

}

abstract class Automovel implements Veiculo {

	public function acelerar($velocidade)
	{
		echo "O veículo acelerou até " . $velocidade . " km/h";
	}
	
}


 ?>