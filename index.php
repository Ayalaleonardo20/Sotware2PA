<!DOCTYPE html>
<html>
<head>
    <title>Cotizador de Estadía Hilton</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    
    <div class="page-container">
        <h1>Cotizador de Estadía Hilton</h1>
        <form method="post" action="cotizador.php">
            <label for="precio">Precio por noche: </label>
            <input type="text" name="precio" id="precio" required>
            <input type="submit" value="Buscar">
        </form>
        <div id="resultado">
            <div class="image-container">
                <img class="expandable-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSpESlqIcAEciKKIDkBCRSVJUnRPg0FuNxLBrv4Q6HrLm87iqQPucT5q7xSf9n0yU1cI-I&usqp=CAU" alt="Hostal Hilton">
                <img class="expandable-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLFsay13sCILxgfo0zKyo5C3Wd8lITWU2Haud2r-t3adUJHrU2VHtYbcEHL97DHJ1T4Gk&usqp=CAU" alt="Posada Hilton">
                <img class="expandable-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA4f6Z4bSZh4oXYAiHMW7yl1YyH7ziOexBqg&usqp=CAU" alt="Resort Hilton">
            </div>
            <br>
            <div class="image-container">
                <img class="expandable-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoPxSGMHjmItzTle-HDEh1129bIFr2KGHuBbjxTM_Z0RGVMeNHw-85C1FM6zSwV9WBJCw&usqp=CAU" alt="Hostal Hilton">
                <img class="expandable-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXNQWlR8cQ6--ebH2TAG7N4tS04GALbiJk2yAoP5HRStXs8HOV2g9xw30mkW3dBDMNRF0&usqp=CAU" alt="Posada Hilton">
                <img class="expandable-image" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQXZkm2FdTIXkxbvzsIkz_2qcIfh849Yo-4h-F5NfsXtxg4_Zmm-zzDN0NLUst7CY3YSnI&usqp=CAU" alt="Resort Hilton" >
            </div>
        </div>
        <br>
        <footer>Leonardo Ayala - 2023</footer>
    </div>
</body>
</html>
