<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración del Sistema Escolar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            transition: background-color 0.3s, color 0.3s;
        }

        .config-container {
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

        .config-content {
            padding: 20px;
            text-align: left;
        }

        .config-option {
            margin: 15px 0;
            font-size: 18px;
        }

        select, input, button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin-top: 10px;
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

        #preview-logo {
            width: 120px;
            height: 120px;
            border-radius: 10px;
            object-fit: cover;
            margin-top: 10px;
            border: 2px solid #ddd;
        }

        /* Modo oscuro */
        .dark-mode {
            background-color: #222;
            color: white;
        }

        .dark-mode .config-container {
            background: #333;
            color: white;
        }
    </style>
</head>
<body>

    <div class="config-container">
        <h1>Configuración del Sistema Escolar</h1>
        <div class="config-content">
            
            <!-- Subir logotipo del sistema escolar -->
            <div class="config-option">
                <label for="fileLogo">Cambiar Logotipo:</label>
                <input type="file" id="fileLogo" accept="image/*">
                <br>
                <img id="preview-logo" src="https://via.placeholder.com/120" alt="Logotipo del sistema">
            </div>

            <!-- Configuración del año escolar -->
            <div class="config-option">
                <label for="anioEscolar">Seleccionar Año Escolar:</label>
                <select id="anioEscolar">
                    <option value="2024-2025">2024 - 2025</option>
                    <option value="2025-2026">2025 - 2026</option>
                    <option value="2026-2027">2026 - 2027</option>
                </select>
            </div>

            <!-- Configuración de tipo de usuario -->
            <div class="config-option">
                <label for="tipoUsuario">Tipo de Usuario:</label>
                <select id="tipoUsuario">
                    <option value="Administrador">Administrador</option>
                    <option value="Profesor">Profesor</option>
                    <option value="Alumno">Alumno</option>
                </select>
            </div>

            <!-- Configuración de tema (modo oscuro) -->
            <div class="config-option">
                <label for="themeSelect">Seleccionar Tema:</label>
                <select id="themeSelect">
                    <option value="light">Modo Claro</option>
                    <option value="dark">Modo Oscuro</option>
                </select>
            </div>

            <!-- Botón para guardar -->
            <button onclick="guardarConfiguracion()">Guardar Cambios</button>

        </div>
    </div>

    <script>
        // Cambiar logotipo del sistema
        document.getElementById("fileLogo").addEventListener("change", function(event) {
            let file = event.target.files[0];
            if (file) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById("preview-logo").src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });

        // Cambiar tema (modo claro/oscuro)
        document.getElementById("themeSelect").addEventListener("change", function() {
            let theme = this.value;
            if (theme === "dark") {
                document.body.classList.add("dark-mode");
            } else {
                document.body.classList.remove("dark-mode");
            }
        });

        // Guardar configuración
        function guardarConfiguracion() {
            let anioEscolar = document.getElementById("anioEscolar").value;
            let tipoUsuario = document.getElementById("tipoUsuario").value;
            let theme = document.getElementById("themeSelect").value;

            alert(`Configuración guardada:\n📅 Año Escolar: ${anioEscolar}\n👤 Tipo de Usuario: ${tipoUsuario}\n🎨 Tema: ${theme}`);
        }
    </script>

</body>
</html>
