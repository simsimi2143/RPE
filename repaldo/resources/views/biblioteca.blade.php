<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prestamo Biblioteca</title>
    <link rel="icon" href="{{ asset('uct.jpg') }}">
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
        footer{
          height: 100%;
         }

    </style>
</head>
<body>
    <nav class = "navbar navbar-dark bg-dark">
                <img href = "#" src = "Universidad_Catolica_de_Temuco_Logo_Vertical.png" alt = "" width = "130" height = "45" aria-controls = "sidebar">
                <div>
                    <a href = "https://www.facebook.com/canaluctemuco/%22%3E"> <img href = "#" src = "{{ asset('fb.png') }}" class = "nav-r2" width = "32"></a>
                    <a href = "https://www.instagram.com/uctemuco/?hl=es-la%22%3"> <img href = "#" src = "{{ asset('ig.png') }}" class = "nav-r2" width = "32"></a>
                    <a href = "ruta"><img href = "#" src = "{{ asset('logout.png') }}" class = "nav-r2 ml-4" width = "34"></a>
                </div>
    </nav>
    
    <br>
    <div class="d-flex justify-content-center">
        <div class="alert alert-warning text-center col-5 " role="alert" >
        
            Estimado(a) "Nombre"  

            Has solicitado los siguientes recursos en biblioteca:
        </div>
    </div>
    <br>
    <div class="table-responsive">
        <table class="table">
            <thead class=" table-dark">
                <tr>
                <th scope="col">Material</th>
                <th scope="col">Titulo</th>
                <th scope="col">Autor</th>
                <th scope="col">Fecha Prestamo</th>
                <th scope="col">Fecha devolucion</th>
                <th scope="col">Biblioteca</th>
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
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                    <td>@mdo</td>
                    <td>@mdo</td>
                </tr>
                
               
            </tbody>
        </table>
    </div>

   
</body>
</html>