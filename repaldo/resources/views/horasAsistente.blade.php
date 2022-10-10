<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Universidad Católica de Temuco</title>
        <link rel="icon" href="{{ asset('iconoUCT.png') }}">
        <script src="../js/sweetalert2.all.min.js"></script>

        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

        <style>

            body {
                background-image: url("{{ asset('images/1077409.png') }} ");
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover;
            }

        </style>

    </head>

    <!--Barra de Navegación-->
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="iconoUCT.png" alt="UCT" width="30" height="30">
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
        
    <!--Contenido-->

        <div class = "text-black m-5 justify-content-end">
            <h2>Reserva Horas con Asistentes Sociales</h2><br>
            <a>
                En esta sección podrás realizar una reserva de hora con un/a asistente social donde se realizan las clases de tu carrera. 
                Debes considerar que una reserva debe hacerse con <b>24 horas</b> de antelación (de Lunes a Viernes) y <b>sólo se podrá realizar una reserva cada 15 días</b> a través de este medio. 
                La atención será a través de <b>videollamada</b>, ya que se encuentran <b>suspendidas las atenciones presenciales de forma indefinida</b>.
            </a>
        </div>

        <div class = "ml-auto mr-auto rounded text-center w-auto">
            <p class = "mt-4">
                <a class = "btn btn-light pt-3 pb-3 border-dark w-auto" style = "box-shadow: none; width: 70%;" data-bs-toggle = "collapse" href = "#collapseExample" role = "button" aria-expanded = "false" aria-controls = "collapseExample">
                    Reserva hora
                </a>
            </p>
            <div class = "collapse text-center rounded justify-text-center w-auto" id = "collapseExample" style = "width: 50%;">
                <div class = "card card-body border-dark text-center" style = "background-color: white; align-items: center; justify-content: center;">
                    <label class = "" for = "start">Selecciona el día a reservar dentro de los disponibles</label>
                    <input type = "date" id = "start" name = "trip-start"
                        value = "now"
                        min = "2022-10-01" max = "2022-10-31">
                <div>
                    <a >Seleccione el Asistente:</a>
                    <select class = "form-select text-center mt-3" aria-label = "Default select example">
                        <option selected>Asistente</option>
                        <option value = "1">1</option>
                        <option value = "2">2</option>
                        <option value = "3">3</option>
                    </select>
                </div>
                <br>
                <div>
                    <a >Seleccione alguna de las horas disponibles:</a>
                    <select class = "form-select text-center mt-3" aria-label = "Default select example">
                        <option selected>1</option>
                        <option value = "1">2</option>
                        <option value = "2">3</option>
                        <option value = "3">4</option>
                    </select>
                </div>

                    <a class = "mt-5">
                            Las horas estan <b>sujetas a cambios</b> y a <b>disponibilidad</b> del asistente elegido.
                    </a>
                </div>
                </div>
            </div>
        </div>

    <!-- footer --> 
    
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
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © Portal del Estudiante es un proyecto realizado por la Dirección de Informática UCTemuco.
                Soporte, comentarios, errores reportarlos al correo: soportesistemas@uct.cl.
            </div>
            <!-- Copyright -->
    </footer>

        <script src = "{{ asset('js/app.js') }}" type = "text/js"></script>
</body>
</html>