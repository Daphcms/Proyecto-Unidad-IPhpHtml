<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Estudiantes</title>
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

        .search-box {
            margin: 15px 0;
            display: flex;
            justify-content: center;
        }

        input {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
    </style>
</head>
<body>

    <div class="container">
        <h1>Listado de Estudiantes</h1>

        <!-- Buscador de estudiantes -->
        <div class="search-box">
            <input type="text" id="buscar" placeholder="Buscar por nombre o grado..." onkeyup="buscarEstudiante()">
        </div>

        <!-- Tabla de estudiantes -->
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Grado</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody id="tablaEstudiantes">
                <!-- Los estudiantes serán agregados dinámicamente -->
            </tbody>
        </table>
    </div>

    <script>
        // Lista de estudiantes de prueba (puede reemplazarse con datos reales)
        let estudiantes = [
            { nombre: "Juan Pérez", edad: 15, grado: "Secundaria", correo: "juan@example.com", telefono: "555-1234" },
            { nombre: "María López", edad: 17, grado: "Preparatoria", correo: "maria@example.com", telefono: "555-5678" },
            { nombre: "Carlos Sánchez", edad: 12, grado: "Primaria", correo: "carlos@example.com", telefono: "555-9101" },
            { nombre: "Ana Martínez", edad: 14, grado: "Secundaria", correo: "ana@example.com", telefono: "555-1122" },
            { nombre: "Pedro Gómez", edad: 18, grado: "Preparatoria", correo: "pedro@example.com", telefono: "555-3344" }
        ];

        function cargarEstudiantes() {
            let tabla = document.getElementById("tablaEstudiantes");
            tabla.innerHTML = ""; // Limpiar la tabla antes de cargar

            estudiantes.forEach(estudiante => {
                let row = tabla.insertRow();
                row.innerHTML = `
                    <td>${estudiante.nombre}</td>
                    <td>${estudiante.edad}</td>
                    <td>${estudiante.grado}</td>
                    <td>${estudiante.correo}</td>
                    <td>${estudiante.telefono}</td>
                `;
            });
        }

        function buscarEstudiante() {
            let input = document.getElementById("buscar").value.toLowerCase();
            let tabla = document.getElementById("tablaEstudiantes");
            tabla.innerHTML = ""; // Limpiar la tabla

            estudiantes.forEach(estudiante => {
                if (estudiante.nombre.toLowerCase().includes(input) || estudiante.grado.toLowerCase().includes(input)) {
                    let row = tabla.insertRow();
                    row.innerHTML = `
                        <td>${estudiante.nombre}</td>
                        <td>${estudiante.edad}</td>
                        <td>${estudiante.grado}</td>
                        <td>${estudiante.correo}</td>
                        <td>${estudiante.telefono}</td>
                    `;
                }
            });
        }

        // Cargar estudiantes al cargar la página
        window.onload = cargarEstudiantes;
    </script>

</body>
</html>
