<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notas Parciales</title>
    <link rel="icon" href="{{ asset('uct.jpg') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- Styles -->
    <style>
        body {
            background-image: url("{{ asset('1077409.png') }} ");
            background-attachment: fixed;
            background-repeat: no-repeat;
            background-size: cover; 
        }
    </style>
</head>
<body>
<nav class = "navbar navbar-dark bg-dark">
            <img href = "#" src = "Universidad_Catolica_de_Temuco_Logo_Vertical.png" alt = "" width = "130" height = "45" aria-controls = "sidebar">
            <div>
                <a href = "https://www.facebook.com/canaluctemuco/%22%3E"> <img href = "#" src = "{{ asset('fb.png') }}" class = "nav-r2" width = "32"></a>
                <a href = "https://www.instagram.com/uctemuco/?hl=es-la%22%3"> <img href = "#" src = "{{ asset('ig.png') }}" class = "nav-r2" width = "32"></a>
                <a href = "ruta"><img href = "#" src = "{{ asset('logout.png') }}" class = "nav-r2 ml-4" width = "34"></a>
            </div>
</nav>
    <br>
    <h2 class="text-center">Notas Parciales</h2>
    <br>
    <h6 class="text-center">En esta sección encontrarás las notas parciales y los porcentajes de asistencia de las carreras.</h6>
    <br>
    <div class="d-flex justify-content-center">
    <div class="accordion accordion-flush col-6" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Notas Parciales
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        <h3 class="text-center">Información del Estudiante</h3>
      <div class="table-responsive">
        <table class="table">
            <thead class=" table-dark">
                <tr>
                <th scope="col">Rut</th>
                <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody class="table-primary">
                <tr>
                    <th scope="row">12.123.456-k</th>
                    <td>Mark</td>
                </tr>
                
               
            </tbody>
        </table>
    </div>
    </div>
    <h6>Seleccione carrera:</h6>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <br>
    <h6>Seleccione Semestres:</h6>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <br>
    <h6> Seleccione una Asignatura:</h6>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <br>
    <h3 class="text-center">Notas Parciales</h3>
    <div class="table-responsive">
        <table class="table">
            <thead class=" table-dark">
                <tr>
                <th scope="col">Descripcion</th>
                <th scope="col">Fecha</th>
                <th scope="col">Porcentaje</th>
                <th scope="col">Nota</th>
                <th scope="col">Tipo de Evaluacion</th>
                </tr>
            </thead>
            <tbody class="table-primary">
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                </tr>
                
               
            </tbody>
        </table>
    </div>
    </div>
  </div>
  <br>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Asistencias
      </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
      <h3 class="text-center">Información del Estudiante</h3>
      <div class="table-responsive">
        <table class="table">
            <thead class=" table-dark">
                <tr>
                <th scope="col">Rut</th>
                <th scope="col">Nombre</th>
                </tr>
            </thead>
            <tbody class="table-primary">
                <tr>
                    <th scope="row">12.123.456-k</th>
                    <td>Mark</td>
                </tr>
                
               
            </tbody>
        </table>
    </div>
    </div>
    <h6>Seleccione carrera:</h6>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <br>
    <h6>Seleccione Semestres:</h6>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <br>
    <h6> Seleccione una Asignatura:</h6>
    <select class="form-select" aria-label="Default select example">
        <option selected>Open this select menu</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
    </select>
    <br>
    <h3 class="text-center">Asistencias</h3>
    <div class="table-responsive">
        <table class="table">
            <thead class=" table-dark">
                <tr>
                <th scope="col">N° Clase</th>
                <th scope="col">Fecha</th>
                <th scope="col">Hora Inicio</th>
                <th scope="col">Asistencia</th>
                </tr>
            </thead>
            <tbody class="table-primary">
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>

                </tr>
                
               
            </tbody>
        </table>
      </div>
    </div>
  </div>
    </div>
    
</body>
</html>