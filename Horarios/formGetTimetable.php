<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horarios</title>
</head>
<body>
<style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        select {
            width: 100%;
            padding: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h1 style="text-align:center;">Seleccionar Curso</h1>

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
                    <select id="curso">
                        <option value="1º Año">1º Año</option>
                        <option value="2º Año">2º Año</option>
                        <option value="3º Año">3º Año</option>
                        <option value="4º Año">4º Año</option>
                        <option value="5º Año">5º Año</option>
                        <option value="6º Año">6º Año</option>
                        <option value="7º Año">7º Año</option>
                    </select>
                </td>
                <td>
                    <select id="division">
                        <option value="Primera">Primera</option>
                        <option value="Segunda">Segunda</option>
                        <option value="Tercera">Tercera</option>
                    </select>
                </td>
                <td>
                    <select id="turno">
                        <option value="Mañana">Mañana</option>
                        <option value="Tarde">Tarde</option>
                        <option value="Noche">Noche</option>
                    </select>
                </td>
            </tr>
        </tbody>
    </table>

    <div style="text-align:center; margin-top: 20px;">
        <button type="button" onclick="buscar()">Buscar</button>
    </div>

    <script>
        function buscar() {
           
            var curso = document.getElementById("curso").value;
            var division = document.getElementById("division").value;
            var turno = document.getElementById("turno").value;

          
            alert("Buscando curso: " + curso + ", División: " + division + ", Turno: " + turno);

        }
    </script>

</body
<?php
    if (!isset($_REQUEST["buscar"])){
?>

<?php
    } else{
        include("timetable.class.php");
        $timetable= new timetable();
        $alltimetable= $timetable->getAlltimetable();
        if($alltimetable){
            foreach($alltimetable as $data){
                print "<tr>";
                print"<td>".$data["Curso"]."</td>";
                print"<td>".$data["Division"]."</td>";
                print"<td>".$data["Turno"]."</td>";
                print "<td> <input type='button' name='buscar' value='Buscar' onclick=\"window.location.href='formEditStudent.php?idStudent=".$data["idStudent"]."';\" /> ";
            }
        }else{
            print"No existe";
        }       
    }
?>
</body>
</html>