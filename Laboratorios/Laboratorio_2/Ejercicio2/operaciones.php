<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<style>

    .rojo {
        background-color: rgb(227, 108, 10);
        width: 100px;
        height: 70px;
    }

</style>
<body>
	
<?php 
class Operaciones
{
	private $a;
	private $b;
	private $c;
	
	function __construct($a,$b,$c)
	{
		$this->a=$a;
		$this->b=$b;
		$this->c=$c;
			
	}

	public function CalcularSuma()
	{
		return $this->a+$this->b+$this->c;
	}

	public function CalcularMayor()
	{
		if($this->a>$this->b){
			if($this->a>$this->c){
				return $this->a;
			}else{
				return $this->c;
			}
		}
		if($this->b>$this->a){
			if($this->b>$this->c){
				return $this->b;
			}else{
				return $this->c;
			}
		}

	}

	public function MostrarCalculos(){
		echo "<table border='1'>";
        echo "<tr align='center'>";
        echo "<th class='rojo'>Valor de A</th>";
        echo "<th class='rojo'>Valor de B</th>";
        echo "<th class='rojo'>Valor de C</th>";
       
            echo "<tr align='center'>";
            echo "<td>". $this->a ."</td>";
            echo "<td>". $this->b ."</td>";
            echo "<td>". $this->c ."</td>";
            echo "</tr>";

		echo "<tr align='center'>";
		echo "<td class='rojo'>Suma</td>";
		echo "<td colspan='2' >". $_SESSION['operacion']->CalcularSuma()."</td>";
		echo "</tr>";

		echo "<tr align='center'>";
		echo "<td class='rojo' >Mayor</td>";
		echo "<td colspan='2' >".$_SESSION['operacion']->CalcularMayor()."</td>";
		echo "</tr>";
        
        echo "</table>";
	}

}

?>
</body>
</html>
