<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de peliculas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Lista de películas:</h1>
    <ul>
        <?php
        foreach ($data as $pelicula) {
            echo "<li>{$pelicula->title}<br>{$pelicula->description}</li><hr>";
        }
        ?>
    </ul>
</body>

</html>