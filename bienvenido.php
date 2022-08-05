<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="diseño.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>bienvenido</title>
</head>
<body>
    <header class="head"><img class="ihead" src="imagenes/Logo.png"></header>
    <header class="head2" align="right"><a href="index.php">Cerrar Sesión</a></header>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
      </div>

      <div class="carousel-inner">
        <div class="carousel-item active">
        <center>
          <img src="imagenes/1.jpg" class="d-block w-80" height="350px">
        </center>
        </div>
        <div class="carousel-item">
        <center>
          <img src="imagenes/2.jpg" class="d-block w-80" height="350px" >
        </center>
        </div>
        <div class="carousel-item">
        <center>
          <img src="imagenes/3.jpg" class="d-block w-80" height="350px">
        </center>
        </div>
        <div class="carousel-item">
          <center>
            <img src="imagenes/4.png" class="d-block w-80" height="350px" >
          </center>
          </div>
          <div class="carousel-item">
          <center>
            <img src="imagenes/5.png" class="d-block w-80" height="350px" >
          </center>
          </div>
      </div>

      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

     <nav class="navbar navbar-expand-lg navbar-light bg-light">

        <table width="100%" align="center">
        <td align="center" width="30%"><h2><a href="Pys.php">Productos</a></h2></td>
        <td align="center"><h2><a href="#">Tiendas</a></h2></td>
        <td align="center" width="30%"><h3><a href="#">Contactanos</a></h3></td>
        </table>
     </nav>
      
     <table align="center" width="100%">
       <tr>
        <tr colspan= "2">
          <img src="imagenes/comida1.jpg">
        </tr>
        <td>
        <img src="imagenes/comida2.jpeg">
        </td>
        <td colspan= "2">
          <img src="imagenes/comida3.png">
        </td>
       </tr>
     </table>
     <footer class="pat">PVX: XXX-XXX   Carnet:2018-40120    Nombre:Irving Alexander Córdova Alarcón </footer>
</body>
</html>