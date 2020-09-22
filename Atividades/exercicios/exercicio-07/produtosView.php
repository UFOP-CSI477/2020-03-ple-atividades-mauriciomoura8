<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="tabela.css">

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
     integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Lista de produtos</title>
</head>
<body>

  




<table>
  <thead>
    <tr>
      <th>Índice</th>
      <th>Nome</th>
      <th>Unidade</th>
    </tr>
  </thead>

  <tbody>

    <?php
   
        while($p = $produtos->fetch()){
            echo "<tr>" 
            
            ."<td>" .$p["id"]."</td>"
            ."<td>" .$p["nome"]. "</td>" 
            ."<td>" .$p["un"]."</td>".
            
            "</tr>";

        }
        
    ?>

    </tbody>
    </table>

   
    
    <a type="button" class="btn btn-primary" href="produtosViewInsert.php" role="button">Inserir novo</a>
    
    <a type="button" class="btn btn-primary" href="produtosDelete.php" role="button">Apagar itens</a>

   

</body>
</html>