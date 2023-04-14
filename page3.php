<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo JS</title>
    <script type="text/javascript">
        var numero1=prompt("Introduce un numero");
        while(!numero1){
            numero1=prompt("Introduce el primer numero por favor");
        }
        console.log(numero1);
        document.write(numero1);
        var numero2=prompt("introduce un segundo numero");
        while(!numero2){
            numero2=prompt("Introduce el segundo numero por favor");
        }
        console.log(numero2);
        document.write(numero2);
        var suma=parseInt(numero1)+parseInt(numero2);
        console.log("La suma es "+ suma);
        function Sumar(){
            var a=parseInt(numero1);
            var b=parseInt(numero2);
            var resultado=a+b;
            alert("La suma es:"+resultado);
        }
        function Restar(){
            var a=parseInt(numero1);
            var b=parseInt(numero2);
            var resultado=a-b;
            alert("La resta es:"+resultado);
        }
    </script>
</head>
<body>
    <input type="button" value="suma" onclick="Sumar()">
    <input type="button" value="resta" onclick="Restar()">
</body>
</html>