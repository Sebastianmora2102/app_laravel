<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Russo One&display=swap">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Galeria de Viajes</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/destinos">Destinos Populares</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/playas">Playas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cultura">Cultura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/gastronomia">Gastronomia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/paisajes">Lugares Representativos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
    .background-image {
        background-image: url('/imagenes/fondo1.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        min-height: calc(100vh - 56px);
    }
    .display-4 {
        font-family: 'Russo One', sans-serif; 
        color: #ffffff; 
    }
    </style>

    <div class="background-image">
        <div class="d-flex justify-content-center align-items-center" style="height: 90vh;">
        <h1 class="display-4 text-center">SELECCIONE UNA DE LAS CATEGORÍAS</h1>
        </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>