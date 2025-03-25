<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Estudiantes y Clases</title>
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

        select, button {
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
        <h1>Gestión de Estudiantes y Clases</h1>

        <!-- Formulario para asignar estudiante a clase -->
        <div class="form-group">
            <label for="estudiante">Seleccionar Estudiante:</label>
            <select id="estudiante">
                <option value="Juan Pérez">Juan Pérez</option>
                <option value="María López">María López</option>
                <option value="Carlos Sánchez">Carlos Sánchez</option>
                <option value="Ana Martínez">Ana Martínez</option>
                <option value="Pedro Gómez">Pedro Gómez</option>
            </select>
        </div>

        <div class="form-group">
            <label for="clase">Seleccionar Clase:</label>
            <select id="clase">
                <option value="Matemáticas">Matemáticas</option>
                <option value="Historia">Historia</option>
                <option value="Ciencias">Ciencias</option>
                <option value="Inglés">Inglés</option>
                <option value="Educación Física">Educación Física</option>
            </select>
        </div>

        <button onclick="asignarClase()">Asignar Clase</button>

        <!-- Tabla para listar asignaciones -->
        <table>
            <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>Clase</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="tablaAsignaciones">
                <!-- Las asignaciones se agregarán dinámicamente aquí -->
            </tbody>
        </table>
    </div>

    <script>
        function asignarClase() {
            let estudiante = document.getElementById("estudiante").value;
            let clase = document.getElementById("clase").value;

            let tabla = document.getElementById("tablaAsignaciones");
            let row = tabla.insertRow();
            row.innerHTML = `
                <td>${estudiante}</td>
                <td>${clase}</td>
                <td><button class="delete-btn" onclick="eliminarAsignacion(this)">Eliminar</button></td>
            `;
        }

        function eliminarAsignacion(button) {
            let row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

</body>
</html>

<!-- Vista Estatus Clase
<button type="button" class="btn btn-primary">Primary</button>
<button type="button" class="btn btn-secondary">Secondary</button>
<button type="button" class="btn btn-success">Success</button>
<button type="button" class="btn btn-danger">Danger</button>
<button type="button" class="btn btn-warning">Warning</button>
<button type="button" class="btn btn-info">Info</button>
<button type="button" class="btn btn-light">Light</button>
<button type="button" class="btn btn-dark">Dark</button>

<button type="button" class="btn btn-link">Link</button> -->