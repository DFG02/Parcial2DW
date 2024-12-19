<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <div class="container text-center">
        <h3>Contador de Clics: </h3>
        <button onclick="decrementar()" type="button" class="btn btn-danger">-</button>
        <input id="contador" type="text" value="10" readonly class="form-control d-inline-block w-auto text-center">
        <button onclick="incrementar()" type="button" class="btn btn-success">+</button>
    </div>
    <script src="public/funcion1.js"></script>
</body>
</html>
