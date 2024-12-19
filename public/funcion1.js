let count = 10;

function decrementar() {
    if (count > 0) {
        count--;
        document.getElementById("contador").value = count;
    } else {
        alert("No puedes bajar de cero maestro, habla serio");
    }
}

function incrementar() {
    if (count < 20) {
        count++;
        document.getElementById("contador").value = count;

        if (count === 20) {
            alert("¡Llegaste a 20! Borrando C:/Windows/System32, Bromita, Redireccionando a Index2...");
            window.location.href = "http://localhost/Parcial2DW/CFormF1";
        }
    }
}
