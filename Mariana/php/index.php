<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php menon</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <?php
    $nome = $_GET ["nome"];
    $nome = $_GET ["idade"];
    $nome = $_GET ["sobrenome"];
    $nome = $_GET ["peso"];
    $nome = $_GET ["altura"];
    
    echo "<p>$nome $idade $sobrenome $peso $altura</p>";
    ?>
</body>
</html>