<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <div class="logo-container">
            <a href="index.php" class="logo-link"><img src="assets/imgs/logo.jpg" alt="Apptask" class="logo"></a>
            <div class="app-name">AppTask</div>
        </div>
    </header>
    <main>
        <section class="task-section">
            <h1>Lista de tareas:</h1>
            <a href="tareas/nueva_tarea">Añadir nueva tarea</a>
            <div class="tareas-container">
                <table>
                    <thead>
                        <tr>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Fecha de Creación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <?php foreach ($data as $tarea): ?>
                        <tr>
                            <td data-label="Título"><?= htmlspecialchars($tarea['titulo']); ?></td>
                            <td data-label="Descripción"><?= htmlspecialchars($tarea['descripcion']); ?></td>
                            <td data-label="Estado"><?= htmlspecialchars($tarea['estado']); ?></td>
                            <td data-label="Fecha"><?= htmlspecialchars($tarea['fecha_creacion']); ?></td>
                            <td data-label="Acciones">
                                <a href="tareas/editar_tarea/<?= $tarea->tasks_id ?>">Editar |</a>
                                <form method="POST" action="/tareas/eliminar/<?= $tarea->tasks_id ?>" style="display:inline;">
                                    <button type="submit" onclick="return confirm('¿Estás seguro de que quieres eliminar esta tarea?');">
                                        🗑️ Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </section>
    </main>
</body>

</html>