<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi nombre es <?php
                        $nombre = "Daniel";
                        echo $nombre;
                        ?></title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="w-full p-20">
        <h1 class="text-center text-5xl mb-10 text-blue-600 font-bold">🔢 Mi Ejercicio en PHP ✏️</h1>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            $color = $i % 2 == 0 ? "bg-blue-600" : "bg-black";
            $palabra = $i % 2 == 0 ? "es par" : "";

            echo "<div class=\"mx-64 p-10 m-2 text-center text-white text-2xl font-bold  $color\">$palabra</div>";
        }
        ?>
    </div>

</body>

</html>