<?php
    $pelicula = "Batman";
    $peliculas = array('Batman', 'Spiderman', 'El señor de los anillos');

    //var_dump($peliculas[1]);

    $cantantes = ['Eminem', 'Soalri','Calamaro'];
    //var_dump($cantantes[1]);


    //echo $peliculas[0];
    //echo $cantantes[2];

    //recorrer array

    echo "<h1>Listado de peliculas: </h1>";

    echo "<ul>";
    for($i=0;$i<count($peliculas);$i++){
        echo "<li> $peliculas[$i] </li>";
    }

    echo "</ul>";


    //FOREACH
    echo "<h1>Listado de cantantes: </h1>";

    echo "<ul>";
    foreach($cantantes as $cantante){
        echo "<li> $cantante </li>";
    }

    echo "</ul>";

    $personas = array(
        'nombre'=>'Victor',
        'apellido'=>'Aranda',
        'web'=>'google.com'
    );

    var_dump($personas);
    echo($personas['apellido']);

    //arrays multidimensionales

    $contactos =array(
        array(
            'nombre'=>'Antonio',
            'email'=>'antoarrobagmail.com'
        ),
        array(
            'nombre'=>'Bornia',
            'email'=>'borniaarrobagmail.com'
        ),
        array(
            'nombre'=>'Salvio',
            'email'=>'salvioarrobagmail.com'
        )
    );

    //var_dump($contactos[1]);
    echo "<p> ". $contactos[1]['nombre'] ." </p>";


    //Funciones para arrays
    echo "<hr>";

    //ordena el array
    asort($cantantes);

//FOREACH
echo "<h1>Listado de cantantes ordenados alfabeticamente: ASORT</h1>";

echo "<ul>";
foreach($cantantes as $cantante){
    echo "<li> $cantante </li>";
}

echo "</ul>";

echo "<hr>";

    //ordena el array
    arsort($cantantes);

//FOREACH
echo "<h1>Listado de cantantes ordenados alfabeticamente inverso: ARSORT</h1>";

echo "<ul>";
foreach($cantantes as $cantante){
    echo "<li> $cantante </li>";
}

echo "</ul>";


echo "<hr>";

    //ordena el array
    $numeros = [1,2,5,2,1,3];
   sort($numeros);

//FOREACH
echo "<h1>Listado de numeros ordenados SORT: </h1>";

echo "<ul>";
foreach($numeros as $numero){
    echo "<li> $numero </li>";
}

echo "</ul>";


// Añadir elementos a un array

$cantantes[]= 'Natos';
var_dump($cantantes);
echo "<hr>";

array_push($cantantes,'WARRIOR');
var_dump($cantantes);
echo "<hr>";

//quitar el ultimo elemento

array_pop($cantantes);
var_dump($cantantes);

echo "<hr>";

//Borrar el elemento i

unset($cantantes[1]);
var_dump($cantantes);
echo "<hr>";

//Seleccion aleatoria devuelve indice

$ind = array_rand($cantantes);
echo $cantantes[$ind];

//Dar la vuelta a un array, hay que asignarlo

var_dump(array_reverse($numeros));

//Buscar dentro de un array, devuelve el indice

var_dump(array_search('Calamaro',$cantantes));

//contar elementos
echo count($cantantes);
echo "<hr>";
echo sizeof($cantantes);
?>