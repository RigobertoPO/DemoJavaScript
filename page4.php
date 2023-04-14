<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo JS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script type="text/javascript">
        function obtenerValor(){
            var dato="Luis";
            imprimirValor(dato);
        }
        function imprimirValor(parametro){
            alert(parametro);
        }
    </script>
</head>
<body>
    <input type="button" value="click boton 1" class="btn btn-primary" onclick="obtenerValor()">
    <button class="btn btn-secondary" onclick="obtenerValor()"> click boton 2</button>
</body>
</html>