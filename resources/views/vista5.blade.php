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
        background-image: url('/imagenes/fondo3.jpg');
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
                <h2 class="display-4 text-center">Gastronomia</h2>
                <br>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Barcelona</h5>
                                <p class="card-text">La gastronomía de Barcelona es una delicia para los amantes de la buena comida. La ciudad ofrece una amplia variedad de platos y sabores que reflejan la rica cultura culinaria de Cataluña. La cocina catalana combina ingredientes frescos y de alta calidad con técnicas tradicionales y modernas.
                                En Barcelona, puedes disfrutar de deliciosas tapas, como las famosas patatas bravas, las croquetas caseras y las aceitunas rellenas. Otro plato emblemático es la paella, un arroz sabroso y lleno de mariscos frescos y carnes tiernas. Además, no puedes dejar de probar los platos a base de pescado y marisco, como la fideuá (un plato similar a la paella pero hecho con fideos) y el suquet de peix (un guiso de pescado).
                                La ciudad también es famosa por sus postres, como la crema catalana, similar a la crème brûlée, y el panellet, un dulce tradicional hecho a base de almendras y azúcar. No olvides acompañar tus comidas con una copa de cava, el vino espumoso típico de la región.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Paris</h5>
                                <p class="card-text">La gastronomía parisina es reconocida mundialmente por su refinamiento y exquisitez. La ciudad alberga una amplia variedad de restaurantes, desde los elegantes y sofisticados hasta los acogedores bistros de barrio. Los parisinos se enorgullecen de su cocina tradicional y de la calidad de sus ingredientes.
                                Uno de los platos más emblemáticos de París es el croissant, un hojaldre de mantequilla y forma característica que se puede disfrutar tanto en el desayuno como en una pausa durante el día. Otros platos famosos incluyen el coq au vin (pollo guisado en vino tinto), el boeuf bourguignon (estofado de ternera con vino tinto) y el ratatouille (un guiso de verduras típico de la región de Provenza).
                                La pastelería francesa es famosa en todo el mundo, y en París puedes disfrutar de una amplia selección de deliciosos postres, como los eclairs, los macarons, los profiteroles y las tartaletas de frutas frescas. Además, no puedes dejar de probar los quesos franceses, como el camembert, el brie y el roquefort, acompañados de una baguette recién horneada.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Nueva York</h5>
                                <p class="card-text">La gastronomía de Nueva York es un reflejo de la diversidad cultural de la ciudad. Aquí puedes encontrar una amplia variedad de opciones culinarias que van desde la comida callejera hasta los restaurantes de alta cocina. La ciudad es conocida por su ambiente informal y su enfoque en sabores audaces y combinaciones innovadoras.
                                En Nueva York, puedes disfrutar de una auténtica pizza en uno de los icónicos puestos de pizza de la ciudad. Además, los famosos bagels de Nueva York, suaves por dentro y ligeramente crujientes por fuera, son un imprescindible. La hamburguesa también</p>
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