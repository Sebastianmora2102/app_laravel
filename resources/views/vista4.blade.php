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
        background-image: url('/imagenes/fondo2.jpg');
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
            <h2 class="display-4 text-center">Cultura</h2>
            <br>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Barcelona</h5>
                            <p class="card-text">Barcelona es una ciudad vibrante y cosmopolita que rebosa de cultura en cada esquina. Con una rica historia que se remonta a siglos atrás, la ciudad es conocida por su arquitectura icónica, especialmente los diseños modernistas de Antoni Gaudí, como la Sagrada Familia y el Parque Güell. El Barrio Gótico, con sus estrechas calles empedradas y antiguas iglesias, es un testimonio vivo del pasado medieval de Barcelona.
                            La cultura de Barcelona también se manifiesta en su pasión por el arte, la música y la gastronomía. La ciudad alberga una gran cantidad de museos, galerías de arte y espacios culturales, donde los visitantes pueden sumergirse en la escena artística contemporánea y admirar obras maestras de renombrados artistas catalanes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Paris</h5>
                            <p class="card-text">París es conocida como la "Ciudad de la Luz" y es considerada uno de los centros culturales más importantes del mundo. La ciudad alberga algunos de los museos más famosos, como el Louvre, que alberga la Mona Lisa y otras obras maestras de la historia del arte. También cuenta con el impresionante Centro Pompidou, dedicado al arte moderno y contemporáneo.
                            La cultura parisina se encuentra en cada rincón de la ciudad, desde sus elegantes avenidas hasta sus encantadores cafés. La moda desempeña un papel importante en la cultura parisina, con reconocidos diseñadores y casas de moda que definen las tendencias internacionales.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Nueva York</h5>
                            <p class="card-text">Nueva York es una ciudad que nunca duerme y es un crisol de culturas. La ciudad acoge a una amplia diversidad de comunidades, lo que se refleja en su vibrante escena cultural. Broadway, en el corazón de Nueva York, es conocido por sus producciones teatrales de clase mundial, con musicales y obras que atraen a audiencias de todo el mundo.
                            La ciudad también alberga una gran cantidad de museos y galerías de arte, como el MoMA y el Metropolitan Museum of Art, donde se exhiben obras de artistas famosos y emergentes. Además, eventos culturales como el Desfile del Día de Acción de Gracias, el Festival del Jazz de Nueva York y el Carnaval de Coney Island son solo algunas de las muchas experiencias culturales que ofrece la ciudad.</p>
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