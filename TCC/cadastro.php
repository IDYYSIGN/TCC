<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastro</title>
</head>
<body>

        <div class="container">
          <form name="cadusuario" method="post" action="cadastro.php">
              <div class="form-group">
                <label for="email">Email</label> 
                <input id="email" name="email" placeholder="Digite o email da conta" type="text" required="required" class="form-control">
              </div>
            <div class="form-group">
              <label for="senha">Senha</label> 
              <div class="input-group">
                <input id="senha" name="senha" type="password" required="required" class="form-control"> 
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="fa fa-eye-slash" id="olho"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- <div class="form-group">
              <label for="ConfSenha">Confirme a senha</label> 
              <div class="input-group">
                <input id="ConfSenha" name="ConfSenha" type="password" required="required" class="form-control"> 
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="fa fa-eye-slash" id="olho2"></i>
                  </div>
                </div>
              </div>
            </div>   -->
        <div class="form-group">
          <button name="submit" type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>

      <?php
      if(isset($_POST['email']) && isset($_POST['senha'])){

      $email = $_POST['email'];
      $senha = $_POST['senha'];


      $campos = [
        "email"  => "'$email'",
        "senha"   => "'$senha'",
      ];

      include_once("crud.php");

      cadastrar("usuarios", $campos);

      }
      ?>
</div>

<script src="visualisar.js"></script>

    
</body>
</html>