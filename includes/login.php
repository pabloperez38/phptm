<div class="row">

    <h1>Login</h1>

    <div class="col-md-4 mt-5">
        <form name="form" method="post" action="recibe.php">

            <label class="mt-3" for="email"><strong>Usuario:</strong></label>
            <input class="form-control" type="text" name="usuario" id="usuario" required />

            <label class="mt-3" for="password"><strong>Contraseña:</strong></label>
            <input class="form-control" type="password" name="password" id="password" required />

            <label class="mt-3" for="pin"><strong>Pin:</strong></label>
            <input class="form-control" type="text" name="pin" id="pin" required />

            <input type="hidden" name="form" value="login">

            <input class="btn btn-primary mt-4" type="submit" value="Ingresar" />
        </form>
    </div>
</div>