<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="sortcut icon" href="css/imagens/logo.gif" type="image/x-icon" />
    <title>Appdido</title>
</head>
<body>
<section>
    <div class="principal">
        <h1>Eba, tem cidade nova sendo atendida pela Appdido!?</h1>
        <form action="crud/logica_usuario.php" method="POST">
          <input id="" name="nova_cidade" required placeholder="Digite aqui o nome da cidade"><br>
          <div class="select">
            <select name="estado" id="">
            <option selected disabled>Estado</option>
            <option value="AC">AC</option>
            <option value="AL">AL</option>
            <option value="AP">AP</option>
            <option value="AM">AM</option>
            <option value="BA">BA</option>
            <option value="CE">CE</option>
            <option value="DF">DF</option>
            <option value="ES">ES</option>
            <option value="GO">GO</option>
            <option value="MA">MA</option>
            <option value="MT">MT</option>
            <option value="MS">MS</option>
            <option value="MG">MG</option>
            <option value="PA">PA</option>
            <option value="PB">PB</option>
            <option value="PR">PR</option>
            <option value="PE">PE</option>
            <option value="PI">PI</option>
            <option value="RR">RR</option>
            <option value="RO">RO</option>
            <option value="RJ">RJ</option>
            <option value="RN">RN</option>
            <option value="RS">RS</option>
            <option value="SC">SC</option>
            <option value="SP">SP</option>
            <option value="SE">SE</option>
            <option value="TO">TO</option>
            </select><br>
          </div>
          <input id="bt" name="cadastrar" type="submit" value="Cadastrar cidade"></input>
        </form>
        <div>
          <h4> <font color="white">
            <?php 
              session_start();
              if (isset($_SESSION['mensagem']))
              {
                echo $_SESSION['mensagem'];
                unset($_SESSION['mensagem']);
              }
            ?> 
          </font></h4>
        </div>
        <a href="index.html">Voltar à busca</a>
</section>  
</body>
</html>