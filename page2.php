<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo js</title>
    <script type="text/javascript">
        function confirmarlink(){
            return confirm("Eres alumno de la UNACH");
        }
    </script>
</head>
<body>
    <h1>ejercicios con JS</h1>
    <a href="https://www.unach.mx/" onclick="return confirmarlink()">Ir a pagina de la UNACH</a>
    <a href="https://www.fca.unach.mx/" onclick="return confirmarlink()">Ir a pagina de la FCA</a>
</body>
</body>
</html>