<?php
class Alumnos
{
    public $cu;
    public $nombre;
    public $apellido;
    public function __construct($cu, $nombre, $apellido)
    {
        $this->cu=$cu;
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }
}
class ListaAlumnos
{
    public $Lista=[];
    private $frente=0;
    public function Insertaralumno($alumno)
    {

        $this->Lista[]=$alumno;
    }
    public function Eliminaralumno()
    {
        if ($this->frente<count($this->Lista))
        {
            $this->Lista[$this->frente]=null;
            $this->frente++;
        }
       
    }
    public function Mostrarlista()
    {
        echo "<table border='1' align=center;>";
        echo "<tr>";
        echo "<th>CU</th>";
        echo "<th>Nombre</th>";
        echo "<th>Apellido</th>";
       
        for ($i=$this->frente; $i < count($this->Lista); $i++) { 
            echo "<tr>";
            echo "<td>". $this->Lista[$i]->cu."</td>";
            echo "<td>". $this->Lista[$i]->nombre."</td>";
            echo "<td>". $this->Lista[$i]->apellido."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }

}