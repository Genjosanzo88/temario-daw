<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de notas</title>
    <style>
        table {
            border-collapse: collapse;
        }

        td {
            text-align: center;
        }

        tr:nth-child(odd) {
            background-color: lightblue;
        }

        tr:nth-child(even) {
            background-color: lightcyan;
        }

        th {
            background-color: skyblue;
        }
    </style>
</head>
<body>
    <?php 
    if(isset($_GET["arrAlumnos"])) {
        $arrAlumnos = unserialize($_GET["arrAlumnos"]);
        $notaTotal = 0;

        if(!empty($arrAlumnos)) {
            echo "<table>";
            echo "<caption>TABLA DE NOTAS</caption>";
            echo "<thead><tr><th>ALUMNO</th><th>NOTA</th></tr></thead>";
            echo "<tbody>";
            foreach($arrAlumnos as $alumno) {
                echo "<tr><td>$alumno[0]</td><td>$alumno[1]</td></tr>";
                $notaTotal += $alumno[1];
            }
            echo "</tbody>";
            echo "<tfoot><tr><th>NOTA MEDIA</th><th>" . $notaTotal / count($arrAlumnos) . "</th></tr></tfoot>";
            echo "</table>";
        } else {
            echo "<p>No existen alumnos listados.</p>";
        }
    }
    ?>
</body>
</html>