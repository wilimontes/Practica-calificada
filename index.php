<!DOCTYPE html>
<html langa="en">

<head>
        <meta charset="UTP-8">
        <meta http-equiv="X-UA-Compatible" content="it=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Consulta de Clientes</h1>
    <hr>
    <button type="button" class="btn btn-primary btn-block" id="btnbuscar">Buscar</button>
    <br>
    <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>id</th>
                    <th>razon social</th>
                    <th>tipo doc</th>
                    <th>N.Documento</th>
                    <th>direccion</th>
                </tr>
            </thead> 
            <tbody id="tblData">
                                    
            </tbody>
    </table>
</div>
</body>
<script src="js/index.js"></script>
</html>


