<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarea</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
    <header>
        <div class="logo-container">
            <a href="" class="logo-link"><img src="../../assets/imgs/logo.jpg" alt="Apptask" class="logo"></a>
            <div class="app-name">AppTask</div>
        </div>
    </header>
    <main>
        <section class="main-section">
            <div class="dashboard-container editable">
                <h2>Editar Tarea</h2>

                <?php if (!isset($data)): ?>
                    <p>Error: No se encontró la tarea.</p>
                    <?php exit(); ?>
                <?php endif; ?>

                <form method="POST">
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" value="<?= htmlspecialchars($data->titulo ?? '') ?>" required>

                    <label for="descripcion">Descripción:</label>
                    <textarea name="descripcion"><?= htmlspecialchars($data->descripcion ?? '') ?></textarea>

                    <button type="submit">Actualizar Tarea</button>
                </form>

            </div>
        </section>
    </main>
</body>

</html>