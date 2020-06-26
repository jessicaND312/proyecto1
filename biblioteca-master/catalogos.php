<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogos</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
<body>
    <?php readfile('./menu.html'); ?>
    <div class="container mt-3">
        <div class="card">
            <div class="card-header">
                
                <svg class="bi bi-file-post" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4 1h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H4z"/>
                    <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-7z"/>
                    <path fill-rule="evenodd" d="M4 3.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                  </svg>Catalogos
            </div>
            <div class="card-body">
                <table class="table table-striped table-sm table-hover">
                    <thead class="thead-dark">
                        <tr>
                            <th style="width:45%;" scope="col">tema del libro</th>
                            <th style="width:45%;" scope="col">nombre del libro</th>
                            <th style="width:10%;" scope="col">
                                <a href="catalogo_formulario.html" class="btn btn-primary btn-sm"><i class="fa fa-plus-circle"></i></a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr class="table-info">
                            <td>Seleccion Natural</td>
                            <td>El origen de las especies</td>
                            <td>
                                <a href="catalogo_formulario.html" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                            </td>
                            <tr class="table-info">
                                <td>Los hombres de la tierra</td>
                                <td>Cronicas Marcianas</td>
                                <td>   
                                    <a href="catalogo_formulario.html" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                                </td>
                             <tr class="table-info">
                                <td>Funciones Trigonometricas</td>
                                <td>Calculo integral</td>
                                <td>   
                                    <a href="catalogo_formulario.html" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                                </td>
                            <tr class="table-info">
                                <td>Hadware y Software</td>
                                <td>Guia Visual</td>
                                <td>   
                                    <a href="catalogo_formulario.html" class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i></a>
                                </td>
                       </tr> 
                    </tbody>
                </table>
                <div align="center">
                    <img src="imagenes/4.jpg">
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>