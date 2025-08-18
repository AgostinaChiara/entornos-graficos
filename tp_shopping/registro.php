<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro - Shopping Rosario</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>

  <?php include 'includes/header.php'; ?>

  <main class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-lg p-4">
          <h2 class="card-title text-center mb-4 fw-bold">Registrarse</h2>
          <form method="POST" action="registro.php">
            <div class="mb-3">
              <label for="nombre" class="form-label fw-semibold">Nombre Completo</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label fw-semibold">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label fw-semibold">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="mb-3">
              <label for="confirm_password" class="form-label fw-semibold">Confirmar Contraseña</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="mb-3">
              <label for="rol" class="form-label fw-semibold">Tipo de Cuenta</label>
              <select class="form-select" id="rol" name="rol" onchange="this.form.submit()">
                <option value="Cliente">Cliente</option>
                <option value="Dueno">Dueño de Local</option>
              </select>
            </div>

            <!-- Si es dueno -->
            <div id="duenoLocalFields">
              <hr>
              <h5 class="mb-3">Datos del Local</h5>
              <div class="mb-3">
                <label for="nombre_local" class="form-label fw-semibold">Nombre del Local</label>
                <input type="text" class="form-control" id="nombre_local" name="nombre_local" required>
              </div>
            </div>

            <div class="d-grid gap-2">
              <button type="submit" class="btn btn-warning btn-lg">Registrarse</button>
            </div>
            <p class="text-center mt-3">¿Ya tienes una cuenta? <a href="">Inicia Sesión aquí</a></p>
          </form>
        </div>
      </div>
    </div>
  </main>

  <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>