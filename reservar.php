<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopilar los datos del formulario
    $numPersonas = isset($_POST['num_personas']) ? (int)$_POST['num_personas'] : 0;
    $numDias = isset($_POST['num_dias']) ? (int)$_POST['num_dias'] : 0;
    $incluyeDesayuno = isset($_POST['incluye_desayuno']) ? "Sí" : "No";

    // Realizar cálculos u otras operaciones según tus necesidades
    // Por ejemplo, calcular el costo total de la estadía
    $precioPorNoche = 40000; // Precio por noche en el hostal
    $costoTotal = $precioPorNoche * $numDias;

    // Mostrar un mensaje de confirmación con los mismos estilos
    echo "<div class='page-content' style='margin: 20px; display: flex; justify-content: center; align-items: center; height: 100vh;'>";
    echo "<div class='hotel-container' style='background-color: #f0f0f0; text-align: center; padding: 20px;'>";

    echo "<div class='posada-title' style='background-color: #0074e4; color: white; text-align: center; padding: 10px; border-radius: 10px;'>";
    echo "<h1 style='font-size: 32px;'>Reserva Confirmada</h1>";
    echo "</div>";

    echo "<div class='posada-form' style='margin-top: 20px;'>";
    echo "<form>";
    echo "<div style='margin: 10px;'>";
    echo "<label>Número de Personas: $numPersonas</label>";
    echo "</div>";
    echo "<div style='margin: 10px;'>";
    echo "<label>Número de Días de Estadía: $numDias</label>";
    echo "</div>";
    echo "<div style='margin: 10px;'>";
    echo "<label>Incluye Desayuno: $incluyeDesayuno</label>";
    echo "</div>";
    echo "<div style='margin: 10px;'>";
    echo "<label>Costo Total: $$costoTotal</label>";
    echo "</div>";
  

    echo "</div>";

    echo "<div class='posada-footer' style='background-color: #0074e4; color: white; text-align: center; padding: 10px; border-radius: 10px;'>";
    echo "Resort Hilton - Leonardo Ayala-2023";
    echo "</div>";

    echo "</div>";

    echo "</div>";

    // Puedes agregar más lógica, como guardar los datos en una base de datos, enviar un correo de confirmación, etc.

} else {
    // Si alguien intenta acceder a este archivo directamente sin enviar datos desde el formulario, muestra un mensaje de error o redirección.
    echo "Acceso no autorizado.";
}
?>
