<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materias por Carrera</title>
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
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        table {
            width: 100%;
            margin: 20px 0;
            border-collapse: collapse;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 2px solid white;
        }
        th {
            background-color: #222;
            color: white;
        }
        .ingenieria {
            background-color: #4CAF50;
            color: white;
        }
        .medicina {
            background-color: #FF5733;
            color: white;
        }
        .derecho {
            background-color: #3498DB;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Materias por Carrera</h1>
    <div class="container">
        
        <h2 class="ingenieria">Ingeniería</h2>
        <table>
            <tr class="ingenieria">
                <th>Materia</th>
                <th>Profesor</th>
            </tr>
            <tr>
                <td>Cálculo</td>
                <td>Dr. Ramírez</td>
            </tr>
            <tr>
                <td>Física</td>
                <td>Ing. Pérez</td>
            </tr>
            <tr>
                <td>Programación</td>
                <td>Lic. Gómez</td>
            </tr>
        </table>

        <h2 class="medicina">Medicina</h2>
        <table>
            <tr class="medicina">
                <th>Materia</th>
                <th>Profesor</th>
            </tr>
            <tr>
                <td>Anatomía</td>
                <td>Dra. López</td>
            </tr>
            <tr>
                <td>Fisiología</td>
                <td>Dr. Castro</td>
            </tr>
            <tr>
                <td>Farmacología</td>
                <td>Dra. Martínez</td>
            </tr>
        </table>

        <h2 class="derecho">Derecho</h2>
        <table>
            <tr class="derecho">
                <th>Materia</th>
                <th>Profesor</th>
            </tr>
            <tr>
                <td>Derecho Penal</td>
                <td>Lic. Hernández</td>
            </tr>
            <tr>
                <td>Derecho Civil</td>
                <td>Lic. Torres</td>
            </tr>
            <tr>
                <td>Ética Jurídica</td>
                <td>Lic. Flores</td>
            </tr>
        </table>

    </div>
</body>
</html>