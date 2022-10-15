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
        
        <style>
            body {
                background-image: url("{{ asset('1077409.png') }} ");
                background-repeat: no-repeat;
            }

            h3{
                font-family: 'Noto Sans SC', sans-serif;
                font-weight: bold;
            }

            .run{
                display: flex;
            }

            .guion{
                font-family: 'Roboto', sans-serif;
                font-weight: bold;
                font-size: 150%;
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
            <h3 class="text-center text-white">Iniciar sesión</h3>
            
            <article class="container">
                <form action="{{route('inicio')}}" method="POST" class="form-inline row justify-content-center g-3" name="frm1" onload="setValue()">
                    <div class="form-floating col-lg-3 run">
                        <input value="@if(Session::has('rut_nro')){{ Session::get('rut_nro')}}@endif" class="form-control input-sm" id="floatingInput" onpaste="return false;" ondrop="return false;" inputmode="numeric" onkeypress='validate(event)' class="form-control form-control-lg" size=8 minlength="7" maxlength="8" type="text" pattern="[0-9]+" name="rut" id="rut" placeholder="N° RUN" oninput="checkRut()">
                        <label for="floatingInput">RUN</label>

                        <div class="text-white text-center guion col-1">-</div>
                            
                        <div class="form-floating dv">
                            <input value="@if(Session::has('dv_nro')){{ Session::get('dv_nro') }}@endif" onpaste="return false;" ondrop="return false;" class="form-control input-sm" size=2 minlength="1" maxlength="1" type="text" name="dv" id="dv" placeholder="dv" oninput="checkRut()" onkeyup="this.value = this.value.toUpperCase();" >
                        </div>
                    </div>
                    
                    <div class="form-floating col-lg-3">
                        <input value="@if(Session::has('contra')){{ Session::get('contra')}}@endif" type="password" class="form-control input-sm" id="floatingPassword" onpaste="return false;" ondrop="return false;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Contraseña" required>
                        <label for="floatingPassword">Contraseña</label>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success mb-3">Ingresar <i class="fa-solid fa-right-to-bracket"></i></button> 
                        <a href="cambiar" type="submit" class="btn btn-secondary mb-3" target="_blank" rel="noopener noreferrer">Cambiar contraseña</a>
                        <a href="recuperar" type="submit" class="btn btn-secondary mb-3" target="_blank" rel="noopener noreferrer">Recuperar contraseña</a>
                    </div>
                </form>
            </article>

            <aside> <!-- Apartado para la publicidad de la Universidad-->
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
  
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="31.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Campus San Juan Pablo II</h5>
                                <p>Vista a la entrada del edificio cincuentenario.</p>
                            </div>
                        </div>
    
                        <div class="carousel-item">
                            <img src="4.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Campus San Francisco</h5>
                                <p>Vista a la entrada principal del campus.</p>
                            </div>                           
                        </div>
    
                        <div class="carousel-item">
                            <a href="https://pdi.uct.cl/ciclo-charlas-de-futuro/" target="_blank" rel="noopener noreferrer">
                                <img src="BANNER_CHARLAS-23.jpg" class="d-block w-100" alt="...">
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="https://pdi.uct.cl/ciclo-charlas-de-futuro/" target="_blank" rel="noopener noreferrer">
                                <img src="BANNER_CHARLAS-25.jpg" class="d-block w-100" alt="...">
                            </a>
                        </div>

                        <div class="carousel-item">
                            <a href="https://pdi.uct.cl/" target="_blank" rel="noopener noreferrer">
                                <img src="banners.png" class="d-block w-100" alt="...">
                            </a>
                        </div>

                        <div class="carousel-item">
                            <img src="slider-felipe.jpg" class="d-block w-100" alt="...">                         
                        </div>
                    </div>
  
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Anterior</span>
                    </button>
  
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Siguiente</span>
                    </button>
                </div>
            </aside>
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



        <script>
            // Esta función evita colocar letras en el input del RUN
            function validate(evt) {
                var theEvent = evt || window.event;
                if (theEvent.type === 'paste') {
                    key = event.clipboardData.getData('text/plain');
                } else {
                    var key = theEvent.keyCode || theEvent.which;
                    key = String.fromCharCode(key);
                }
                
                var regex = /[0-9]/;
                
                if( !regex.test(key) ) {
                    theEvent.returnValue = false;
                    if(theEvent.preventDefault) theEvent.preventDefault();
                }
            }

            // Funcion encargada de verificar si el digito verificador esta vacio, ademas de validar el rut con su digito verificador
            function checkRut() {
                    // document.getElementById("buttonSub").disabled = true;
                var valor = document.getElementById("rut").value;
                var dv = document.getElementById("dv").value;
                var button = document.getElementById("buttonSub");
                var error = document.getElementById("error");

                error.textContent = "";

                    // if(dv==='' || valor===''){
                    //     button.disabled = true;
                    // } else {

                    // Calcular Dígito Verificador
                suma = 0;
                multiplo = 2;
                    
                    // Para cada dígito del Cuerpo
                for(i=1;i<=valor.length;i++) {
                    
                        // Obtener su Producto con el Múltiplo Correspondiente
                    index = multiplo * valor.charAt(valor.length - i);
                        
                     // Sumar al Contador General
                     suma = suma + index;
                        
                        // Consolidar Múltiplo dentro del rango [2,7]
                    if(multiplo < 7) { multiplo = multiplo + 1; } else { multiplo = 2; }
                
                }
                    
                    // Calcular Dígito Verificador en base al Módulo 11
                dvEsperado = 11 - (suma % 11);
                    
                   // Casos Especiales (0 y K)
                 dv = (dv == 'K')?10:dv;
                 dv = (dv == 'k')?10:dv;
                dv = (dv == 0)?11:dv;
                 
                // Validar que el Cuerpo coincide con su Dígito Verificador
                if((dvEsperado != dv) || (valor.length <7 )) { 
                        // rut.setCustomValidity("RUT Inválido");
                    error.textContent = "Su número de RUN con el dígito verificador no coinciden.";
                    error.style.color = "red";
                    button.disabled = true;
                }

                else{
                    button.disabled = false;
                    error.textContent = ""
                }
                        
                        // Si todo sale bien, eliminar errores (decretar que es válido)
            }
        </script>

    </body>
</html>