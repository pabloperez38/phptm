<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Arreglos</title>
</head>

<body>
    <div class="container">
        <?php include "includes/header.php";
        include "includes/form_arreglos.php";

        if (isset($_GET['error']) && $_GET['error'] == '1') { ?>

            <div class="alert alert-danger">Datos no válidos</div>

        <?php } ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>