const cells = document.querySelectorAll(".game-cell");
let currentPlayer = "X";
let gameActive = true;
let board = ["", "", "", "", "", "", "", "", ""];

function placeMove(cell) {
    const cellIndex = Array.from(cells).indexOf(cell);


    if (!gameActive || board[cellIndex] !== "") return;

    if (currentPlayer === "X") {
        board[cellIndex] = "X";
        cell.textContent = "X";
        currentPlayer = "O";
        checkWinner();
    }
}

function playGame() {
    if (!gameActive) return;


    const invalidInput = board.some(value => value && value !== "X" && value !== "O");
    if (invalidInput) {
        showMessage("Error: Solo se permite 'X' o 'O' Habla serio hijo.", "text-danger");
        return;
    }

    const emptyCells = board.map((value, index) => (value === "" ? index : null)).filter(index => index !== null);
    if (emptyCells.length > 0) {
        const randomIndex = emptyCells[Math.floor(Math.random() * emptyCells.length)];
        board[randomIndex] = "O";
        cells[randomIndex].textContent = "O";
        currentPlayer = "X";
        checkWinner();
    }
}

function checkWinner() {
    const winningCombos = [
        [0, 1, 2], [3, 4, 5], [6, 7, 8], 
        [0, 3, 6], [1, 4, 7], [2, 5, 8], 
        [0, 4, 8], [2, 4, 6]             
    ];

    for (let combo of winningCombos) {
        const [a, b, c] = combo;

        if (board[a] && board[a] === board[b] && board[a] === board[c]) {
            showMessage(`¡${board[a]} gana!`, "text-success");
            gameActive = false;
            return;
        }
    }

    if (board.every(cell => cell !== "")) {
        showMessage("¡Empate!", "text-warning");
        gameActive = false;
    }
}

function resetGame() {
    board = ["", "", "", "", "", "", "", "", ""];
    cells.forEach(cell => (cell.textContent = ""));
    currentPlayer = "X";
    gameActive = true;
    showMessage("");
}

function showMessage(msg, className) {
    const messageElement = document.getElementById("message");
    messageElement.textContent = msg;
    messageElement.className = className;
}
