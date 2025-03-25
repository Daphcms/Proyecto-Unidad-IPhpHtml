<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Carreras y Profesores</title>
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
        <h1>Listado de Carreras y Profesores</h1>

        <!-- Tabla para listar carreras y profesores -->
        <table>
            <thead>
                <tr>
                    <th>Carrera</th>
                    <th>Profesor Responsable</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="tablaCarreras">
                <!-- Las carreras se agregarán dinámicamente aquí -->
            </tbody>
        </table>
    </div>

    <script>
        let carreras = [
            { carrera: "Ingeniería en Sistemas", profesor: "Juan Pérez" },
            { carrera: "Administración de Empresas", profesor: "María López" },
            { carrera: "Contaduría Pública", profesor: "Carlos Sánchez" },
            { carrera: "Psicología", profesor: "Ana Martínez" },
            { carrera: "Derecho", profesor: "Pedro Gómez" }
        ];

        function cargarCarreras() {
            let tabla = document.getElementById("tablaCarreras");
            tabla.innerHTML = "";

            carreras.forEach((item, index) => {
                let row = tabla.insertRow();
                row.innerHTML = `
                    <td>${item.carrera}</td>
                    <td>${item.profesor}</td>
                    <td><button class="delete-btn" onclick="eliminarCarrera(${index})">Eliminar</button></td>
                `;
            });
        }

        function eliminarCarrera(index) {
            if (confirm("¿Seguro que deseas eliminar esta carrera?")) {
                carreras.splice(index, 1);
                cargarCarreras();
            }
        }

        window.onload = cargarCarreras;
    </script>

</body>
</html>
