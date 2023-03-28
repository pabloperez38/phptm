<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Inicio</title>
</head>

<body>
    <div class="container">
        <?php include "includes/header.php";

        $lista = [
            "Huevos" => 14,
            "Arroz" => 4,
            "Cervezas" => 7,
            "Papas fritas" => 10
        ];
        ?>
        <h1>Lista de compras</h1>
        <?php foreach ($lista as $key => $value) {
            echo  "<b>" . $key . ":</b> " . $value . "<br>";
        } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>