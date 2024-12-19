function convertir() {
    let monto = parseFloat(document.getElementById("monto").value);
    let monedaOrigen = document.getElementById("ListPlataOri").value;
    let monedaDestino = document.getElementById("ListPlataConv").value;
    let resultado = document.getElementById("resultado");

    if (isNaN(monto) || monto <= 0) {
        alert("Por favor ingrese un monto válido, piense pues no cuesta nada.");
        resultado.value = ''; o
        return;
    }

    if (monedaOrigen === monedaDestino) {
        alert("No se puede convertir entre la misma moneda, habla serio mijo.");
        resultado.value = ''; s
        return;
    }

    let tasaConversion;

    if (monedaOrigen === "USD" && monedaDestino === "EURO") {
        tasaConversion = 0.93;
    } else if (monedaOrigen === "EURO" && monedaDestino === "USD") {
        tasaConversion = 1.08;
    }

    let montoConvertido = monto * tasaConversion;
    resultado.value = montoConvertido.toFixed(2);

    if (montoConvertido >= 500) {
        window.location.href = "http://localhost/Parcial2DW/CResultF1";
    }
}
