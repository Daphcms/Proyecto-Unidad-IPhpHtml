
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Profesores</title>
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
        <h1>Listado de Profesores</h1>

        <!-- Buscador de profesores -->
        <div class="search-box">
            <input type="text" id="buscar" placeholder="Buscar por nombre o materia..." onkeyup="buscarProfesor()">
        </div>

        <!-- Tabla de profesores -->
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Materia</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                </tr>
            </thead>
            <tbody id="tablaProfesores">
                <!-- Los profesores serán agregados dinámicamente -->
            </tbody>
        </table>
    </div>

    <script>
        // Lista de profesores de prueba (puede reemplazarse con datos reales)
        let profesores = [
            { nombre: "Juan Pérez", materia: "Matemáticas", correo: "juan@example.com", telefono: "555-1234" },
            { nombre: "María López", materia: "Historia", correo: "maria@example.com", telefono: "555-5678" },
            { nombre: "Carlos Sánchez", materia: "Ciencias", correo: "carlos@example.com", telefono: "555-9101" },
            { nombre: "Ana Martínez", materia: "Inglés", correo: "ana@example.com", telefono: "555-1122" },
            { nombre: "Pedro Gómez", materia: "Educación Física", correo: "pedro@example.com", telefono: "555-3344" }
        ];

        function cargarProfesores() {
            let tabla = document.getElementById("tablaProfesores");
            tabla.innerHTML = ""; // Limpiar la tabla antes de cargar

            profesores.forEach(profesor => {
                let row = tabla.insertRow();
                row.innerHTML = `
                    <td>${profesor.nombre}</td>
                    <td>${profesor.materia}</td>
                    <td>${profesor.correo}</td>
                    <td>${profesor.telefono}</td>
                `;
            });
        }

        function buscarProfesor() {
            let input = document.getElementById("buscar").value.toLowerCase();
            let tabla = document.getElementById("tablaProfesores");
            tabla.innerHTML = ""; // Limpiar la tabla

            profesores.forEach(profesor => {
                if (profesor.nombre.toLowerCase().includes(input) || profesor.materia.toLowerCase().includes(input)) {
                    let row = tabla.insertRow();
                    row.innerHTML = `
                        <td>${profesor.nombre}</td>
                        <td>${profesor.materia}</td>
                        <td>${profesor.correo}</td>
                        <td>${profesor.telefono}</td>
                    `;
                }
            });
        }

        // Cargar profesores al cargar la página
        window.onload = cargarProfesores;
    </script>

</body>
</html>
