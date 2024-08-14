<?php
require_once (__DIR__ . "/../model/formularioActividades.php");
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
    $tipoActividadAntiguo = isset($_POST['nombre_actividad_Antigua']) ? $_POST['nombre_actividad_Antigua'] : null;

    $tipoActividad = trim(ltrim(rtrim($tipoActividad)));
    $tipoActividadAntiguo = trim(ltrim(rtrim($tipoActividadAntiguo)));

    if ($accion === 'add' && (!empty($tipoActividad) && !empty($codigoTipodeMonetizacion) && $tipoActividad != '')) {
        try {
            if ($formularioActividad->actividadExiste($tipoActividad)) {
                header('Refresh: 3; url=http://localhost/SalonComunal2024/view/pages/formActividades/actividades.php');
                echo '
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script type="text/javascript">
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
                $resultado = $formularioActividad->crearActividad($tipoActividad, $codigoTipodeMonetizacion);
                if ($resultado) {
                    header('Refresh: 3; url=http://localhost/SalonComunal2024/view/pages/formActividades/actividades.php');
                    echo '
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script type="text/javascript">
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
        } catch (Exception $e) {
            echo "Error al procesar la solicitud: " . $e->getMessage();
        }
    } elseif ($accion === 'delete' && !empty($tipoActividad) && $tipoActividad != '') {
        try {
            $resultado = $formularioActividad->eliminarActividad($tipoActividad);
            if ($resultado === true) {
                header('Refresh: 3; url=http://localhost/SalonComunal2024/view/pages/formActividades/actividades.php');
                echo '
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script type="text/javascript">
                        window.onload = function(){
                            Swal.fire({
                                icon: "success",
                                title: "Actividad eliminada con éxito!",
                                showConfirmButton: false
                            });
                        }
                    </script>
                ';
            } else {
                header('Refresh: 3; url=http://localhost/SalonComunal2024/view/pages/formActividades/actividades.php');
                echo '
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script type="text/javascript">
                        window.onload = function(){
                            Swal.fire({
                                icon: "error",
                                title: "Actividad no encontrada!",
                                showConfirmButton: false
                            });
                        }
                    </script>
                ';
            }
        } catch (Exception $e) {
            echo "Error al procesar la solicitud: " . $e->getMessage();
        }
    } elseif ($accion === 'update' && !empty($tipoActividad) && !empty($codigoTipodeMonetizacion) && !empty($tipoActividadAntiguo)) {
        try {
            $resultado = $formularioActividad->actualizarActividad($tipoActividadAntiguo, $tipoActividad, $codigoTipodeMonetizacion);
            if ($resultado) {
                header('Refresh: 3; url=http://localhost/SalonComunal2024/view/pages/formActividades/actividades.php');
                echo '
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <script type="text/javascript">
                        window.onload = function(){
                            Swal.fire({
                                icon: "success",
                                title: "Actividad actualizada con éxito!",
                                showConfirmButton: false
                            });
                        }
                    </script>
                ';
            }
        } catch (Exception $e) {
            header('Refresh: 3; url=http://localhost/SalonComunal2024/view/pages/formActividades/actividades.php');
            echo '
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script type="text/javascript">
                    window.onload = function(){
                        Swal.fire({
                            icon: "error",
                            title: "' . htmlspecialchars($e->getMessage()) . '",
                            showConfirmButton: false
                        });
                    }
                </script>
            ';
        }
    } else {
        header('Refresh: 3; url=http://localhost/SalonComunal2024/view/pages/formActividades/actividades.php');
        echo '
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script type="text/javascript">
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

/*hola kendall*/

?>