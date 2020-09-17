<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de estados</title>
</head>
<body>
    

    <table>
        <h1>Lista de estados</h1>
        
        <?php
             echo  "<th>Estado</th>";
             echo "<th>Sigla</th>";
             
            while($e = $estados->fetch()){
               echo "<tr>";
                    echo "<td>" .$e["nome"] ." " .$e["sigla"] ."</td>\n";
                echo "</tr>";
            }
        ?>
    </table>

</body>
</html>