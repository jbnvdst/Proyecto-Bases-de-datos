<?php
require_once 'config.php'; // Archivo de configuración de la base de datos
$_SESSION['$username'] = 'admin'; // Nombre de usuario
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Streaming</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>

    <header>
        <h1>Gestor de Servicios de Streaming</h1>
    </header>

    <section>
        <h2>Buscar Película</h2>
        <form action="buscar_pelicula.php" method="GET">
            <label for="search_movie">Nombre de la película:</label>
            <input type="text" id="search_movie" name="search_movie" required>
            <button type="submit">Buscar</button>
        </form>
    </section>

    <section>
        <h2>Dar de Alta Película</h2>
        <form action="alta_pelicula.php" method="POST">
            <label for="titulo">Título:</label>
            <input type="text" id="titulo" name="titulo" required>

            <label for="duracion">Duracion:</label>
            <input type="number" id="duracion" name="duracion" required>

            <label for="web">Web:</label>
            <input type="text" id="web" name="web" required>

            <label for="director">Director:</label>
            <input type="text" id="director" name="director" required>
            
            <label for="genero">Genero:</label>
            <input type="text" id="genero" name="genero" required>

            <label for="productora">Productora:</label>
            <input type="text" id="productora" name="productora" required>

            <button type="submit">Dar de Alta</button>
        </form>
    </section>

    <section>
        <h2>Dar de Alta Actor</h2>
        <form action="alta_actor.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="tipo_documento">Tipo de Documento:</label>
            <input type="text" id="tipo_documento" name="tipo_documento" required>

            <laber style="font-weight: bold; width: 100%;" for="origen">Origen:</label>
            <input type="text" id="origen" name="origen" required>

            <label for="sexo">Sexo:</label>
            <input type="text" id="sexo" name="sexo" required>

            <button type="submit">Dar de Alta</button>
        </form>
    </section>

    <section>
        <h2>Dar de Alta Director</h2>
        <form action="alta_director.php" method="POST">
            <label for="director_name">Nombre:</label>
            <input type="text" id="director_name" name="director_name" required>

            <label for="tipo_documento">Tipo de Documento:</label>
            <input type="text" id="tipo_documento" name="tipo_documento" required>

            <laber style="font-weight: bold; width: 100%;" for="origen">Origen:</label>
            <input type="text" id="origen" name="origen" required>

            <label for="sexo">Sexo:</label>
            <input type="text" id="sexo" name="sexo" required>

            <button type="submit">Dar de Alta</button>
        </form>
    </section>

    <section>
        <h2>Dar de Alta Género</h2>
        <form action="alta_genero.php" method="POST">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="contrato">Contrato:</label>
            <input type="text" id="contrato" name="contrato" required>

            <button type="submit">Dar de Alta</button>
        </form>
    </section>

    <section>
        <h2>Dar de Alta País</h2>
        <form action="alta_pais.php" method="POST">
            <label for="nombre_locacion">Nombre:</label>
            <input type="text" id="nombre_locacion" name="nombre_locacion" required>

            <label for="version">Versión:</label>
            <input type="text" id="version" name="version" required>

            <button type="submit">Dar de Alta</button>
        </form>
    </section>
    
    <section>
        <h2>Dar de Alta Productora</h2>
        <form action="alta_productora.php" method="POST">
            <label for="rut">RUT:</label>
            <input type="text" id="rut" name="rut" required>

            <label for="denominacion">Denominación:</label>
            <input type="text" id="denominacion" name="denominacion" required>

            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required>

            <button type="submit">Dar de Alta</button>
        </form>
    </section>

    <section>
        <h2>Visualizar Películas</h2>
        <form action="visualizar_peliculas.php" method="GET">
            <button type="submit">Visualizar</button>
        </form>
    </section>

    <section>
        <h2>Visualizar Directores</h2>
        <form action="visualizar_directores.php" method="GET">
            <button type="submit">Visualizar</button>
        </form>
    </section>

    <section>
        <h2>Visualizar Actores</h2>
        <form action="visualizar_actores.php" method="GET">
            <button type="submit">Visualizar</button>
        </form>
    </section>

    <section>
        <h2>Crear Respaldos</h2>
        <form action="crear_respaldo.php" method="GET">
            <button type="submit">Crear</button>
        </form>
    </section>

</body>
</html>

