<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Estudiantes</title>
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
        <h1>Registro de Estudiantes</h1>

        <!-- Formulario para registrar estudiante -->
        <div class="form-group">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" placeholder="Ejemplo: Juan Pérez" required>
        </div>

        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" placeholder="Ejemplo: 15" required>
        </div>

        <div class="form-group">
            <label for="grado">Grado Escolar:</label>
            <select id="grado">
                <option value="Primaria">Primaria</option>
                <option value="Secundaria">Secundaria</option>
                <option value="Preparatoria">Preparatoria</option>
            </select>
        </div>

        <div class="form-group">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" placeholder="Ejemplo: juan@example.com" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" placeholder="Ejemplo: 555-123-4567" required>
        </div>

        <button onclick="registrarEstudiante()">Registrar Estudiante</button>

        <!-- Tabla para listar estudiantes -->
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Grado</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="tablaEstudiantes">
                <!-- Los estudiantes agregados aparecerán aquí dinámicamente -->
            </tbody>
        </table>
    </div>

    <script>
        function registrarEstudiante() {
            let nombre = document.getElementById("nombre").value.trim();
            let edad = document.getElementById("edad").value.trim();
            let grado = document.getElementById("grado").value;
            let correo = document.getElementById("correo").value.trim();
            let telefono = document.getElementById("telefono").value.trim();

            if (nombre === "" || edad === "" || grado === "" || correo === "" || telefono === "") {
                alert("Por favor, complete todos los campos.");
                return;
            }

            let edadNum = parseInt(edad);
            if (isNaN(edadNum) || edadNum <= 0) {
                alert("Ingrese una edad válida.");
                return;
            }

            let table = document.getElementById("tablaEstudiantes");
            let row = table.insertRow();
            row.innerHTML = `
                <td>${nombre}</td>
                <td>${edadNum}</td>
                <td>${grado}</td>
                <td>${correo}</td>
                <td>${telefono}</td>
                <td><button class="delete-btn" onclick="eliminarEstudiante(this)">Eliminar</button></td>
            `;

            // Limpiar los campos del formulario
            document.getElementById("nombre").value = "";
            document.getElementById("edad").value = "";
            document.getElementById("grado").value = "";
            document.getElementById("correo").value = "";
            document.getElementById("telefono").value = "";
        }

        function eliminarEstudiante(button) {
            let row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

</body>
</html>
