<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rosario Center - Ofertas y Promociones</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

  <?php include 'includes/header.php'; ?>

  <section class="hero-section text-center mb-5 d-flex flex-column align-items-center justify-content-center">
    <h1 class="fw-semibold">Bienvenido a Rosario Center</h1>
    <p class="lead">Descubre las mejores ofertas y promociones de tus locales favoritos.</p>

    <div class="mt-3">
      <a href="#promociones" class="btn btn-warning btn-lg me-2">Ver Promociones</a>
      <a href="registro.php" class="btn btn-light btn-lg">Registrarse</a>
    </div>
  </section>

  <main class="container my-5">
    <section id="promociones" class="promotions-section mb-5">
      <h2 class="text-center mb-4 fs-1 fw-bold">Promociones Destacadas</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Imagen de Promoción">
            <div class="card-body">
              <h5 class="card-title">20% de Descuento en Ropa</h5>
              <p class="card-text">Válido en el local "Moda Total" de lunes a viernes. Para clientes Iniciales y Medium.</p>
              <p class="card-text"><small class="text-muted">Vigente hasta 31/12/2025</small></p>
              <a href="#" class="btn btn-sm btn-info">Ver Detalles</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Imagen de Promoción">
            <div class="card-body">
              <h5 class="card-title">2x1 en Pizzas Grandes</h5>
              <p class="card-text">Disfruta de esta oferta en "Pizzería Delicia" todos los martes. Para todas las categorías de clientes.</p>
              <p class="card-text"><small class="text-muted">Vigente hasta 30/11/2025</small></p>
              <a href="#" class="btn btn-sm btn-info">Ver Detalles</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100 shadow-sm">
            <img src="https://via.placeholder.com/400x250" class="card-img-top" alt="Imagen de Promoción">
            <div class="card-body">
              <h5 class="card-title">50% en la Segunda Unidad</h5>
              <p class="card-text">Aprovecha en "Electrónica Avanzada" en productos seleccionados. Para clientes Premium.</p>
              <p class="card-text"><small class="text-muted">Vigente hasta 15/01/2026</small></p>
              <a href="#" class="btn btn-sm btn-info">Ver Detalles</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="news-section mb-5">
      <h2 class="text-center mb-4">Novedades del Shopping</h2>
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <div class="card shadow-sm">
            <div class="card-body">
              <h5 class="card-title">¡Gran Apertura de Nueva Tienda!</h5>
              <p class="card-text">Descubre la nueva tienda de artículos deportivos "Sport Life" en el segundo piso. ¡Ofertas especiales por inauguración!</p>
              <p class="card-text"><small class="text-muted">Publicado el 10/05/2025</small></p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include 'includes/contact_form.php'; ?>

  <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>