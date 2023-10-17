<?php
// Definición de clases para los diferentes tipos de hospedaje

abstract class Hotel {
    abstract public function imprimirFormulario();
}

class Hostal extends Hotel {
    public function imprimirFormulario() {
        echo "<div class='page-content' style='margin: 20px; display: flex; justify-content: center; align-items: center; height: 100vh;'>";
        echo "<div class='hotel-container' style='background-color: #f0f0f0; text-align: center; padding: 20px;'>";

        echo "<div class='posada-title' style='background-color: #0074e4; color: white; text-align: center; padding: 10px; border-radius: 10px;'>";
        echo "<h1 style='font-size: 32px;'>Hostal Hilton</h1>";
        echo "</div>";

        echo "<div class='posada-form' style='margin-top: 20px;'>";
        echo "<form method='post' action='reservar.php'>";
        echo "<div style='margin: 10px;'>";
        echo "<label for='num_personas' style='margin-right: 10px;'>Número de personas:</label>";
        echo "<input type='number' name='num_personas' required><br>";
        echo "</div>";
        echo "<div style='margin: 10px;'>";
        echo "<label for='num_dias' style='margin-right: 10px;'>Número de días de estadía:</label>";
        echo "<input type='number' name='num_dias' required><br>";
        echo "</div>";
        echo "<div style='margin: 10px;'>";
        echo "<label for='incluye_desayuno' style='margin-right: 10px;'>Incluye Desayuno:</label>";
        echo "<input type='checkbox' name='incluye_desayuno'>";
        echo "</div>";
        echo "<br><input type='submit' value='Enviar'>";
        echo "</form>";
        echo "</div>";

        echo "<div class='posada-image' style='margin-top: 20px;'>";
        echo "<img src='https://hoteldesigns.net/wp-content/uploads/2021/04/Webp.net-gifmaker.gif' alt='Hostal Hilton' class='expandable-image' onclick='expandImage(this);' style='max-width: 450px; height: auto; margin-bottom: 20px; cursor: pointer; border-radius: 10px;'>";
        echo "</div>";

        echo "</div>";

        echo "</div>"; // Cierre del div 'page-content'

       
    }
}

class Posada extends Hotel {
    public function imprimirFormulario() {
        echo "<div class='page-content' style='margin: 20px; display: flex; justify-content: center; align-items: center; height: 100vh;'>";
        echo "<div class='hotel-container' style='background-color: #f0f0f0; text-align: center; padding: 20px;'>";

        echo "<div class='posada-title' style='background-color: #0074e4; color: white; text-align: center; padding: 10px; border-radius: 10px;'>";
        echo "<h1 style='font-size: 32px;'>Posada Hilton</h1>";
        echo "</div>";

        echo "<div class='posada-form' style='margin-top: 20px;'>";
        echo "<form method='post' action='reservar.php'>";
        echo "<div style='margin: 10px;'>";
        echo "<label for='num_personas' style='margin-right: 10px;'>Número de personas:</label>";
        echo "<input type='number' name='num_personas' required><br>";
        echo "</div>";
        echo "<div style='margin: 10px;'>";
        echo "<label for='num_dias' style='margin-right: 10px;'>Número de días de estadía:</label>";
        echo "<input type='number' name='num_dias' required><br>";
        echo "</div>";
        echo "<div style='margin: 10px;'>";
        echo "<label for='incluye_desayuno' style='margin-right: 10px;'>Incluye Desayuno:</label>";
        echo "<input type='checkbox' name='incluye_desayuno'>";
        echo "</div>";
        echo "<br><input type='submit' value='Enviar'>";
        echo "</form>";
        echo "</div>";

        echo "<div class='posada-image' style='margin-top: 20px;'>";
        echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4J82xkalIhDCbobuoDSXWU5fMgSehGC_DJyrcWKWSrAwBRMi9wvPLnWU-V8CySViXXzo&usqp=CAU' alt='Posada Hilton' class='expandable-image' style='max-width: 157px; height: auto;'>";
        echo "&nbsp;";
        echo "<img src='https://www.hotelveranoresort.com/media/36856/hotel-verano-resort-san-gil-familiar-fachada-piscina-b1.gif?width=400&height=280&mode=crop' alt='Posada Hilton' class='expandable-image' onclick='expandImage(this);' style='max-width: 400px; height: auto;'>";
        echo "</div>";

        echo "<div class='posada-footer' style='background-color: #0074e4; color: white; text-align: center; padding: 10px; border-radius: 10px;'>";
        echo "Posada Hilton - Leonardo Ayala-2023";
        echo "</div>";

        echo "</div>";

        echo "</div>";
    }
}



