<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejecutar Comando PHP</title>
</head>
<body>
    <h2>Ejecutar Comando PHP desde HTML</h2>
    
    <!-- Botón para ejecutar el comando -->
    <form method="post">
        <button type="submit" name="executeCommand">Ejecutar Comando</button>
    </form>

    <section id="mysection1" contenteditable="true">
        <?php
        // Verificar si el botón ha sido presionado
        if (isset($_POST['executeCommand'])) {
            // Ejecutar el comando whoami
            $output = shell_exec('whoami');
            echo "<p>Resultado del comando: $output</p>";
        }
        ?>
    </section>
</body>
</html>
