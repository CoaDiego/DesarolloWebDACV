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
        background-color: red;
        width: 50px;
        height: 50px;
    }
</style>

<body>
    <table>
    <?php

      $NC = $_POST["NC"]; 
      $NF = $_POST["NF"]; 
      

      $nfaux = $NF;
      $ncaux = $NC;

      $aux = 0;

      
    
    for($i = 1; $i <= $NF; $i++) {
    
        echo "<tr>";

        for($j =1; $j <= $NC; $j++) {

        
            echo "<td >".$nfaux*$ncaux."</td>";

            if($j == $NC){

                echo "<td class='rojo'>". $NF - $aux."</td>";
                
                
            }

            $ncaux --;
    
        }
        $nfaux--;

        $ncaux = $NF;

        echo "</tr>";

        $aux++;
    
    }

    for($i = 0; $i <= $NF; $i++) {
        if($NC - $i <0 ){
            break;
        }
        echo "<td class='rojo'>". $NC - $i."</td>";
    }

    
    ?>
</table>
        </form>
</body>
</html>