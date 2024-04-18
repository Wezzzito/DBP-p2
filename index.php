<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_apellidos = $_POST['nombre_apellidos'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
    $ocupacion = $_POST['ocupacion'];
    $contacto = $_POST['contacto'];
    $nacionalidad = $_POST['nacionalidad'];
    $nivel_ingles = $_POST['nivel_ingles'];
    $lenguajes_programacion = isset($_POST['lenguajes_programacion']) ? $_POST['lenguajes_programacion'] : array();
    $aptitudes = $_POST['aptitudes'];
    $habilidades = isset($_POST['habilidades']) ? $_POST['habilidades'] : array();
    $perfil = $_POST['perfil'];

    echo "<!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <title>Formulario CV</title>
        <link href=\"extracss.css\" rel=\"stylesheet\" type=\"text/css\">
    </head>
    <body>
        <div id=\"fondo\">
            <img src=\"jose-martinez.jpg\" class=\"imagen\">
            <div class=\"titulo\">
                <h3>{$nombre_apellidos}</h3>
                <p>{$ocupacion}</p>
            </div>
        </div>
        <div id=\"parent\">
            <div id=\"wide\">
                <h1>Contacto</h1>
                <hr>
                <h3>{$contacto}<br><br></h3>
                <h1>Nacionalidad</h1>
                <hr>
                <h3>{$nacionalidad}<br><br></h3>
                <h1>Fecha de nacimiento</h1>
                <hr>
                <h3>{$fecha_nacimiento}<br><br></h3>
                <h1>Idiomas</h1>
                <hr>
                <h3>{$nivel_ingles}<br><br></h3>
                <h1>Lenguajes de Programación</h1>
                <hr>";
                if (!empty($lenguajes_programacion)) {
                    echo "<ul>";
                        foreach ($lenguajes_programacion as $lenguaje) {
                            echo "<li>{$lenguaje}</li>";
                        }
                    echo "</ul>";
                }
                echo "<br><br>
                <h1>Aptitudes</h1>
                <hr>
                <h3>- {$aptitudes}<br><br></h3>
                <h1>Habilidades</h1>
                <hr>";
                if (!empty($habilidades)) {
                    echo "<ul>";
                        foreach ($habilidades as $habilidad) {
                            echo "<li>{$habilidad}</li>";
                        }
                    echo "</ul>";
                }
                echo "<br><br>
                <h1>Otros intereses</h1>
                <hr>
                <h3>- Creador de yincanas<br>
                - Paseos ecológicos grupales<br>
                - Lectura grupal en inglés<br><br></h3>
            </div>
            <div id=\"narrow\">
                <h1>Perfil</h1>
                <hr>
                <h3>{$perfil}<br><br></h3>
                <h1>Experiencia laboral</h1>
                <hr>
                <h2>Trabajador social</h2>
                <h3>México DF, | 2022 - Actualmente</h3>
                <h3>- Coordinado y mediador entre equipos de ayuda psicologica a jovenes y niños en exclusion social.<br>
                    - Velar por la salud mental del equipo y de miembros involucrados en proyectos.<br>
                    - Mepeo de necesidades estrategicas y lógicas para las diferentes áreas.<br>
                    - Monitor de ejercicios fisicos para adolescentes.<br>
                    - Programar diferentes actividades extracurriculares en los involucrados.<br></h3>
                <h2>Trabajador social</h2>
                <h3>México DF, | 2020 - 2022</h3>
                <h3>- Funciones para seguimientos de casos para jóvenes con problemas de adicciones.<br>
                    - Capacitaciones e integracion vinculadas a medidas preventivas.<br>
                    - Recopilacion de evidencias para auditorias y programas sociales.<br></h3>
                <h2>Trabajador social (Prác";
}
?>
