<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro - Cliente </title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<div class="jumbotron jumbotron-fluid">
<div class="container">
  <h1 class="display-4"> Cadastro </h1>
  <p class="lead"> Preencha os campos abaixo e conforme suas informações </p>
  <hr class="my-8">

    <form style="border:solid 1px blue;">
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputId"> ID </label>
          <input type="text" class="form-control" id="inputId" placeholder="ID" required>
        </div>

        <div class="form-group col-md-6">
          <label for="inputNome">Nome</label>
          <input type="text" class="form-control" id="inputNome" placeholder="Nome" required>
        </div>
              
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputEmail">Email</label>
          <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
        </div>
        <div class="form-group col-md-6">
          <label for="inputSenha">Senha</label>
          <input type="password" class="form-control" id="inputSenha" placeholder="Senha" required>
        </div>
      </div>
          
      <button type="submit" class="btn btn-primary"> Enviar </button>
    </form>
    <hr>
    <a href="<?php echo action("ClienteController@listar"); ?> "> Listar cadastrados </a>

</div>
</div>

</body>
</html>