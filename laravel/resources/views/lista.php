<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Views e Laravel </title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

<style>
   div#centralizar h1{
        color: blue;
   }
</style>

<body>
    <div class="container" id="centralizar">
        <h1> Recebendo valor do controller </h1>
        <?php
            echo $msg;
        ?>
    </div>

    <?php 
        $cabecalho = "<strong> ID | NOME | EMAIL | PASS </strong>"."<br>";
        echo $cabecalho;
        //echo $nomes;
        foreach ($nomes as $key => $user){
            $id = $user["id"];
            $nome = $user["nome"];
            $email = $user["email"];
            $pass = $user["pass"];
            
            echo $id ." ".$nome." ".$email." ".$pass." "."<br>";
        }
    ?>
<br>

<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Senha</th>
      <th scope="col">Ação</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($nomes as $key => $user){
      
      $linha = 
            "<tr>" . 
                "<th scope='row'>" . $user['id'] . "</th>".
                "<td> " . $user['nome'] . "</td>".
                "<td> " . $user['email'] . "</td>".
                "<td> " . $user['pass'] ." </td> ".
                "<td> " . 
                  //  "<a href='".action("ClienteController@editar")."/". $user['id'] ."'>" ." Editar </a>".
                    "<a href='".action("ClienteController@editar", $user['id'])."'>" . " Editar </a>".  
                " </td> ".
                
            "</tr>";
        
            echo $linha;
        }
    ?>

  </tbody>
</table>

</div>

</body>
</html>