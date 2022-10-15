<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta Corriente</title>
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


        
    <h2 class="text-center">Cuenta Corriente</h2>
    <br>
    <h6 class="text-center">En esta sección encontrarás información de tus cuentas (Deudas, Pagarés, cuotas, etc) y beneficios (Becas y/o Créditos) que posees en la Universidad Católica de Temuco.</h6>
    <br>
    <div class="d-flex justify-content-center">    
    <div class="accordion accordion-flush col-6" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Cuenta Corriente
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
      <h3 class="text-center">Estado de Cuotas Cuenta Corriente</h3>
      <h3 class="text-center">Todas las Cuotas</h3>
        <h6>Seleccione Estado:</h6>
      <select class="form-select col-6" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
      </select>
      <br>
      <h6>Seleccione concepto:</h6>
      <select class="form-select col-6" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">One</option>
          <option value="2">Two</option>
          <option value="3">Three</option>
      </select>
      <br>
      <div class="table-responsive">
        <table class="table">
            <thead class=" table-dark">
                <tr>
                <th scope="col">Carrera</th>
                <th scope="col">Año N°Cuota</th>
                <th scope="col">Concepto</th>
                <th scope="col">Valor Cuota</th>
                <th scope="col">Abono</th>
                <th scope="col">Monto a Pagar</th>
                <th scope="col">Fecha Vcto.</th>
                <th scope="col">Estado</th>
                </tr>
            </thead>
            <tbody class="table-primary">
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                
               
            </tbody>
        </table>
    </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
        Pago con Webpay Plus
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
      <div class= "d-flex justify-content-center">
        <img src="07_Logo_webpay_plus-300px.png" class="img-fluid" alt="...">
      </div>
      <div class= "d-flex justify-content-center">
        <a class="btn btn-primary" href="https://pagos.uct.cl/web_pay_uct/trunk/" role="button">Ir al Sitio</a>
      </div>
      <br>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
        Beneficios Estudiantiles
      </button>
    </h2>
    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
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
      <h3 class="text-center">Información de Beneficios</h3>
        <br>
        <div class="table-responsive">
          <table class="table">
              <thead class=" table-dark">
                  <tr>
                  <th scope="col">Año</th>
                  <th scope="col">Descripcion</th>
                  <th scope="col">Monto</th>
                  <th scope="col">Estado</th>
                  </tr>
              </thead>
              <tbody class="table-primary">
                  <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>Otto</td>
                  </tr>
                  
                
              </tbody>
          </table>
      </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
        Crédito Complementario
      </button>
    </h2>
    <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
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
        <h6>Seleccione Año:</h6>
        <select class="form-select col-6" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        <br>
        <h3 class="text-center">Cuotas Crédito Complementario</h3>
        <br>
        <div class="table-responsive">
          <table class="table">
              <thead class=" table-dark">
                  <tr>
                  <th scope="col">Imprimir</th>
                  <th scope="col">Año</th>
                  <th scope="col">Numero</th>
                  <th scope="col">Fecha Vcto.</th>
                  <th scope="col">Cuota</th>
                  <th scope="col">Estado</th>
                  </tr>
              </thead>
              <tbody class="table-primary">
                  <tr>
                      <th scope="row">1</th>
                      <td>Mark</td>
                      <td>Otto</td>
                      <td>Otto</td>
                      <td>Otto</td>
                      <td>Otto</td>
                  </tr>
                  
                
              </tbody>
          </table>
      </div>
      <div class= "d-flex justify-content-center">
        <a class="btn btn-primary" href="#" role="button">Imprimir Talonario</a>
      </div>
      <br>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingfive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
        Emisión de Documentos
      </button>
    </h2>
    <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
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

        <br>
        <div class="d-flex justify-content-center">
            <div class="alert alert-warning text-center" role="alert" >
            
                Estimado(a) "Nombre"  

                ¡Aviso! La emisión de pagarés de pregrado no estará disponible hasta nuevo aviso.
            </div>
        </div>
        <br>
        <h3 class="text-center">Pagaré Beneficios</h3>
        <p class= " text-center">
          En esta sección encontrarás todos los Pagarés vigentes, los cuales debes imprimir y hacerlos llegar a las oficinas de cobranza en el campus correspondiente a tu carrera.
        </p>
        <br>
        <h3 class="text-center">Información de la Carrera</h3>
        <br>
        <div class="table-responsive">
            <table class="table">
                <thead class=" table-dark">
                    <tr>
                    <th scope="col">Cód. Carrera</th>
                    <th scope="col">Nombre Carrera</th>
                    <th scope="col">Plan</th>
                    <th scope="col">Ingreso</th>
                    <th scope="col">Registro</th>
                    <th scope="col">Situación</th>
                    </tr>
                </thead>
                <tbody class="table-primary">
                    <tr>
                        <th scope="row">12.123.456-k</th>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                        <td>Mark</td>
                    </tr>
                    
                  
                </tbody>
            </table>
        </div>
        <h3 class="text-center">Pagare vigentes</h3>
        <br>
          <div class="table-responsive">
            <table class="table">
                <thead class=" table-dark">
                    <tr>
                    <th scope="col">Año</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Monto</th>
                    <th scope="col">Estado</th>
                    <th scope="col">imprimir</th>
                    </tr>
                </thead>
                <tbody class="table-primary">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>Otto</td>
                        <td>Otto</td>
                    </tr>
                    
                  
                </tbody>
            </table>
        </div>
        <h3 class="text-center">Certificados de Pago Matrícula - Arancel.</h3>
        <div class="table-responsive">
            <table class="table">
                <thead class=" table-dark">
                    <tr>
                    <th scope="col">Documentos disponibles: </th>
                    <th scope="col">Máximo un certificado para cada documento.</th>
                    </tr>
                </thead>
                <tbody class="table-primary">
                    <tr>
                        <th scope="row">No hay documentos disponible</th>
                        <td>""""</td>
                    </tr>
                    
                  
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>

</div>


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