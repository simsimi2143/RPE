<!DOCTYPE html>
<html lang="es-cl">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Universidad Católica de Temuco</title>
        <link rel="icon" href="{{ asset('iconoUCT.png') }}">
        <link href='https://fonts.googleapis.com/css?family=Noto+Sans+SC' rel='stylesheet' type='text/css'>
        <script src="../js/sweetalert2.all.min.js"></script>

        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        
        <!-- Fondo del body de la paguina -->
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

        <!-- Funciones generales -->
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
                        En esta sección encontrarás el formulario mediante el cual puedes hacer una solicitud de Reincorporación, Suspensión o Renuncia. 
                        Además puedes consultar el estado en que se encuentra tu solicitud.

                        Para visualizar el contenido solo debes hacer click sobre el Título de tu interés el cual desplegará el contenido deseado.
                        </p>
                        <br>
                        <!-- Proceso de suspensión Beneficios de arancel MINEDUC 2022 -->
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Proceso de suspensión Beneficios de arancel MINEDUC 2022</h4>
                            <hr>
                            <div class="text-start">
                                <p>Estimados Estudiantes:</p>
                                <p>Junto con saludar, informamos que desde el 02 de Agosto hasta el 29 de Septiembre se encuentra habilitado el proceso de suspensión de Beneficios Estudiantiles MINEDUC.</p>
                                <p>Si realizaste suspensión o renuncia académica y cuentas con Gratuidad, Beca de arancel o Fondo Solidario de Crédito Universitario (FSCU) debes ingresar al siguiente link <a href="https://forms.gle/LyZ3ZygrS3TEAQjG8">https://forms.gle/LyZ3ZygrS3TEAQjG8</a> y completar el formulario online para solicitar la suspensión de tu beneficio, al que podrás ingresar solo a través de tu correo electrónico institucional.</p>
                                <p>Descarga <a href="https://estudiantes.uct.cl/documentos/INSTRUCTIVO_SUSPENSJON_BENEFICIOS_ESTUDIANTES.pdf">AQUÍ</a> el instructivo del proceso de suspensión de Beneficios Estudiantes.</p>
                                <p><h5>Respecto a la carga de documentos en formato PDF, debes considerar lo siguiente:</h5></p>
                                <p><strong>1. Formulario suspensiones:</strong> Solo lo debes cargar en caso de contar con Beca de arancel. Se exime de esta obligación a los estudiantes que tengan Gratuidad.</p>
                                <p><strong>2. Documento de respaldo para acreditar motivo de suspensión:</strong> Solo lo debes cargar en caso de contar con Gratuidad o Becas de arancel, toda vez que las suspensiones totales desde el año de asignación del beneficio a la fecha (incluyendo solicitud actual) sean superiores a 02 semestres académicos. Se exime de esta obligación a los estudiantes que tengan FSCU.</p>
                            </div>
                            <p><strong>*EL PROCESO DE SUSPENSIÓN ES DE EXCLUSIVA RESPONSABILIDAD DEL ESTUDIANTE*</strong></p>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                <strong>Ingresar Solicitud</strong>
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <!-- Tabla datos alupno -->
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">Rut</th>
                                                <th scope="col">Nombre del alumno</th>
                                                <th scope="col">Celular</th>
                                                <th scope="col">E-Mail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>21080232-2</th>
                                                <td>Pablo Javier Gomez Quidel</td>
                                                <td>+56953699462</td>
                                                <td>Pgomez2021@uct.cl</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <select class="form-select text-center" aria-label="Default select example">
                                <option selected><strong>Seleccione una Carrera...</strong></option>
                                <option value="1">154 - Plan: 1 : INGENIERIA CIVIL EN INFORMATICA</option>
                                <option value="2">154 - Plan: 2 : INGENIERIA CIVIL EN INFORMATICA</option>
                                <option value="3">154 - Plan: 3 : INGENIERIA CIVIL EN INFORMATICA</option>
                            </select>
                            <div class="accordion-body">
                                <table class="table">
                                    <thead class="table-primary">
                                        <tr>
                                            <th scope="col">Beneficios</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>GRATUIDAD MATRICULA MINEDUC</td>
                                        </tr>
                                        <tr>
                                            <td>GRATUIDAD ARANCEL MINEDUC</td>
                                        </tr>
                                        <tr>
                                            <td>BRECHA GRATUIDAD ARANCEL UCT</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">Registro</th>
                                                <th scope="col">Año Ingreso	</th>
                                                <th scope="col">Carrera</th>
                                                <th scope="col">Situación</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>2064351647</th>
                                                <td>2021</td>
                                                <td>INGENIERÍA CIVIL EN INFORMÁTICA</td>
                                                <td>REGULAR</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <p>
                                Formulario ingreso solicitud
                                <select class="form-select text-center" aria-label="Default select example">
                                    <option selected><strong>Tipo de solicitud..</strong></option>
                                    <option value="1">RENUNCIA</option>
                                    <option value="1">SUSPENCION</option>
                                </select>
                            </p>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                <strong>Resultados de la Solicitud</strong>
                            </button>
                        </h2>

                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="text-start">
                                    <p><strong>Ingrese una carrera para consultar el estado de su solicitud:</strong></p>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected><strong>Seleccione la carrera</strong></option>
                                        <option value="1">154 - Plan: 1 : INGENIERIA CIVIL EN INFORMATICA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="table-primary">
                                            <tr>
                                                <th scope="col">Código Solicitud</th>
                                                <th scope="col">Fecha Solicitud</th>
                                                <th scope="col">Tipo Solicitud</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Observación</th>
                                                <th scope="col">Comprobante</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br>            
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