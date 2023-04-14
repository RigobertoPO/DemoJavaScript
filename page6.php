<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo JS - ciclos</title>
    <script type="text/javascript">
        //alert("Bienvenido");
        //console.log("Bienvenido desde consola");
        function GenerarSuma(){
            var suma=0;
            //Ciclo do while
            do{
                var numero=prompt("Introduce un número");
                if(Number(numero)==numero){
                    numero=Number(numero);
                    suma=suma+numero;
                }
                else{
                    alert("No es numero");
                }
            }while (numero!=undefined);
            document.write(suma);
        }
    </script>
</head>
<body>
    <button onclick="GenerarSuma()">Click para suma</button>
</body>
</html>