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
                background-image: url("1077409.png");
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
                        <h1 class="text-warning" style = "text-align: center;">Documentos</h1>
                        <div class="card border-primary mb-3 text-center">
                            <div class="card-body">
                                <p class="card-body text-primary">
                                    Estimados/as estudiantes, La Vicerrectoría Académica a través de la Dirección de Admisión y 
                                    Registros Académicos en conjunto con la Dirección de Informática, tiene el agrado de comunicarles 
                                    que contamos con un nuevo servicio de Firma Electrónica Avanzada, el cual permitirá brindarles 
                                    una mejor atención y disminuir los tiempos de espera en lo que se requiere a solicitudes de certificados.
                                </p>
                                <a class="btn btn-primary" href="https://estudiantes.uct.cl/certificados_firmas_digitales/documentos/Firma_Electronica_Avanzada_DARA.pdf" role="button">Leer más...</a>
                            </div>
                        </div>
                        <!-- Instrucciones y aclaraciones sobre los documentos -->
                        <div class="card border-danger mb-3">
                            <div class="card-body text-danger">
                                <p class="card-text">
                                    * Para imprimir los documentos se recomienda abrir con Adobe Acrobat Reader, ademas
                                    debe habilitar la opción de ventanas emergentes de su navegador. *
                                </p>
                            </div>
                        </div>
                        <br>
                        <!-- Opcione de seleccionar carrera y semestre -->
                        <div class="card border-white">
                            <div class="card-header bg-primary text-white"><strong>Carrera</strong></div>
                            <div class="card-body">
                                <div class="text-start">
                                    <p><strong>Seleccione una Carrera:</strong></p>
                                    <p class="card-text">
                                        <select class="form-select text-center" aria-label="Default select example">
                                            <option selected><strong>Seleccione una Carrera...</strong></option>
                                            <option value="1">154 - Plan: 1 : INGENIERIA CIVIL EN INFORMATICA</option>
                                            <option value="2">154 - Plan: 2 : INGENIERIA CIVIL EN INFORMATICA</option>
                                            <option value="3">154 - Plan: 3 : INGENIERIA CIVIL EN INFORMATICA</option>
                                        </select>
                                    </p>
                                    <p><strong>Seleccione Semestre:</strong></p>
                                    <select class="form-select text-center" aria-label="Default select example" disabled> <!-- etiqueta Disable que desabilita la opcion de seleccionar una opcion (ya que ensi el semestre es seleccionado de forma automatica seguna la carrera) -->
                                        <option selected><strong>Seleccione el semestre...</strong></option>
                                        <option value="1">SEGUNDO /2022</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Certificados -->
                        <div class="card border-white">
                            <div class="card-header bg-primary text-white"><strong>CERTIFICADOS</strong></div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">C.Estudiante Regular</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">C.Académico</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">C.Conducta</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">C.Permanencia</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <!-- Certificado Estudiante Regular -->
                                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                                        <div class="card border-white">
                                            <div class="card-header bg-primary text-white"><strong>Certificado Estudiante Regular</strong></div>
                                            <div class="card-body">
                                                <div class="text-start">
                                                    <p><strong>Puedes seleccionar los fines para el que deseas el certificado:</strong></p>
                                                    <p class="card-text">
                                                        <select class="form-select text-center" aria-label="Default select example">
                                                            <option selected><strong>Fines:</strong></option>
                                                            <option value="1">BENEFICIOS ESTUDIANTILES Y ASIGNACION FAMILIAR</option>
                                                            <option value="2">PARA LOS FINES QUE ESTIME CONVENIENTE</option>
                                                            <option value="3">SEGURO ESCOLAR</option>
                                                        </select>
                                                    </p>
                                                </div>
                                                <br>
                                                <a class="btn btn-primary" href="" role="button">Generar Certificado</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Certificado Académico -->
                                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                                        <div class="card border-white">
                                            <div class="card-header bg-primary text-white"><strong>Certificado Académico</strong></div>
                                            <div class="card-body">
                                                <div class="text-start">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            Historia Académica
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            Notas Periodo
                                                        </label>
                                                    </div>
                                                    <p><strong>Estado de los Cursos:</strong></p>
                                                    <p class="card-text">
                                                        <select class="form-select text-center" aria-label="Default select example">
                                                            <option selected><strong>Seleccione..</strong></option>
                                                            <option value="1">APROBADOS</option>
                                                            <option value="2">TODOS LOS CURSOS</option>
                                                            <option value="3">TODOS LOS CURSOS(SOLO CON NOTA)</option>
                                                        </select>
                                                    </p>
                                                    <br>
                                                    <a class="btn btn-primary" href="#" role="button">Descargar Certificado Academico</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Certificado conducta -->
                                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                                        <div class="card border-white">
                                            <div class="card-header bg-primary text-white"><strong>Certificado de Conducta</strong></div>
                                            <div class="card-body">
                                                <div class="text-start">
                                                    <p>
                                                        <strong>Sanciones:</strong>
                                                        Durante su permanencia el(la) estudiante no tuvo sanciones disciplinarias por contravención al 
                                                        Reglamento de Investigaciones Sumarias y Sumarios que instruyen a los Estudiantes de la Universidad 
                                                        Católica de Temuco.
                                                    </p>
                                                    <p>
                                                        <strong>Observación:</strong>
                                                        Sin Observaciones
                                                    </p>
                                                </div>
                                                <a class="btn btn-primary" href="#" role="button">Descargar Certificado de Conducta</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Certificado permanencia -->
                                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                                        <div class="card border-white">
                                            <div class="card-header bg-primary text-white"><strong>Certificado de Permanencia</strong></div>
                                            <div class="card-body">
                                                <p>
                                                    Durante su permanencia el(la) estudiante no tuvo impedimentos académicos ni sanciones 
                                                    disciplinarias por contravenir el Reglamento del Alumno Regular de la Universidad.
                                                </p>
                                                <a class="btn btn-primary" href="#" role="button">Descargar Certificado de Permanencia</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Convenio de prestación de servicios -->
                        <div class="card border-white">
                            <div class="card-header bg-primary text-white"><strong>Convenio de prestación de servicios</strong></div>
                            <div class="card-body">
                                <p><strong>Descargar convenio prestación de servicios</strong></p>
                                <a class="btn btn-primary" href="#" role="button">Descargar Convenio</a>
                            </div>
                        </div>
                        <br>
                        <!-- Formulario de Apelación para Causal de Eliminación -->
                        <div class="card border-white">
                            <div class="card-header bg-primary text-white"><strong>Formulario de Apelación para Causal de Eliminación</strong></div>
                            <div class="card-body">
                                <p>El formulario debe ser completado y entregado impreso en tu carrera.</p>
                                <a class="btn btn-primary" href="https://estudiantes.uct.cl/certificados_firmas_digitales/documentos/formulario_apelacion.pdf" role="button">Descargar Convenio</a>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
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