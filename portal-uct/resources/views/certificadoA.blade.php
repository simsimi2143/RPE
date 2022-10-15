<!DOCTYPE html>
<html lang = "{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Universidad Católica de Temuco</title>
        <link rel="icon" href="{{ asset('iconoUCT.png') }}">
        <script src="../js/sweetalert2.all.min.js"></script>

        <!--Iconos Solid Fontawesome-->
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
        
    <!--Collapse Contenido-->
        
        <div class = "text-black m-5 justify-content-end">
            <h2>Certificado Académico</h2><br>
            <a>
                En esta sección encontrarás información sobre la certificación académica: Sobre los cursos disponibles para la certificacion, formulario de postulacion.
                <br><br>El Certificado Académico puede complementar tu formación académico-profesional facilitando concentrar tu interés en temáticas particulares.
            </a>
        </div>

        <div class = "text-black m-5 justify-content-end">
            <h2>Principales Características</h2><br>
            <a>
                <h4>ADICIONAL</h4>
                Adicional a la titulación; una vez completados todos los requisitos académicos del plan de estudios de su carrera.<br>
                <br>
                <h4>COMPLEMENTARIO</h4>
                Complementario a la formación, en la medida que se focaliza en una temática de interés que puede ser diferente a las disciplinas de su carrera, en las que se abordan problemáticas actuales y/o locales y desarrolla la competencia genérica identitaria de respeto y valoración a la diversidad o actuación ética.<br>
                <br>
                <h4>ELECTIVO</h4>
                Electivo en un doble sentido: el estudiante escoge si seguir o no un Certificado y, también elige, las actividades curriculares con las que cumple las exigencias para obtenerlo.<br>
                <br>
                <h4>INTERDISCIPLINARIO</h4>
                Interdisciplinario ya que se encuentra con estudiantes de otras carreras. Con ellos podrá analizar y resolver problemáticas movilizando diversos tipos de saberes.<br>
            </a>
        </div>

        <!--Primer Collapse--> 

        <iframe style = "margin-right: auto; margin-left: auto;" class = "d-flex justify-content-center" width = "350px" height = "350px" src="https://www.youtube.com/embed/ChVfPeU6ZiQ" title = "YouTube video player" frameborder = "0" allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <div class = "m-5 mr-5 p-0 mb-0 rounded text-center">
        <p class = "m-5">
            <a class = "btn btn-light p-3 mb-0 border-dark" data-bs-toggle = "collapse" href = "#collapseExample" role = "button" aria-expanded = "false" aria-controls = "collapseExample">
                Información General
            </a>
        </p>
            <div class = "collapse text-center" id = "collapseExample">
                <div class = "card card-body border-dark text-center" style = "background-color: rgba(0,0,0,0.5);">
                    <div class = "text-center">
                        
                        <!--Dentro--> 

                        <div class = "rounded text-center">
                        <p class = "m-5">
                            <a class = "btn btn-light pt-3 pb-3 border-dark" style = "box-shadow: none;" data-bs-toggle = "collapse" href = "#collapseExample3" role = "button" aria-expanded = "false" aria-controls = "collapseExample3">
                                Ciudadanía y Derechos Humanos
                            </a>
                        </p>
                            <div class = "collapse text-center" id = "collapseExample3">
                                <div class = "card card-body border-dark text-center" style = "background-color: rgba(0,0,0,0.5);">
                                    <div class = "text-center">
                                    <table class = "table border-dark m-auto">
                                        <thead class = "table-dark border-dark ">
                                            <tr>
                                            <th scope="col">Sigla</th>
                                            <th scope="col">Nombre</th>  
                                            <th scope="col">Tipo de Curso</th>  
                                            </tr>
                                        </thead>
                                        <tbody> <!--Tabla n1--> 
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
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

                        <div class = "rounded text-center 2">
                        <p class = "m-5">
                            <a class = "btn btn-light pt-3 pb-3 border-dark" data-bs-toggle = "collapse" href = "#collapseExample4" role = "button" aria-expanded = "false" aria-controls = "collapseExample4">
                                Desarrollo Local, Territorialidad e Interculturalidad AAAAAAAAAAAAAAAAAAAAAAA
                            </a>
                        </p>
                            <div class = "collapse text-center" id = "collapseExample4">
                                <div class = "card card-body border-dark text-center" style = "background-color: rgba(0,0,0,0.5);">
                                    <div class = "text-center">
                                    <table class = "table border-dark m-auto">
                                    <thead class = "table-dark border-dark ">
                                            <tr>
                                            <th scope="col">Sigla</th>
                                            <th scope="col">Nombre</th>  
                                            <th scope="col">Tipo de Curso</th>  
                                            </tr>
                                        </thead>
                                        <tbody> <!--Tabla n2--> 
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
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

                        <div class = "rounded text-center">
                        <p class = "mt-4 w-auto">
                            <a class = "btn btn-light pt-3 pb-3 border-dark" data-bs-toggle = "collapse" href = "#collapseExample5" role = "button" aria-expanded = "false" aria-controls = "collapseExample5">
                                Rakizuam Egu Kimüm/Pesamiento Y Conocimiento Mapuche
                            </a>
                        </p>
                            <div class = "collapse text-center" id = "collapseExample5">
                                <div class = "card card-body border-dark text-center" style = "background-color: rgba(0,0,0,0.5);">
                                    <div class = "text-center">
                                    <table class = "table border-dark m-auto">
                                    <thead class = "table-dark border-dark ">
                                            <tr>
                                            <th scope="col">Sigla</th>
                                            <th scope="col">Nombre</th>  
                                            <th scope="col">Tipo de Curso</th>  
                                            </tr>
                                        </thead>
                                        <tbody> <!--Tabla n3--> 
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
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

                        <div class = "rounded text-center w-auto">
                        <p class = "mt-4">
                            <a class = "btn btn-light pt-3 pb-3 border-dark" style = "box-shadow: none;" data-bs-toggle = "collapse" href = "#collapseExample6" role = "button" aria-expanded = "false" aria-controls = "collapseExample6">
                                Teología y Sociedad
                            </a>
                        </p>
                            <div class = "collapse text-center" id = "collapseExample6">
                                <div class = "card card-body border-dark text-center" style = "background-color: rgba(0,0,0,0.5);">
                                    <div class = "text-center">
                                    <table class = "table border-dark m-auto">
                                    <thead class = "table-dark border-dark ">
                                            <tr>
                                            <th scope="col">Sigla</th>
                                            <th scope="col">Nombre</th>  
                                            <th scope="col">Tipo de Curso</th>  
                                            </tr>
                                        </thead>
                                        <tbody> <!--Tabla n4--> 
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
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

                        <div class = "rounded text-center w-auto">
                        <p class = "mt-4">
                            <a class = "btn btn-light pt-3 pb-3 border-dark" style = "box-shadow: none; " data-bs-toggle = "collapse" href = "#collapseExample7" role = "button" aria-expanded = "false" aria-controls = "collapseExample7">
                                Filosofía de la Persona
                            </a>
                        </p>
                            <div class = "collapse text-center" id = "collapseExample7">
                                <div class = "card card-body border-dark text-center" style = "background-color: rgba(0,0,0,0.5);">
                                    <div class = "text-center">
                                    <table class = "table border-dark m-auto">
                                    <thead class = "table-dark border-dark ">
                                            <tr>
                                            <th scope="col">Sigla</th>
                                            <th scope="col">Nombre</th>  
                                            <th scope="col">Tipo de Curso</th>  
                                            </tr>
                                        </thead>
                                        <tbody> <!--Tabla n5--> 
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
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

                        <div class = "rounded text-center w-auto">
                        <p class = "mt-4">
                            <a class = "btn btn-light pt-3 pb-3 border-dark" style = "box-shadow: none; width: auto;" data-bs-toggle = "collapse" href = "#collapseExample8" role = "button" aria-expanded = "false" aria-controls = "collapseExample8">
                                Competencias Socioemocionales Y Desarrollo Personal
                            </a>
                        </p>
                            <div class = "collapse text-center" id = "collapseExample8">
                                <div class = "card card-body border-dark text-center" style = "background-color: rgba(0,0,0,0.5);">
                                    <div class = "text-center">
                                    <table class = "table border-dark m-auto">
                                        <thead class = "table-dark border-dark ">
                                            <tr>
                                            <th scope="col">Sigla</th>
                                            <th scope="col">Nombre</th>  
                                            <th scope="col">Tipo de Curso</th>  
                                            </tr>
                                        </thead>
                                        <tbody> <!--Tabla n6--> 
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
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

                        <div class = "rounded text-center w-auto">
                        <p class = "mt-4">
                            <a class = "btn btn-light pt-3 pb-3 border-dark" style = "box-shadow: none; width: auto;" data-bs-toggle = "collapse" href = "#collapseExample9" role = "button" aria-expanded = "false" aria-controls = "collapseExample9">
                                Equidad de Género para Nuevas Sociedades
                            </a>
                        </p>
                            <div class = "collapse text-center" id = "collapseExample9">
                                <div class = "card card-body border-dark text-center" style = "background-color: rgba(0,0,0,0.5);">
                                    <div class = "text-center">
                                    <table class = "table border-dark m-auto">
                                        <thead class = "table-dark border-dark ">
                                            <tr>
                                            <th scope="col">Sigla</th>
                                            <th scope="col">Nombre</th>  
                                            <th scope="col">Tipo de Curso</th>  
                                            </tr>
                                        </thead>
                                        <tbody> <!--Tabla n7--> 
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            </tr>
                                            <tr>
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
            </div>
        </div>

    <!--Segundo Collapse--> 
       
    <div class = "m-5 mr-5 p-0 mb-0 rounded text-center">
    <p class = "m-5">
        <a class = "btn btn-light p-3 mb-0 border-dark" data-bs-toggle = "collapse" href = "#collapseExample11" role = "button" aria-expanded = "false" aria-controls = "collapseExample11">
            Postular
        </a>
    </p>
        <div class = "collapse text-center" id = "collapseExample11">
            <div class = "card card-body border-dark text-center" style = "background-color: rgba(0,0,0,0.5);">
                <div class = "text-center">
                    <table class = "table border-dark m-auto text-white">
                        <thead class = "table-dark border-dark text-white">
                            <tr>
                                <th scope="col">Rut</th>
                                <th scope="col">Nombre Alumno</th>  
                                <th scope="col">Teléfono Fijo</th>  
                                <th scope="col">Celular</th>  
                                <th scope="col">Email</th> 
                            </tr>
                        </thead>
                            <tbody> <!--Tabla n7--> 
                            <tr>
                                <td>xd</td>
                                <td>xd</td>
                                <td>xd</td>
                                <td>xd</td>
                                <td>xd</td>
                                </tr>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!--Tercer Collapse--> 

        <div class = "ml-5 mr-5 rounded text-center mt-0">
        <p class = "mt-4">
            <a class = "btn btn-light pt-3 pb-3 border-dark" data-bs-toggle = "collapse" href = "#collapseExample2" role = "button" aria-expanded = "false" aria-controls = "collapseExample2">
                Mis Certificaciones
            </a>
        </p>
            <div class = "collapse text-center" id = "collapseExample2">
                <div class = "card card-body border-dark text-center text-white" style = "background-color: rgba(0,0,0,0.5);">
                    <div class = "text-center">
                        Aqui va el texto del segundo boton
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer --> 
    
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