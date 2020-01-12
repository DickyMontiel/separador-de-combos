<?php

    if(isset($_POST['combos']) && isset($_POST['separador'])){

        $texto = $_POST['combos'];
        $separador = $_POST['separador'];

        //Con explode creamos un array separado por "\n" osea cada linea sera un espacio del array
        $lineas = explode("\n", $texto);

        //Obtendremos la cantidad de lineas que hay
        $cantidadLineas = count($lineas)-1;
    
        //Array inespecifico de espacios para agregar los datos luego
        $correos = array();
        $claves = array();

        for($i = 0; $i <= $cantidadLineas; $i++){

            //Se separa por el signo introducido en el campo
            $combo = explode($separador, $lineas[$i]);

            //Si el array de combo tiene usuario y contraseña que los agregue al array creado anteriormente
            if(isset($combo[0]) && isset($combo[1])){

                //Agregamos los datos si la condicion es verdadera
                $correos[] = $combo[0];
                $claves[] = $combo[1];

            }

        }

        $cantidadCorreos = count($correos)-1;
        $cantidadClaves = count($claves)-1;

        echo "<h1>Correos - Claves</h1> <br>";

        echo "<textarea style='width:48%; height:150px;'>";
            for($i = 0; $i <= $cantidadCorreos; $i++){
                echo $correos[$i]."\n";
            }
        echo "</textarea>";

        echo "<textarea style='width:48%; height:150px;'>";
            for($i = 0; $i <= $cantidadClaves; $i++){
                echo $claves[$i];
            }
        echo "</textarea>";

        echo "<br><br><hr>";

    }

?>