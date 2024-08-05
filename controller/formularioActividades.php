<?php
require_once(__DIR__ . "/../model/formularioActividades.php");
$formularioActividad = new formularioActividades_model();

$listaActividades = $formularioActividad->getformularioActividades();
$listaActividades = $formularioActividad->getMonetizaciones();

$formularioActividades = $formularioActividad->getFormularioActividades();

// Verifica si la solicitud es de tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recoge los datos del formulario
    $tipoActividad = isset($_POST['nombre_actividad']) ? $_POST['nombre_actividad'] : null;
    $codigoTipodeMonetizacion = isset($_POST['tipR']) ? $_POST['tipR'] : null;
    $accion = isset($_POST['action']) ? $_POST['action'] : null;

    $tipoActividad = trim(ltrim(rtrim($tipoActividad)));

    // Verifica que los campos no estén vacíos para la acción 'add'
    if ($accion === 'add' && (!empty($tipoActividad) && !empty($codigoTipodeMonetizacion) && $tipoActividad != '')) {
        try {
            if ($accion === 'add') {
                // Verifica si la actividad ya existe
                if ($formularioActividad->actividadExiste($tipoActividad)) {
                    header('Refresh: 3; url=http://localhost/SalonComunal2024/view/pages/formActividades/actividades.php');
                    echo'
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script type="text/Javascript">
                            window.onload = function(){
                                Swal.fire({
                                    icon: "error",
                                    title: "Ya existe una actividad con ese nombre!",
                                    showConfirmButton: false
                                });
                            }
                        </script>
                    ';
                    exit();          
                } else {
                    // Llama al método para crear la actividad en el modelo
                    $resultado = $formularioActividad->crearActividad($tipoActividad, $codigoTipodeMonetizacion);
                    if ($resultado) {
                        header('Refresh: 3; url=http://localhost/SalonComunal2024/view/pages/formActividades/actividades.php');
                        echo'
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script type="text/Javascript">
                            window.onload = function(){
                                Swal.fire({
                                    icon: "success",
                                    title: "Actividad creada con éxito!",
                                    showConfirmButton: false
                                });
                            }
                        </script>
                    ';
                    }
                }
            } elseif ($accion === 'delete') {
                // Llama al método para eliminar la actividad en el modelo
                $resultado = $formularioActividad->eliminarActividad($tipoActividad);
                if ($resultado === true) {
                    echo "Actividad eliminada con éxito.";
                } else {
                    echo $resultado; // Mostrar el mensaje de que la actividad no existe
                }
            }
        } catch (Exception $e) {
            echo "Error al procesar la solicitud: " . $e->getMessage();
        }
    } elseif ($accion === 'delete' && !empty($tipoActividad) && $tipoActividad != '') {
        try {
            // Llama al método para eliminar la actividad en el modelo
            $resultado = $formularioActividad->eliminarActividad($tipoActividad);
            if ($resultado === true) {
                echo "Actividad eliminada con éxito.";
            } else {
                echo $resultado; // Mostrar el mensaje de que la actividad no existe
            }
        } catch (Exception $e) {
            echo "Error al procesar la solicitud: " . $e->getMessage();
        }
    } else {
        header('Refresh: 3; url=http://localhost/SalonComunal2024/view/pages/formActividades/actividades.php');
        echo'
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script type="text/Javascript">
                window.onload = function(){
                    Swal.fire({
                        icon: "error",
                        title: "Por favor, complete todos los campos!",
                        showConfirmButton: false
                    });
                }
            
            </script>
        ';
        exit();
    }
}
?>
