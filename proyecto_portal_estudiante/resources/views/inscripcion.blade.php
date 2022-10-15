<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcion de ramos</title>
    <link rel="icon" href="{{ asset('uct.jpg') }}">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="uct.jpg" alt="UCT" width="30" height="30">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://educa.blackboard.com/"><i class="fa-solid fa-square-pen"></i> EDUCA BLACKBOARD</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="https://webmail.uct.cl/"><i class="fa-solid fa-envelope"></i> WEBMAIL</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="https://directorio.uct.cl/"><i class="fa-solid fa-users"></i> DIRECTORIO</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="https://vip.uct.cl/posgrado/"><i class="fa-solid fa-graduation-cap"></i> POSTGRADO</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://admision.uct.cl/"><i class="fa-solid fa-hand-pointer"></i> ADMISIÓN</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://dge.uct.cl/"><i class="fa-solid fa-building-columns"></i> DGE</a>
                        </li>
                        

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.uct.cl/calendario-academico/"><i class="fa-regular fa-calendar"></i> CALENDARIO</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.uct.cl/centro-de-ayuda/"><i class="fa-solid fa-address-book"></i> CONTACTO</a>
                        </li>
                    </ul>

                    <div>
                        <a href="https://www.facebook.com/canaluctemuco?ref=hl" class="btn btn-outline-secondary mr-2"><i class="fab fa-facebook-f"></i> </a>
                        <a href="https://twitter.com/UC_Temuco" class="btn btn-outline-secondary"> <i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/uctemuco/?hl=es-la" class="btn btn-outline-secondary"> <i class="fab fa-instagram"></i> </a>
                        <a href="https://www.youtube.com/user/canaluctemuco" class="btn btn-outline-secondary"> <i class="fa-brands fa-youtube"></i> </a>
                        <a href="https://www.flickr.com/photos/uc_temuco/sets/" class="btn btn-outline-secondary"> <i class="fa-brands fa-flickr"></i></a>
                    </div>

                </div>
            </div>
        </nav>
        <br>
    <h2 class="text-center">Inscripcion de ramos</h2>
    <br>
    
    <br>
    <div class="d-flex justify-content-center">
    <div class="accordion accordion-flush col-6" id="accordionFlushExample">
  <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Ramos de carrera
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
        <h3 class="text-center">Ramos de carrera disponibles</h3>
        <!-- Aquí se pondrian checkboxs para enviar formulario de ramos a inscribir-->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Programacion 1
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Administracion de Bases de Datos
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Programacion de robot
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Tópicos de matematicas para la programacion
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Física
            </label>
        </div>
                
        </div>
        </div>
        </div>
        </div>
        </div>
</div>




<br>
    <div class="d-flex justify-content-center">
    <div class="accordion accordion-flush col-6" id="accordionFlushExample">
  <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                DDO
            </button>
            </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        
        <h3 class="text-center">Ramos DDO</h3>
        <!-- Aquí se pondrian checkboxs para enviar formulario de ramos a inscribir-->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Ajedrez
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Ambientalismo
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Cine chileno
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Sexualidad
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Vida Saludable
            </label>
        </div>
                
        </div>
    </div>
    </div>
    
    <br>
   
    </div>
    </div>
</div>

    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-success">Inscribir</button>
    </div>
    <br>
    <div class="d-flex justify-content-center">
    <div class="accordion accordion-flush col-6" id="accordionFlushExample">
  <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                Ramos inscritos
            </button>
            </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
      <div class="accordion-body">
        
        <h3 class="text-center">Ramos inscritos</h3>
        <!-- Aquí se pondrian checkboxs para enviar formulario de ramos a inscribir-->
        -Ramo de prueba  <button type="button" class="btn btn-outline-danger btn-sm"><i class="fa-sharp fa-solid fa-delete-left"></i></button>
        <div class="d-flex justify-content-center">

            
        </div>
        </div>
    </div>
    </div>
    
    <br>
   
    </div>
    </div>
</div>
</body>