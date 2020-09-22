<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tabelas</title>

</head>

<body>


   <div> 
    <table>
    <caption>Tabela Estados</caption>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Sigla</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while ($e = $estados->fetch()) {
            echo "<tr>
            <td>" . $e["id"] . "</td>
            <td>" . $e["nome"] . "</td>
            <td>" . $e["sigla"] . " </td>
            </tr>";
            }
        ?>
    </tbody>
    </table>
</div>
<br>
<br>

<div>
  
    <table>
    <caption>Tabela Cidades</caption>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Estado_id</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while ($c = $cidades->fetch()) {
                echo "<tr>
                <td>" . $p["id"] . "</td>
                <td>" . $p["nome"] . "</td>
                <td>" . $p["estado_id"] . " </td>
                </tr>";
                }
        ?>
    </tbody>
    </table>
</div>
   
<br>
<br>


<div>
    <table>
    <caption>Tabela Produtos</caption>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Unidade</th>
        </tr>
    </thead>

    <tbody>
        <?php
            while ($p = $produtos->fetch()) {
            echo "<tr>
            <td>" . $p["id"] . "</td>
            <td>" . $p["nome"] . "</td>
            <td>" . $p["un"] . " </td>
            </tr>";
            }
        ?>
    </tbody>
    </table>
</div>
</body>

</html>