class Resort extends Hotel {
    public function imprimirFormulario() {
        echo "<div class='page-content' style='margin: 20px; display: flex; justify-content: center; align-items: center; height: 100vh;'>";
        echo "<div class='hotel-container' style='background-color: #f0f0f0; text-align: center; padding: 20px;'>";

        echo "<div class='posada-title' style='background-color: #0074e4; color: white; text-align: center; padding: 10px; border-radius: 10px;'>";
        echo "<h1 style='font-size: 32px;'>Resort Hilton</h1>";
        echo "</div>";

        echo "<div class='posada-form' style='margin-top: 20px;'>";
        echo "<form method='post' action='reservar.php'>";
        echo "<div style='margin: 10px;'>";
        echo "<label for='num_personas' style='margin-right: 10px;'>Número de personas:</label>";
        echo "<input type='number' name='num_personas' required><br>";
        echo "</div>";
        echo "<div style='margin: 10px;'>";
        echo "<label for='num_dias' style='margin-right: 10px;'>Número de días de estadía:</label>";
        echo "<input type='number' name='num_dias' required><br>";
        echo "</div>";
        echo "<div style='margin: 10px;'>";
        echo "<label for='incluye_desayuno' style='margin-right: 10px;'>Plan Todo Incluido:</label>";
        echo "<input type='checkbox' name='plan_todo_incluido'>";
        echo "</div>";
        echo "<br><input type='submit' value='Enviar'>";
        echo "</form>";
        echo "</div>";

        echo "<div class='posada-image' style='margin-top: 20px;'>";
        echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ1tZiVCPRWjRYuiSnzhuHY9bVR7a0ziUvWyw&usqp=CAU' alt='Resort Hilton' class='expandable-image' onclick='expandImage(this);' style='max-width: 275px; height: auto;'>";
        echo "&nbsp;";
        echo "<img src='https://media.giphy.com/media/TVcHJ3fR3BaSs/giphy.gif' alt='Resort Hilton' class='expandable-image' onclick 'expandImage(this);' style='max-width: 275px; height: auto;'>";
        echo "&nbsp;";
        echo "<img src='https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7KfnZAsIUk8rt9v_WXWVPwBRbmSOJzFpVZ0YUa4cMm50lM6xoQqbAhn07sv71Z0CHKPY&usqp=CAU' alt='Resort Hilton' class='expandable-image' onclick='expandImage(this);' style='max-width: 242px; height: auto;'>";
        echo "</div>";

        echo "<div class='posada-footer' style='background-color: #0074e4; color: white; text-align: center; padding: 10px; border-radius: 10px;'>";
        echo "Resort Hilton - Leonardo Ayala-2023";
        echo "</div>";

        echo "</div>";

        echo "</div>";
    }
}




// Lógica para crear objetos y mostrar el formulario correspondiente

$precio = isset($_POST['precio']) ? (float)$_POST['precio'] : 0;

if ($precio >= 40000 && $precio <= 70000) {
    $hotel = new Hostal();
} elseif ($precio >= 70000 && $precio <= 150000) {
    $hotel = new Posada();
} else {
    $hotel = new Resort();
}

echo "<div id='resultado'>";
$hotel->imprimirFormulario();
echo "</div>";


?>
