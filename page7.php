<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>demo js -for</title>
    <script type="text/javascript">
        function GenerarFor(){
            for (let index = 0; index < 100; index++) {
                document.write("Imprime "+index);                
            }
        }
    </script>
</head>
<body>
    <button onclick="GenerarFor()">usar for</button>
</body>
</html>