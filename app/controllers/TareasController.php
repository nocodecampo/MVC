<?php

namespace Formacom\controllers;

use Formacom\Core\Controller;
use Formacom\models\Tarea;
use Exception;

class TareasController extends Controller
{
    // Método para listar todas las tareas
    public function index(...$params)
    {
        $tareas = Tarea::all();
        $this->view('tareas_list', $tareas);
    }

    // Método para añadir tarea
    public function nueva_tarea(...$params)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['titulo'], $_POST['descripcion'])) {
            try {
                // Crear nueva tarea
                $tarea = new Tarea();
                $tarea->titulo = $_POST['titulo'];
                $tarea->descripcion = $_POST['descripcion'];
                $tarea->estado = 'En proceso';
                $tarea->users_id = 1;
                $tarea->save(); // Guardar en la base de datos

                echo "Tarea creada con éxito.";
                exit();
            } catch (Exception $e) {
                echo "Error al crear la tarea: " . $e->getMessage();
            }
        } else {
            // Cargar vista para crear tarea
            $this->view('nueva_tarea');
        }
    }

    // Método para editar un tarea
    public function editar_tarea($id)
    {
        // Buscar la tarea por ID
        $tarea = Tarea::find($id);

        if (!$tarea) {
            die("Error: Tarea no encontrada.");
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            try {
                // Validar si existen los campos
                if (!isset($_POST['titulo'], $_POST['descripcion'])) {
                    throw new Exception("Faltan datos obligatorios.");
                }

                // Actualizar la tarea
                $tarea->titulo = $_POST['titulo'];
                $tarea->descripcion = $_POST['descripcion'];
                $tarea->save(); // Guarda los cambios

                echo "Tarea actualizada con éxito.";
                exit();
            } catch (Exception $e) {
                echo "Error al actualizar la tarea: " . $e->getMessage();
            }
        } else {
            // Cargar vista de edición con la tarea actual
            $this->view('editar_tarea', ['tarea' => $tarea]);
        }
    }

    // Método para eliminar una tarea
    public function eliminar_tarea($id)
    {
        try {
            $tarea = Tarea::find($id);

            if (!$tarea) {
                throw new Exception("❌ Error: Tarea no encontrada.");
            }

            $tarea->delete(); // Elimina la tarea
            header("Location: /tareas"); // Redirige a la lista
            exit();
        } catch (Exception $e) {
            echo "❌ Error al eliminar la tarea: " . $e->getMessage();
        }
    }
}
