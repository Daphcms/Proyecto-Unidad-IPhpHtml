<!-- <body>

<form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de la carrera</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Clave</label>
    <input type="text" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
</body>  -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Carrera y Asignar Profesor</title>
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
        <h1>Registrar Carrera y Asignar Profesor</h1>

        <!-- Formulario para registrar carrera -->
        <div class="form-group">
            <label for="carrera">Nombre de la Carrera:</label>
            <input type="text" id="carrera" placeholder="Ejemplo: Ingeniería en Sistemas" required>
        </div>

        <div class="form-group">
            <label for="profesor">Profesor Responsable:</label>
            <select id="profesor">
                <option value="Juan Pérez">Juan Pérez</option>
                <option value="María López">María López</option>
                <option value="Carlos Sánchez">Carlos Sánchez</option>
                <option value="Ana Martínez">Ana Martínez</option>
                <option value="Pedro Gómez">Pedro Gómez</option>
            </select>
        </div>

        <button onclick="registrarCarrera()">Registrar Carrera</button>

        <!-- Tabla para listar carreras registradas -->
        <table>
            <thead>
                <tr>
                    <th>Carrera</th>
                    <th>Profesor Responsable</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="tablaCarreras">
                <!-- Las carreras aparecerán aquí dinámicamente -->
            </tbody>
        </table>
    </div>

    <script>
        function registrarCarrera() {
            let carrera = document.getElementById("carrera").value.trim();
            let profesor = document.getElementById("profesor").value;

            if (carrera === "" || profesor === "") {
                alert("Por favor, complete todos los campos.");
                return;
            }

            let tabla = document.getElementById("tablaCarreras");
            let row = tabla.insertRow();
            row.innerHTML = `
                <td>${carrera}</td>
                <td>${profesor}</td>
                <td><button class="delete-btn" onclick="eliminarCarrera(this)">Eliminar</button></td>
            `;

            // Limpiar los campos del formulario
            document.getElementById("carrera").value = "";
            document.getElementById("profesor").value = "Juan Pérez";
        }

        function eliminarCarrera(button) {
            let row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>

</body>
</html>
