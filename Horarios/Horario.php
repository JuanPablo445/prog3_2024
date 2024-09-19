<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            margin-top: 10px;
            display: block;
        }
        select, button {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<form method="POST" action="">
    <h2>Selecciona tu horario</h2>

    <label for="curso">Curso:</label>
    <select id="curso" name="curso">
        <option value="primero">Primero</option>
        <option value="segundo">Segundo</option>
        <option value="tercero">Tercero</option>
        <option value="cuarto">Cuarto</option>
        <option value="quinto">Quinto</option>
        <option value="sexto">Sexto</option>
        <option value="septimo">Septimo</option>
    </select>

    <label for="division">División:</label>
    <select id="division" name="division">
        <option value="|">|</option>
        <option value="||">||</option>
        <option value="|||">|||</option>
    </select>

    <label for="turno">Turno:</label>
    <select id="turno" name="turno">
        <option value="mañana">Mañana</option>
        <option value="tarde">Tarde</option>
        <option value="noche">Noche</option>
    </select>

    <button type="submit" name="buscar">Buscar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $curso = $_POST['curso'];
    $division = $_POST['division'];
    $turno = $_POST['turno'];

    if ($curso == 'primero' && $division == '|' && $turno == 'mañana') {
    
        header('Location: PrimeroPrimera.php');
        exit();
    } else {
        echo "<p>No hay horarios disponibles para esta selección.</p>";
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $curso = $_POST['curso'];
    $division = $_POST['division'];
    $turno = $_POST['turno'];

    if ($curso == 'primero' && $division == '||' && $turno == 'tarde') {
    
        header('Location: PrimeroSegunda.php');
        exit();
    } else {
        echo "<p>No hay horarios disponibles para esta selección.</p>";
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $curso = $_POST['curso'];
    $division = $_POST['division'];
    $turno = $_POST['turno'];

    if ($curso == 'primero' && $division == '|||' && $turno == 'mañana') {
    
        header('Location: PrimeroTercera.php');
        exit();
    } else {
        echo "<p>No hay horarios disponibles para esta selección.</p>";
    }
}
?>
</body>
</html>