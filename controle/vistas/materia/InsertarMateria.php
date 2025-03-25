
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar Materias</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        h1 {
            background-color: #333;
            color: white;
            padding: 15px;
            margin: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            background-color: #28a745;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border: none;
        }
        button:hover {
            background-color: #218838;
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

    <h1>Insertar Materias</h1>
    <div class="container">
        <h2>Agregar Nueva Materia</h2>
        <input type="text" id="materia" placeholder="Nombre de la materia" required>
        <select id="carrera">
            <option value="">Seleccione la carrera</option>
            <option value="Ingeniería">Ingeniería</option>
            <option value="Medicina">Medicina</option>
            <option value="Derecho">Derecho</option>
        </select>
        <input type="text" id="profesor" placeholder="Nombre del profesor" required>
        <button onclick="agregarMateria()">Agregar Materia</button>
    </div>

    <div class="container">
        <h2>Lista de Materias</h2>
        <table>
            <thead>
                <tr>
                    <th>Materia</th>
                    <th>Carrera</th>
                    <th>Profesor</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="materiasTable">
                <!-- Las materias se agregarán aquí dinámicamente -->
            </tbody>
        </table>
    </div>

    <script>
        function agregarMateria() {
            let materia = document.getElementById("materia").value.trim();
            let carrera = document.getElementById("carrera").value;
            let profesor = document.getElementById("profesor").value.trim();

            if (materia === "" || carrera === "" || profesor === "") {
                alert("Por favor, complete todos los campos.");
                return;
            }

            let table = document.getElementById("materiasTable");
            let row = table.insertRow();
            row.innerHTML = `
                <td>${materia}</td>
                <td>${carrera}</td>
                <td>${profesor}</td>
                <td><button class="delete-btn" onclick="eliminarMateria(this)">Eliminar</button></td>
            `;

            // Limpiar los campos del formulario
            document.getElementById("materia").value = "";
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
