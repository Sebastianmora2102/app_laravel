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
                        <a class="nav-link" href="/paisajes">Paisaje Naturales</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <style>
    .background-image {
        background-image: url('/imagenes/fondo5.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        min-height: calc(100vh - 56px);
    }
    .display-4{
        font-family: 'Russo One', sans-serif; 
        color: #ffffff; 
    }
    </style>

    <div class="background-image">
        <div class="container text-center">
            <br>
            <h2 class="display-4 text-center">Destinos populares</h2>
            <br>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="/imagenes/barcelona.jpg" class="card-img-top" alt="Destino 1">
                        <div class="card-body">
                            <h5 class="card-title">BARCELONA</h5>
                            <p class="card-text">Barcelona es una ciudad vibrante ubicada en la costa noreste de España. Es conocida por su arquitectura impresionante, playas soleadas y animada vida nocturna. Entre los puntos de interés se encuentra la famosa iglesia inacabada de la Sagrada Familia diseñada por Antoni Gaudí, el histórico Barrio Gótico con sus estrechas calles medievales, y el animado paseo marítimo de Las Ramblas. Barcelona también es reconocida por su deliciosa gastronomía, con platos tradicionales como la paella y tapas abundantes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="/imagenes/paris.jpg" class="card-img-top" alt="Destino 2">
                        <div class="card-body">
                            <h5 class="card-title">PARIS</h5>
                            <p class="card-text">París, la capital de Francia, es conocida como la Ciudad de la Luz y es uno de los destinos más románticos del mundo. La ciudad está repleta de famosos monumentos, como la icónica Torre Eiffel, la majestuosa Catedral de Notre-Dame y el imponente Museo del Louvre, que alberga obras maestras como la Mona Lisa. París también ofrece encantadores paseos por el río Sena, hermosos jardines como los de Versalles y una exquisita gastronomía que incluye croissants, baguettes, quesos y vinos. Sumérgete en la historia, la cultura y el ambiente romántico de París.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-4">
                    <div class="card">
                        <img src="/imagenes/ny.jpg" class="card-img-top" alt="Destino 3">
                        <div class="card-body">
                            <h5 class="card-title">NEW YORK</h5>
                            <p class="card-text">Nueva York, la ciudad que nunca duerme, es un destino lleno de energía y diversidad. Conocida como la Gran Manzana, es famosa por sus rascacielos imponentes, como el Empire State Building y el One World Trade Center, y sus emblemáticos lugares como Times Square y Central Park. Nueva York es un centro cultural y artístico, con museos de renombre mundial como el Museo Metropolitano de Arte y el Museo de Arte Moderno (MoMA). Además, la ciudad ofrece una gran variedad de opciones gastronómicas, desde puestos callejeros de comida hasta elegantes restaurantes. Disfruta del ambiente único y la energía inigualable de Nueva York.</p>
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