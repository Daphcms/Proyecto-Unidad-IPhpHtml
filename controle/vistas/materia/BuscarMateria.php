<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Materias</title>
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
        }
        #searchBox {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background: white;
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
        tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>

    <h1>Buscar Materias</h1>
    <div class="container">
        <input type="text" id="searchBox" placeholder="Buscar materia..." onkeyup="buscarMateria()">
        
        <table>
            <thead>
                <tr>
                    <th>Materia</th>
                    <th>Carrera</th>
                    <th>Profesor</th>
                </tr>
            </thead>
            <tbody id="materiasTable">
                <tr>
                    <td>Cálculo</td>
                    <td>Ingeniería</td>
                    <td>Dr. Ramírez</td>
                </tr>
                <tr>
                    <td>Física</td>
                    <td>Ingeniería</td>
                    <td>Ing. Pérez</td>
                </tr>
                <tr>
                    <td>Programación</td>
                    <td>Ingeniería</td>
                    <td>Lic. Gómez</td>
                </tr>
                <tr>
                    <td>Anatomía</td>
                    <td>Medicina</td>
                    <td>Dra. López</td>
                </tr>
                <tr>
                    <td>Fisiología</td>
                    <td>Medicina</td>
                    <td>Dr. Castro</td>
                </tr>
                <tr>
                    <td>Derecho Penal</td>
                    <td>Derecho</td>
                    <td>Lic. Hernández</td>
                </tr>
                <tr>
                    <td>Derecho Civil</td>
                    <td>Derecho</td>
                    <td>Lic. Torres</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        function buscarMateria() {
            let input = document.getElementById("searchBox").value.toLowerCase();
            let table = document.getElementById("materiasTable");
            let rows = table.getElementsByTagName("tr");

            for (let i = 0; i < rows.length; i++) {
                let cells = rows[i].getElementsByTagName("td");
                let found = false;

                for (let j = 0; j < cells.length; j++) {
                    if (cells[j].innerText.toLowerCase().includes(input)) {
                        found = true;
                        break;
                    }
                }

                rows[i].style.display = found ? "" : "none";
            }
        }
    </script>

</body>
</html>
