<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Student</title>
</head>
<body>
   <h1>Panel de Estudiantes</h1>
   <table>
        <thead>
            <tr>
                <th>ID Estudiante</th>
                <th>Apellido</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Fecha Nac.</th>
                <th>Tel&eacute;fono</th>
                <th>Acciones</th>
            </tr>   
        </thead>
        <tbody>
            <?php
                include("model/student.class.php");
                $student= new Student();
                $allStudent= $student->getAllStudents();
                if($allStudent){
                    foreach($allStudents as $data){
                        print "<tr>";
                        print"<td>".$data["idStudent"]."</td>";
                        print"<td>".$data["Surname"]."</td>";
                        print"<td>".$data["name"]."</td>";
                        print"<td>".$data["dni"]."</td>";
                        print"<td>".$data["birthdate"]."</td>";
                        print"<td>".$data["phone"]."</td>";
                        print"<td> colocar los 2 botones</td>";
                        print "<td> <button type='button' name='editar' value='Editar' onclick=\"window.location.href=formEditStudent.php?idStudent=".$data["idStudent"]."';\" /> ";
                        print " <button type='button' name='eliminar' value='Eliminar' onclick=''/> </td";
                        print "</tr>";
                    }
                }else{
                    print"No existe estudiantes cargados";
                }     
            ?>
        </tbody>
   </table>
</body>
</html>