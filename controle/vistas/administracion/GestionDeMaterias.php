<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Materias</title>
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
        <h1>Gestión de Materias</h1>

        <!-- Formulario para agregar materias -->
        <div class="form-group">
            <label for="nombreMateria">Nombre de la Materia:</label>
            <input type="text" id="nombreMateria" placeholder="Ejemplo: Matemáticas" required>
        </div>

        <div class="form-group">
            <label for="codigoMateria">Código de la Materia:</label>
            <input type="text" id="codigoMateria" placeholder="Ejemplo: MAT101" required>
        </div>

        <div class="form-group">
            <label for="carrera">Carrera:</label>
            <select id="carrera">
                <option value="Ingeniería">Ingeniería</option>
                <option value="Medicina">Medicina</option>
                <option value="Derecho">Derecho</option>
                <option value="Administración">Administración</option>
            </select>
        </div>

        <div class="form-group">
            <label for="profesor">Profesor Asignado:</label>
            <input type="text" id="profesor" placeholder="Ejemplo: Juan Pérez" required>
        </div>

        <button onclick="agregarMateria()">Agregar Materia</button>

        <!-- Tabla para listar materias -->
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Código</th>
                    <th>Carrera</th>
                    <th>Profesor</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="tablaMaterias">
                <!-- Las materias agregadas aparecerán aquí dinámicamente -->
            </tbody>
        </table>
    </div>

    <script>
        function agregarMateria() {
            let nombreMateria = document.getElementById("nombreMateria").value.trim();
            let codigoMateria = document.getElementById("codigoMateria").value.trim();
            let carrera = document.getElementById("carrera").value;
            let profesor = document.getElementById("profesor").value.trim();

            if (nombreMateria === "" || codigoMateria === "" || carrera === "" || profesor === "") {
                alert("Por favor, complete todos los campos.");
                return;
            }

            let table = document.getElementById("tablaMaterias");
            let row = table.insertRow();
            row.innerHTML = `
                <td>${nombreMateria}</td>
                <td>${codigoMateria}</td>
                <td>${carrera}</td>
                <td>${profesor}</td>
                <td><button class="delete-btn" onclick="eliminarMateria(this)">Eliminar</button></td>
            `;

            // Limpiar los campos del formulario
            document.getElementById("nombreMateria").value = "";
            document.getElementById("codigoMateria").value = "";
            document.getElementById("carrera").value = "";
            document.getElementById("profesor").value = "";
        }

        function eliminarMateria(button) {
            let row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

</body>
</html>
