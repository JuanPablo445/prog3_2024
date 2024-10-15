<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios</title>
    <link rel="stylesheet" href="css\timetable.css">
</head>
<body>

<?php
if (!isset($_REQUEST["buscar"])) {
?>

    <h1 style="text-align:center;">Seleccionar Curso</h1>

    <form method="GET" action="">
        <table>
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>División</th>
                    <th>Turno</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <select name="course">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                    </td>
                    <td>
                        <select name="division">
                            <option value="Primera">Primera</option>
                            <option value="Segunda">Segunda</option>
                            <option value="Tercera">Tercera</option>
                        </select>
                    </td>
                    <td>
                        <select name="shift">
                            <option value="Mañana">Mañana</option>
                            <option value="Tarde">Tarde</option>
                            <option value="Noche">Noche</option>
                        </select>
                    </td>
                </tr>
            </tbody>
        </table>

        <div style="text-align:center; margin-top: 20px;">
            <button type="submit" name="buscar" value="1">Buscar</button>
        </div>
    </form>

<?php
} else {
    $course = $_REQUEST['course'];
    $division = $_REQUEST['division'];
    $shift = $_REQUEST['shift'];

    $conn = new mysqli("localhost", "root", "", "horarios_db");

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $sql = "SELECT course, division, shift FROM timetable WHERE course=? AND division=? AND shift=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $course, $division, $shift);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<h1 style='text-align:center;'>Información del Curso - $course - $division</h1>";
        echo "<table border='1' style='margin:auto;'><tr><th>Curso</th><th>División</th><th>Turno</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["course"] . "</td><td>" . $row["division"] . "</td><td>" . $row["shift"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "<h1 style='text-align:center;'>No se encontraron horarios para $course - $division</h1>";
    }

    $conn->close();
}
?>

</body>
</html>