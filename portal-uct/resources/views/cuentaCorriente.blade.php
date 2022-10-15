<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta Corriente</title>
    <link rel="icon" href="{{ asset('iconoUCT.jpg') }}">
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
</body>
</html>