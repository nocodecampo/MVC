<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de actores</title>
</head>

<body>
    <h1>Lista de actores:</h1>
    <ul>
        <?php
        foreach ($data as $actor) {
            echo "<li>{$actor->actor_id} - {$actor->first_name} {$actor->last_name}</li>";
        }
        ?>
    </ul>
</body>

</html>