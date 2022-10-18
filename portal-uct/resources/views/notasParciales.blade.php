<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notas Parciales</title>
        <link rel="icon" href="{{ asset('iconoUCT.png') }}">
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans+SC' rel='stylesheet' type='text/css'>
        <script src="../js/sweetalert2.all.min.js"></script>

        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap -->
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="https://www.uct.cl/" target="_blank" rel="noopener noreferrer">
                    <img src="iconoUCT.png" alt="UCT" width="30" height="30">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="https://educa.blackboard.com/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-square-pen"></i> EDUCA BLACKBOARD</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="https://webmail.uct.cl/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-envelope"></i> WEBMAIL</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="https://directorio.uct.cl/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-users"></i> DIRECTORIO</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://secretariageneral.uct.cl/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-lock"></i> INTRANET</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="https://vip.uct.cl/posgrado/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-graduation-cap"></i> POSGRADO</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://tuct.uctemuco.cl/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-id-card"></i> CREDENCIAL</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://admision.uct.cl/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-hand-pointer"></i> ADMISIÓN</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://dge.uct.cl/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-building-columns"></i> DGE</a>
                        </li>
                        

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.uct.cl/calendario-academico/" target="_blank" rel="noopener noreferrer"><i class="fa-regular fa-calendar"></i> CALENDARIO</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="https://www.uct.cl/centro-de-ayuda/" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-address-book"></i> CONTACTO</a>
                        </li>
                    </ul>

                    <div>
                        <a href="https://www.facebook.com/canaluctemuco?ref=hl" class="btn btn-outline-secondary mr-2" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i> </a>
                        <a href="https://twitter.com/UC_Temuco" class="btn btn-outline-secondary" target="_blank" rel="noopener noreferrer"> <i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/uctemuco/?hl=es-la" class="btn btn-outline-secondary" target="_blank" rel="noopener noreferrer"> <i class="fab fa-instagram"></i> </a>
                        <a href="https://www.youtube.com/user/canaluctemuco" class="btn btn-outline-secondary" target="_blank" rel="noopener noreferrer"> <i class="fa-brands fa-youtube"></i> </a>
                        <a href="https://www.flickr.com/photos/uc_temuco/sets/" class="btn btn-outline-secondary" target="_blank" rel="noopener noreferrer"> <i class="fa-brands fa-flickr"></i></a>
                    </div>
                </div>
            </div>
        </nav>   
    
        <section>
            <br>
            <br>
            <br>
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 text-center">
                        <!-- Texto inicial de la paguina -->
                        <h1 class="text-warning" style = "text-align: center;">Solicitud Estudiante</h1>
                        <p>
                            En esta sección encontrarás información académica: 
                            cursos inscritos, cursos aprobados, cursos reprobados, competencias genéricas y créditos de libre disposición.
                        </p>
                    </div>
                </div>
                
                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <strong>Notas Parciales</strong>
                            </button>
                        </h2>
                        
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <div class="text-center">
                                        <p><strong>Información del Estudiante</strong></p>
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="table-primary">
                                                        <tr>
                                                            <th scope="col">RUT</th>
                                                            <th scope="col">NOMBRE</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th>2064351647</th>
                                                            <td>PABLO BENJAMÍN GOMEZ CORTEZ</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <p><strong>Seleccione una Carrera:</strong></p>
                                            
                                        <select class="form-select text-center" aria-label="Default select example">
                                            <option selected><strong>Seleccione una Carrera...</strong></option>
                                            <option value="1">""</option>
                                            <option value="2">""</option>
                                            <option value="3">""</option>
                                        </select>
                                            
                                        <p><strong>Seleccione una Semestre:</strong></p>
                                            
                                        <select class="form-select text-center" aria-label="Default select example">
                                            <option selected><strong>Seleccione una Semestre...</strong></option>
                                            <option value="1">""</option>
                                            <option value="2">""</option>
                                            <option value="3">""</option>
                                        </select>
                                            
                                        <p><strong>Seleccione una Semestre:</strong></p>
                                            
                                        <select class="form-select text-center" aria-label="Default select example">
                                            <option selected><strong>Seleccione una Asignatura...</strong></option>
                                            <option value="1">""</option>
                                            <option value="2">""</option>
                                            <option value="3">""</option>
                                        </select>
                                        
                                        <p><strong>Notas Parciales</strong></p>
                                        
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="table-primary">
                                                        <tr>
                                                            <th scope="col">Descripcion</th>
                                                            <th scope="col">Fecha</th>
                                                            <th scope="col">Porcentaje</th>
                                                            <th scope="col">Nota</th>
                                                            <th scope="col">Tipo de Evaluacion</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th></th>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <!-- segunda opcion  -->
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <strong>Asistencia</strong>
                            </button>
                        </h2>

                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <div class="text-center">
                                        <p><strong>Información del Estudiante</strong></p>
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="table-primary">
                                                        <tr>
                                                            <th scope="col">RUT</th>
                                                            <th scope="col">NOMBRE</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th>2064351647</th>
                                                            <td>PABLO BENJAMÍN GOMEZ CORTEZ</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <p><strong>Seleccione una Carrera:</strong></p>
                                            
                                        <select class="form-select text-center" aria-label="Default select example">
                                            <option selected><strong>Seleccione una Carrera...</strong></option>
                                            <option value="1">""</option>
                                            <option value="2">""</option>
                                            <option value="3">""</option>
                                        </select>
                                            
                                        <p><strong>Seleccione una Semestre:</strong></p>
                                            
                                        <select class="form-select text-center" aria-label="Default select example">
                                            <option selected><strong>Seleccione una Semestre...</strong></option>
                                            <option value="1">""</option>
                                            <option value="2">""</option>
                                            <option value="3">""</option>
                                        </select>
                                            
                                        <p><strong>Seleccione una Semestre:</strong></p>
                                            
                                        <select class="form-select text-center" aria-label="Default select example">
                                            <option selected><strong>Seleccione una Asignatura...</strong></option>
                                            <option value="1">""</option>
                                            <option value="2">""</option>
                                            <option value="3">""</option>
                                        </select>
                                
                                        <div class="text-center">
                                            <p><strong>Asistencias</strong></p>                                  
                                            <div class="accordion-body">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="table-primary">
                                                            <tr>
                                                                <th scope="col">N° Clase</th>
                                                                <th scope="col">Fecha</th>
                                                                <th scope="col">Hora de Inicio</th>
                                                                <th scope="col">Asistencia</th>
                                                            </tr>
                                                        </thead>
                                                    
                                                        <tbody>
                                                            <tr>
                                                                <th>""</th>
                                                                <td> ""</td>
                                                                <td>""</td>
                                                                <td>""</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        


        <iframe
            class="fixed-bottom"
            allow="microphone;"
            width="250"
            height="330"
            src="https://console.dialogflow.com/api-client/demo/embedded/b875564b-5f9c-4e8f-b29a-fb703dc50376">
        </iframe>


        
        <!-- Pie de página -->
        <footer class="bg-dark text-muted">           
            <div class="pt-5 pb-5 footer">
                <div class="container">
                    <div class="row">       
                        <div class="col-sm-3">
                            <p class="footer-widget text-black-50">
                                <h4>CAMPUS SAN FRANCISCO</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Manuel Montt 56
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 205 470
                                    </li>
                                </ul>
                            </p>

                            <p class="pr-5 text-black-50">
                                <h4>CAMPUS SAN JUAN PABLO II</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Rudecindo Ortega 02950
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 553 978
                                    </li>
                                </ul>
                            </p>
                        </div>

                        <div class="col-sm-3">
                            <p class="footer-widget text-black-50">
                                <h4>CAMPUS MENCHACA LIRA</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Avenida Alemania 0422
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 203 822
                                    </li>
                                </ul>
                            </p>

                            <p class="pr-5 text-black-50">
                                <h4>CAMPUS LUIS RIVAS DEL CANTO</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Callejón Las Mariposas s/n
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 205 596
                                    </li>
                                </ul>
                            </p>
                        </div>

                        <div class="col-sm-3">
                            <p class="footer-widget text-black-50">
                                <h4>PRENSA INSTITUCIONAL</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Avenida Alemania 0211
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 205 428
                                    </li>
                                </ul>
                            </p>

                            <p class="pr-5 text-black-50">
                                <h4>BIENESTAR ESTUDIANTIL</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Manuel Montt 56
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 205 424
                                    </li>
                                </ul>
                            </p>
                        </div>

                        <div class="col-sm-3">
                            <p class="footer-widget text-black-50">
                                <h4>AULA MAGNA</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Manuel Montt 56
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 205 471
                                    </li>
                                </ul>
                            </p>

                            <p class="pr-5 text-black-50">
                                <h4>MESA CENTRAL</h4>
                                <ul>
                                    <li>
                                        <i class="fa-solid fa-location-dot"></i> Prieto Norte 371
                                    </li>

                                    <li>
                                        <i class="fa fa-phone mr-3"></i> +56 45 2 205 205
                                    </li>
                                </ul>
                            </p>
                        </div>                 
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="text-center p-4">
                © Portal del Estudiante es un proyecto realizado por la Dirección de Informática UCTemuco.
                Soporte, comentarios, errores reportarlos al correo: soportesistemas@uct.cl.
            </div>
            <!-- Copyright -->
        </footer>
    
</body>
</html>