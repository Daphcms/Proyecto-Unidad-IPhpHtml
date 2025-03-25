<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Horarios</title>
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
    </style>
</head>
<body>

    <div class="container">
        <h1>Gestión de Horarios</h1>

        <!-- Formulario para agregar horarios -->
        <div class="form-group">
            <label for="materia">Materia:</label>
            <input type="text" id="materia" placeholder="Ejemplo: Matemáticas" required>
        </div>

        <div class="form-group">
            <label for="profesor">Profesor:</label>
            <input type="text" id="profesor" placeholder="Ejemplo: Juan Pérez" required>
        </div>

        <div class="form-group">
            <label for="dia">Día:</label>
            <select id="dia">
                <option value="Lunes">Lunes</option>
                <option value="Martes">Martes</option>
                <option value="Miércoles">Miércoles</option>
                <option value="Jueves">Jueves</option>
                <option value="Viernes">Viernes</option>
                <option value="Sábado">Sábado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="horaInicio">Hora de Inicio:</label>
            <input type="time" id="horaInicio" required>
        </div>

        <div class="form-group">
            <label for="horaFin">Hora de Fin:</label>
            <input type="time" id="horaFin" required>
        </div>

        <button onclick="agregarHorario()">Agregar Horario</button>

        <!-- Tabla para listar horarios -->
        <table>
            <thead>
                <tr>
                    <th>Materia</th>
                    <th>Profesor</th>
                    <th>Día</th>
                    <th>Hora Inicio</th>
                    <th>Hora Fin</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="tablaHorarios">
                <!-- Los horarios agregados aparecerán aquí dinámicamente -->
            </tbody>
        </table>
    </div>

    <script>
        function agregarHorario() {
            let materia = document.getElementById("materia").value.trim();
            let profesor = document.getElementById("profesor").value.trim();
            let dia = document.getElementById("dia").value;
            let horaInicio = document.getElementById("horaInicio").value;
            let horaFin = document.getElementById("horaFin").value;

            if (materia === "" || profesor === "" || dia === "" || horaInicio === "" || horaFin === "") {
                alert("Por favor, complete todos los campos.");
                return;
            }

            let table = document.getElementById("tablaHorarios");
            let row = table.insertRow();
            row.innerHTML = `
                <td>${materia}</td>
                <td>${profesor}</td>
                <td>${dia}</td>
                <td>${horaInicio}</td>
                <td>${horaFin}</td>
                <td><button class="delete-btn" onclick="eliminarHorario(this)">Eliminar</button></td>
            `;

            // Limpiar los campos del formulario
            document.getElementById("materia").value = "";
            document.getElementById("profesor").value = "";
            document.getElementById("dia").value = "";
            document.getElementById("horaInicio").value = "";
            document.getElementById("horaFin").value = "";
        }

        function eliminarHorario(button) {
            let row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

</body>
</html>
