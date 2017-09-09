<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" rel="script" src="js/javascript.js"></script>
    <title>My Guide</title>
</head>
<body>
<header class="text-center padd5">
    <h1>My Guide</h1>
    <h3>by Susana Piñero</h3>
</header>

<hr>
<nav>
    <ul class="flex-container nav">
        <li class="col-2 padd2"><a href="index.php">Home</a></li>
        <li class="col-2 padd2"><a href="text.php">Text</a></li>
        <li class="col-2 padd2"><a href="link.php">Links</a></li>
        <li class="col-2 padd2"><a href="multimedia.php">Multimedia</a></li>
        <li class="col-2 padd2"><a href="formulario.php">Forms</a></li>
    </ul>
</nav>
<hr>
<section>
    <div>
        <h4 class="title text-center">Ejemplo de un formulario</h4>
        <form action="miScript.php" method="GET">
            <label for="to">Para: <input id="to" type="email"></label>
            <label for="topic">Temática:
                <select id="topic" name="topic">
                    <option>-- Elige un tema --</option>
                    <option value="proposal">Propuesta</option>
                    <option value="report">Reporte</option>
                    <option value="other">Otro</option>
                </select>
            </label>
            <label for="subject">Asunto: <input id="subject" name="subject" type="text"></label>
            <label for="body">Cuerpo: <textarea id="body" name="body"></textarea></label>
            <button type="submit">Enviar</button>
        </form>
    </div>
</section>

</body>
</html>