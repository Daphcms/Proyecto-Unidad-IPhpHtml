<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Clases</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s, color 0.3s;
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
    </style>
</head>
<body>

    <div class="container">
        <h1>Gestión de Clases</h1>

        <!-- Formulario para agregar clases -->
        <div class="form-group">
            <label for="nombreClase">Nombre de la Clase:</label>
            <input type="text" id="nombreClase" placeholder="Ejemplo: Matemáticas" required>
        </div>

        <div class="form-group">
            <label for="profesor">Profesor Asignado:</label>
            <input type="text" id="profesor" placeholder="Ejemplo: Juan Pérez" required>
        </div>

        <div class="form-group">
            <label for="horario">Horario:</label>
            <input type="text" id="horario" placeholder="Ejemplo: Lunes 8:00 - 10:00 AM" required>
        </div>

        <button onclick="agregarClase()">Agregar Clase</button>

        <!-- Tabla para listar clases -->
        <table>
            <thead>
                <tr>
                    <th>Nombre de la Clase</th>
                    <th>Profesor</th>
                    <th>Horario</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="tablaClases">
                <!-- Las clases agregadas aparecerán aquí dinámicamente -->
            </tbody>
        </table>
    </div>

    <script>
        function agregarClase() {
            let nombreClase = document.getElementById("nombreClase").value.trim();
            let profesor = document.getElementById("profesor").value.trim();
            let horario = document.getElementById("horario").value.trim();

            if (nombreClase === "" || profesor === "" || horario === "") {
                alert("Por favor, complete todos los campos.");
                return;
            }

            let table = document.getElementById("tablaClases");
            let row = table.insertRow();
            row.innerHTML = `
                <td>${nombreClase}</td>
                <td>${profesor}</td>
                <td>${horario}</td>
                <td><button class="delete-btn" onclick="eliminarClase(this)">Eliminar</button></td>
            `;

            // Limpiar los campos del formulario
            document.getElementById("nombreClase").value = "";
            document.getElementById("profesor").value = "";
            document.getElementById("horario").value = "";
        }

        function eliminarClase(button) {
            let row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

</body>
</html>
