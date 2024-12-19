<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="public\styles.css">
</head>
<body>
    <div class="container2">
        <h2>Conversor de Moneda</h2>
        <input type="text" class="form-control" id="monto" placeholder="$/€">
        <select class="form-select" id="ListPlataOri">
            <option value="USD">USD</option>
            <option value="EURO">EURO</option>
        </select>
        <h3>a:</h3>
        <select class="form-select" id="ListPlataConv">
            <option value="USD">USD</option>
            <option value="EURO">EURO</option>
        </select>
        <button type="button" class="btn btn-primary" onclick="convertir()">Convertir</button>
        <input type="text" id="resultado" placeholder="Res." readonly class="form-control">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="public/funcion2.js"></script>
</body>
</html>
