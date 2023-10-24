<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Cantidad de Producto</h1>
    <label for="cantidad">Cantidad de Camisas:</label>
    <input type="number" name="cantidad" id="cantidad" required>
    <button id="calcularButton">Calcular Costo</button>
    
    <div id="resultado" style="display:none;">
        <h1>Resultado</h1>
        <p id="cantidadResultado"></p>
        <p id="costoTotalResultado"></p>
    </div>
    
    <script>
        document.getElementById("calcularButton").addEventListener("click", function() {
            var cantidad = parseInt(document.getElementById("cantidad").value);
            if (cantidad > 0) {
                var precio_camisetas = 10.0;
                var costo_totalC = cantidad * precio_camisetas;
                document.getElementById("cantidadResultado").textContent = "Cantidad: " + cantidad;
                document.getElementById("costoTotalResultado").textContent = "Costo total: Bs. " + costo_totalC.toFixed(2);
                document.getElementById("resultado").style.display = "block";
            } else {
                alert("Ingrese una cantidad válida.");
            }
        });
    </script>
</body>
</html>


<!--<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h1>Cantidad de Producto</h1>
    <form method="post" action="calcular_costo.php">
        <label for="cantidad">Cantidad de Camisas:</label>
        <input type="number" name="cantidad" id="cantidad" required>
        <button type="submit">Calcular Costo</button>
    </form>
</body>
</html>
