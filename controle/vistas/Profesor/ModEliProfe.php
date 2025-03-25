<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar o Eliminar Profesor</title>
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

        .edit-btn, .delete-btn {
            padding: 8px 12px;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            margin-right: 5px;
        }

        .edit-btn {
            background-color: #007bff;
        }

        .edit-btn:hover {
            background-color: #0056b3;
        }

        .delete-btn {
            background-color: #dc3545;
        }

        .delete-btn:hover {
            background-color: #c82333;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin: 10px 0;
            text-align: left;
        }

        label {
            font-size: 16px;
        }

        input, select {
            padding: 8px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #28a745;
            color: white;
            padding: 10px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Modificar o Eliminar Profesor</h1>

        <!-- Tabla de profesores -->
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
                <!-- Los profesores aparecerán aquí dinámicamente -->
            </tbody>
        </table>

        <!-- Formulario de edición -->
        <div id="formEditar" style="display: none;">
            <h2>Editar Profesor</h2>
            <div class="form-group">
                <label for="editNombre">Nombre:</label>
                <input type="text" id="editNombre">
            </div>
            <div class="form-group">
                <label for="editMateria">Materia:</label>
                <select id="editMateria">
                    <option value="Matemáticas">Matemáticas</option>
                    <option value="Historia">Historia</option>
                    <option value="Ciencias">Ciencias</option>
                    <option value="Inglés">Inglés</option>
                    <option value="Educación Física">Educación Física</option>
                </select>
            </div>
            <div class="form-group">
                <label for="editCorreo">Correo:</label>
                <input type="email" id="editCorreo">
            </div>
            <div class="form-group">
                <label for="editTelefono">Teléfono:</label>
                <input type="tel" id="editTelefono">
            </div>
            <button onclick="guardarEdicion()">Guardar Cambios</button>
        </div>
    </div>

    <script>
        let profesores = [
            { nombre: "Juan Pérez", materia: "Matemáticas", correo: "juan@example.com", telefono: "555-1234" },
            { nombre: "María López", materia: "Historia", correo: "maria@example.com", telefono: "555-5678" },
            { nombre: "Carlos Sánchez", materia: "Ciencias", correo: "carlos@example.com", telefono: "555-9101" }
        ];

        let profesorEditando = null;

        function cargarProfesores() {
            let tabla = document.getElementById("tablaProfesores");
            tabla.innerHTML = "";

            profesores.forEach((profesor, index) => {
                let row = tabla.insertRow();
                row.innerHTML = `
                    <td>${profesor.nombre}</td>
                    <td>${profesor.materia}</td>
                    <td>${profesor.correo}</td>
                    <td>${profesor.telefono}</td>
                    <td>
                        <button class="edit-btn" onclick="editarProfesor(${index})">Editar</button>
                        <button class="delete-btn" onclick="eliminarProfesor(${index})">Eliminar</button>
                    </td>
                `;
            });
        }

        function editarProfesor(index) {
            profesorEditando = index;
            let profesor = profesores[index];

            document.getElementById("editNombre").value = profesor.nombre;
            document.getElementById("editMateria").value = profesor.materia;
            document.getElementById("editCorreo").value = profesor.correo;
            document.getElementById("editTelefono").value = profesor.telefono;

            document.getElementById("formEditar").style.display = "block";
        }

        function guardarEdicion() {
            if (profesorEditando === null) return;

            let nombre = document.getElementById("editNombre").value;
            let materia = document.getElementById("editMateria").value;
            let correo = document.getElementById("editCorreo").value;
            let telefono = document.getElementById("editTelefono").value;

            profesores[profesorEditando] = { nombre, materia, correo, telefono };
            profesorEditando = null;

            document.getElementById("formEditar").style.display = "none";
            cargarProfesores();
        }

        function eliminarProfesor(index) {
            if (confirm("¿Seguro que deseas eliminar este profesor?")) {
                profesores.splice(index, 1);
                cargarProfesores();
            }
        }

        window.onload = cargarProfesores;
    </script>

</body>
</html>
