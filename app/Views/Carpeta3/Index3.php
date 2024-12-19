<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tres en Línea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="public/styles.css">
</head>
<body>
    <div id="game-container">
        <div id="game-board">
            <div id="game-header">
                <div class="game-buttons">

                    <button onclick="window.location.href='http://localhost/Parcial2DW/CVistaF1'" class="game-btn">Formulario 1</button>

                    <button onclick="window.location.href='http://localhost/Parcial2DW/CFormF1'" class="game-btn">Formulario 2</button>
                </div>
                <h2 id="game-title">Tres en Línea</h2>
            </div>
            <table id="tic-tac-toe-board" cellspacing="0" cellpadding="0">
                <tr>
                    <td class="game-cell" onclick="placeMove(this)"></td>
                    <td class="game-cell" onclick="placeMove(this)"></td>
                    <td class="game-cell" onclick="placeMove(this)"></td>
                </tr>
                <tr>
                    <td class="game-cell" onclick="placeMove(this)"></td>
                    <td class="game-cell" onclick="placeMove(this)"></td>
                    <td class="game-cell" onclick="placeMove(this)"></td>
                </tr>
                <tr>
                    <td class="game-cell" onclick="placeMove(this)"></td>
                    <td class="game-cell" onclick="placeMove(this)"></td>
                    <td class="game-cell" onclick="placeMove(this)"></td>
                </tr>
            </table>
            <div id="game-actions">
                <button class="game-btn success-btn" onclick="playGame()">Jugar</button>
                <button class="game-btn danger-btn" onclick="resetGame()">Reiniciar</button>
            </div>
            <p id="message" class="text-success mt-2"></p>
        </div>
    </div>
    <script src="public/funcion3.js"></script>
</body>
</html>
