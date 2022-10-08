<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion</title>
    <link rel="icon" href="{{ asset('uct.jpg') }}">
    <script src="../js/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <style>
        body{
          background-image: url(31.jpg);
          background-repeat: no-repeat;
          background-attachment: fixed;
          background-size: cover; 
        }
        .header {
            color: #36A0FF;
            font-size: 27px;
            padding: 10px;
         }

         footer{
          height: 100%;
         }
        .sect1{
          background-color: rgba(255, 255, 255, .3);
        }


        #carouselExampleControls{
          margin-top:50px;
          
        }
        #text{
            margin-top:50px;
            margin-left:50px;
            background-color: rgba(255, 255, 255, .3);

        }
        .carousel-inner{
            width: 600px;
            height: 400px;
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



    <section class="sect1">
        <br>
        <h3 class="text-uppercase text-center">Iniciar Sesion</h3>
        <form action="" class="form-inline d-flex justify-content-center flex-column flex-md-row">
            <div class="form-group my-2">
                <label for="" class="mx-2">RUN:</label>
                <input type="text" class="form-control" placeholder="25175341-K">
            </div>

            <div class="form-group mx-2 my-2">
                <label for="" class="mx-2">Contraseña:</label>
                <input type="password" class="form-control">
            </div>

            <div class="form-group mx-2 my-4">
                <button class="btn bg-dark text-white " type="submit">Entrar
                </button>
            </div>
        </form>
        <div class="col-11 d-flex justify-content-center flex-column flex-md-row">
            <div class="mx-2">
              <a class="btn bg-dark  text-white" href="recuperar" role="button">Recuperar Contraseña</a>
            </div>
            
            <div class="mx-2">
              <a class="btn bg-dark  text-white" href="cambiar" role="button">Cambiar Contraseña</a>
            </div>
        </div>
    </section>
   <br>
   <br>
   <br>
   <br>
   <br>
   <div class="d-flex justify-content-center">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="4.jpg" class="d-block w-100" alt="..." id="img1">
            <div class="carousel-caption d-none d-md-block">
                <h5>Noticias UCT</h5>
                <p>""""</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="dos.jpg" class="d-block w-100" alt="..." id="img2">
            <div class="carousel-caption d-none d-md-block">
                <h5>Noticias UCT</h5>
                <p>""""</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="oferta-formativa.jpg" class="d-block w-100" alt="..." id="img3">
            <div class="carousel-caption d-none d-md-block">
                <h5>Noticias UCT</h5>
                <p>""""</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    <!-- Footer -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
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


    

</body>
</html>