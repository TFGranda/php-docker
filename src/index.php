<?php
    //phpinfo();
    $array_data = array("Universidad"=>"UTPL", 
                        "Curso"=>"Procesos de Ingenieria de Software",  
                        "Alumno"=>"Tania Granda", 
                        "Periodo"=>"Abr/Ago 2021", 
                        "Lenguaje de programacion preferido"=>"C#",
                        "Aspiracion PostGraduacion"=>"Certificacion en Desarrollo de Videojuegos 3D");
    
    echo json_encode($array_data, JSON_PRETTY_PRINT);
?>