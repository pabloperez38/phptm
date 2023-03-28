<div class="row">

    <h1>Crear carta</h1>

    <div class="col-md-4 mt-5">
        <form name="form" method="post" action="recibe.php">

            <label class="mt-3" for="email"><strong>Nombre:</strong></label>
            <input class="form-control" type="text" name="nombre" id="nombre" required />

            <label class="mt-3" for="apellido"><strong>Apellido:</strong></label>
            <input class="form-control" type="text" name="apellido" id="apellido" required />

            <label class="mt-3" for="direccion"><strong>Dirección:</strong></label>
            <input class="form-control" type="text" name="direccion" id="direccion" required />

            <label class="mt-3" for="telefono"><strong>Teléfono:</strong></label>
            <input class="form-control" type="number" name="telefono" id="telefono" required />

            <input type="hidden" name="form" value="carta">

            <input class="btn btn-primary mt-4" type="submit" value="Enviar" />
        </form>
    </div>
</div>