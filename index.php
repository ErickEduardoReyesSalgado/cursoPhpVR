<?php
    print ("Imprimir php");
    echo "<h1>Imprimir php echo</h1>";

    //comentarios
    # Este es un comentario
    //comentario
    /*
     * Multi comentario
     * */
    echo "<!--comentario html -->";


    //variables en php
    $nombre = "Erick";
    #$altura = 1.75;
    $altura  = existeParametro("altura", true);

    $texto = "curso php";
    $texto2 = "Curso de php con $nombre";

    $textoFinal = "<h1>".$texto2.", su altura es: ". $altura."</h1>";

    $textoFinal .= "<h1>, por lo tanto eres medio alto</h1>";

    echo $textoFinal;


    #GET
    #url http://localhost/curso_basico_php_victor_robles/index.php?nombre=erick
    #url con doble parametro
    #url http://localhost/curso_basico_php_victor_robles/index.php?nombre=erick&altura=185

    #echo "<hr>".$_GET["nombre"]."<hr>";

    $nombre  = existeParametro("nombre", false);

    echo "<h1>".$nombre."</h1>";

    function existeParametro( $parametro, $numero )
    {
        if ( isset($_GET[$parametro])){
            $valor = $_GET[$parametro];
        }else{
            $valor = "Paulina";
            if ( $numero ){
                $valor = 150;
            }

        }

        return $valor;
    }

    #arrays
    $personas = ["Erick", "Cesar","Mario"];
    echo $personas[0];
    echo $personas[1];
    echo $personas[2];

?>
    <h1>Listado de personas</h1>
    <?php
    echo "CON CICLO FOREACH";

    foreach ($personas as $nombrePersona){
        echo "<li>$nombrePersona<br></li>";
    }
    echo "CON CICLO FOR";
    for ($i = 0 ; $i < count($personas); $i++){
        echo "<li>$personas[$i]<br></li>";
    }


    $entrada = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
    $claves_aleatorias = array_rand($entrada, 3);
    #echo $entrada[$claves_aleatorias[0]] . "\n";
    #echo $entrada[$claves_aleatorias[1]] . "\n";

for ($i = 0; $i<count($claves_aleatorias); $i++){
    echo $entrada[$claves_aleatorias[$i]];
    }
