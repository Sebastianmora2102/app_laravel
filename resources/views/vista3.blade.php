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
        background-image: url('/imagenes/fondo4.jpg');
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
        <div class="container">
            <br>
            <h2 class="display-4 text-center">Playas</h2>
            <br>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="/imagenes/playa1.jpg" class="card-img-top" alt="Playa 1">
                        <div class="card-body">
                            <h5 class="card-title">Copacabana Beach, Río de Janeiro, Brasil</h5>
                            <p class="card-text">Copacabana Beach es una de las playas más famosas del mundo, ubicada en la ciudad de Río de Janeiro, Brasil. Con su icónica franja de arena blanca, aguas cristalinas y vistas impresionantes, esta playa atrae a turistas de todo el mundo. Es conocida por su animado ambiente, donde se puede disfrutar de música, deportes acuáticos y deliciosos cócteles tropicales en los numerosos bares y quioscos a lo largo de la costa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="/imagenes/playa2.jpg" class="card-img-top" alt="Playa 2">
                        <div class="card-body">
                            <h5 class="card-title">Bondi Beach, Sídney, Australia</h5>
                            <p class="card-text">Bondi Beach es una icónica playa situada en Sídney, Australia. Es conocida por su belleza natural y su ambiente relajado y divertido. Sus aguas turquesas y su extensa franja de arena atraen a surfistas y amantes del sol por igual. En Bondi Beach, se puede disfrutar de clases de surf, hacer un picnic en el césped cercano, o simplemente relajarse en la playa y disfrutar de las impresionantes vistas al océano Pacífico.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="/imagenes/playa3.jpg" class="card-img-top" alt="Playa 3">
                        <div class="card-body">
                            <h5 class="card-title">Waikiki Beach, Hawái, Estados Unidos</h5>
                            <p class="card-text">Waikiki Beach es una playa emblemática ubicada en Honolulu, en la isla de Oahu, Hawái. Con su suave arena dorada y sus olas suaves, es un destino popular tanto para los amantes del surf como para los que buscan tomar el sol. Waikiki Beach está rodeada de hoteles, restaurantes, tiendas y una vibrante vida nocturna, lo que la convierte en una opción ideal para aquellos que buscan combinar la relajación playera con la emoción de una ciudad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="/imagenes/playa4.jpg" class="card-img-top" alt="Playa 4">
                        <div class="card-body">
                            <h5 class="card-title">Anse Lazio, Praslin, Seychelles</h5>
                            <p class="card-text">Anse Lazio es una playa paradisíaca ubicada en la isla de Praslin, en las Seychelles. Con su arena blanca y fina, aguas de color turquesa y exuberante vegetación, esta playa ofrece un entorno idílico y tranquilo. Anse Lazio es perfecta para nadar, bucear o simplemente relajarse bajo la sombra de las palmeras. Es considerada una de las playas más hermosas del archipiélago de las Seychelles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>      
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>