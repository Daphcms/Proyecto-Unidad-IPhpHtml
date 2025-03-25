<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Financiero</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            text-align: center;
        }

        h1 {
            background-color: #333;
            color: white;
            padding: 15px;
            margin: 0;
            border-radius: 8px 8px 0 0;
        }

        .form-group {
            margin: 15px 0;
            text-align: left;
        }

        label {
            font-size: 18px;
            display: block;
            margin-bottom: 5px;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-top: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
            cursor: pointer;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
        }

        button:hover {
            background-color: #0056b3;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #222;
            color: white;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        #total {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
            color: #007bff;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Control Financiero</h1>

        <!-- Formulario para agregar pagos -->
        <div class="form-group">
            <label for="estudiante">Nombre del Estudiante:</label>
            <input type="text" id="estudiante" placeholder="Ejemplo: Juan Pérez" required>
        </div>

        <div class="form-group">
            <label for="concepto">Concepto del Pago:</label>
            <select id="concepto">
                <option value="Matrícula">Matrícula</option>
                <option value="Mensualidad">Mensualidad</option>
                <option value="Materiales">Materiales</option>
                <option value="Otros">Otros</option>
            </select>
        </div>

        <div class="form-group">
            <label for="monto">Monto:</label>
            <input type="number" id="monto" placeholder="Ejemplo: 500" required>
        </div>

        <div class="form-group">
            <label for="fecha">Fecha de Pago:</label>
            <input type="date" id="fecha" required>
        </div>

        <button onclick="agregarPago()">Registrar Pago</button>

        <!-- Tabla para listar pagos -->
        <table>
            <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>Concepto</th>
                    <th>Monto</th>
                    <th>Fecha</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="tablaPagos">
                <!-- Los pagos agregados aparecerán aquí dinámicamente -->
            </tbody>
        </table>

        <div id="total">Total Ingresos: $0.00</div>
    </div>

    <script>
        function agregarPago() {
            let estudiante = document.getElementById("estudiante").value.trim();
            let concepto = document.getElementById("concepto").value;
            let monto = document.getElementById("monto").value.trim();
            let fecha = document.getElementById("fecha").value;

            if (estudiante === "" || concepto === "" || monto === "" || fecha === "") {
                alert("Por favor, complete todos los campos.");
                return;
            }

            let montoNum = parseFloat(monto);
            if (isNaN(montoNum) || montoNum <= 0) {
                alert("Ingrese un monto válido.");
                return;
            }

            let table = document.getElementById("tablaPagos");
            let row = table.insertRow();
            row.innerHTML = `
                <td>${estudiante}</td>
                <td>${concepto}</td>
                <td>$${montoNum.toFixed(2)}</td>
                <td>${fecha}</td>
                <td><button class="delete-btn" onclick="eliminarPago(this, ${montoNum})">Eliminar</button></td>
            `;

            // Actualizar total
            actualizarTotal(montoNum);

            // Limpiar los campos del formulario
            document.getElementById("estudiante").value = "";
            document.getElementById("concepto").value = "";
            document.getElementById("monto").value = "";
            document.getElementById("fecha").value = "";
        }

        function eliminarPago(button, monto) {
            let row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);

            // Restar el monto eliminado al total
            actualizarTotal(-monto);
        }

        function actualizarTotal(monto) {
            let totalElement = document.getElementById("total");
            let totalActual = parseFloat(totalElement.textContent.replace("Total Ingresos: $", "")) || 0;
            let nuevoTotal = totalActual + monto;
            totalElement.textContent = `Total Ingresos: $${nuevoTotal.toFixed(2)}`;
        }
    </script>

</body>
</html>
