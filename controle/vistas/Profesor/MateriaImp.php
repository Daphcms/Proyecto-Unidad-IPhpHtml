<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias Impartidas</title>
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
        <h1>Materias Impartidas</h1>

        <!-- Formulario para agregar materia impartida -->
        <div class="form-group">
            <label for="profesor">Nombre del Profesor:</label>
            <input type="text" id="profesor" placeholder="Ejemplo: Juan Pérez" required>
        </div>

        <div class="form-group">
            <label for="materia">Materia:</label>
            <select id="materia">
                <option value="Matemáticas">Matemáticas</option>
                <option value="Historia">Historia</option>
                <option value="Ciencias">Ciencias</option>
                <option value="Inglés">Inglés</option>
                <option value="Educación Física">Educación Física</option>
            </select>
        </div>

        <div class="form-group">
            <label for="grupo">Grupo:</label>
            <input type="text" id="grupo" placeholder="Ejemplo: 3A, 5B" required>
        </div>

        <button onclick="agregarMateria()">Agregar Materia</button>

        <!-- Tabla para listar materias impartidas -->
        <table>
            <thead>
                <tr>
                    <th>Profesor</th>
                    <th>Materia</th>
                    <th>Grupo</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="tablaMaterias">
                <!-- Las materias impartidas aparecerán aquí dinámicamente -->
            </tbody>
        </table>
    </div>

    <script>
        function agregarMateria() {
            let profesor = document.getElementById("profesor").value.trim();
            let materia = document.getElementById("materia").value;
            let grupo = document.getElementById("grupo").value.trim();

            if (profesor === "" || materia === "" || grupo === "") {
                alert("Por favor, complete todos los campos.");
                return;
            }

            let tabla = document.getElementById("tablaMaterias");
            let row = tabla.insertRow();
            row.innerHTML = `
                <td>${profesor}</td>
                <td>${materia}</td>
                <td>${grupo}</td>
                <td><button class="delete-btn" onclick="eliminarMateria(this)">Eliminar</button></td>
            `;

            // Limpiar los campos del formulario
            document.getElementById("profesor").value = "";
            document.getElementById("materia").value = "";
            document.getElementById("grupo").value = "";
        }

        function eliminarMateria(button) {
            let row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

</body>
</html>
