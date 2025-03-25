<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Profesores</title>
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
        <h1>Registro de Profesores</h1>

        <!-- Formulario para registrar profesor -->
        <div class="form-group">
            <label for="nombre">Nombre Completo:</label>
            <input type="text" id="nombre" placeholder="Ejemplo: Pedro Gómez" required>
        </div>

        <div class="form-group">
            <label for="materia">Materia Asignada:</label>
            <select id="materia">
                <option value="Matemáticas">Matemáticas</option>
                <option value="Historia">Historia</option>
                <option value="Ciencias">Ciencias</option>
                <option value="Inglés">Inglés</option>
                <option value="Educación Física">Educación Física</option>
            </select>
        </div>

        <div class="form-group">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" placeholder="Ejemplo: pedro@example.com" required>
        </div>

        <div class="form-group">
            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" placeholder="Ejemplo: 555-123-4567" required>
        </div>

        <button onclick="registrarProfesor()">Registrar Profesor</button>

        <!-- Tabla para listar profesores -->
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Materia</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="tablaProfesores">
                <!-- Los profesores agregados aparecerán aquí dinámicamente -->
            </tbody>
        </table>
    </div>

    <script>
        function registrarProfesor() {
            let nombre = document.getElementById("nombre").value.trim();
            let materia = document.getElementById("materia").value;
            let correo = document.getElementById("correo").value.trim();
            let telefono = document.getElementById("telefono").value.trim();

            if (nombre === "" || materia === "" || correo === "" || telefono === "") {
                alert("Por favor, complete todos los campos.");
                return;
            }

            let tabla = document.getElementById("tablaProfesores");
            let row = tabla.insertRow();
            row.innerHTML = `
                <td>${nombre}</td>
                <td>${materia}</td>
                <td>${correo}</td>
                <td>${telefono}</td>
                <td><button class="delete-btn" onclick="eliminarProfesor(this)">Eliminar</button></td>
            `;

            // Limpiar los campos del formulario
            document.getElementById("nombre").value = "";
            document.getElementById("materia").value = "";
            document.getElementById("correo").value = "";
            document.getElementById("telefono").value = "";
        }

        function eliminarProfesor(button) {
            let row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

</body>
</html>
