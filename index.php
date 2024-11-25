<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Proyecto PHP</title>
</head>
<body>
    <div id="cuerpo">
        <header>
            <h1>Proyecto PHP</h1>
        </header>
        <main id="cuerpo">
            <h2>Mi equipo</h2>
            <ul>
                <?php
                    // Definimos los enlaces y los nombres del equipo
                    $personas = [
                        "lidia" => "http://webapplidiamaria-rg.000.pe/?i=1",
                        "ruben" => "//webappruben-d7fcgxedbjdqadcs.spaincentral-01.azurewebsites.net",
                        "Alvaro" => "https://www.w3schools.com/css/css_border.asp",
                        "Alejandro" => "https://www.chess.com/es",
                        "Richard" => "http://webapprichart.ct.ws/"
                    ];

                    // Mostramos cada persona como un enlace
                    foreach ($personas as $nombre => $url) {
                        echo "<li><a href='$url' target='_blank'>$nombre</a></li>";
                    }
                ?>
            </ul>
        </main>
        <footer>
            <p>Muchas gracias por visitar esta página</p>
        </footer>
    </div>
</body>
</html>
