<?php
include('conexao.php');

$id = $_GET['id'];

?>

<html>

<head>
  <meta charset="utf-8">
  <title>Edite os dados inseridos</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <style type="text/css">
    #tamanhoContainer {
      width: 500px;
    }

    #botao {
      background-color: #FEC68D;
      color: #ffffff
    }
  </style>


  <?php 
  ?>



  <div class="container" id="tamanhoContainer" style="margin-top: 40px">

    <h4>Insira os dados do livro: </h4>

    <?php
    $sql = "select * from biblioteca where id=$id";
    $busca = mysqli_query($conexao, $sql);
    while ($array = mysqli_fetch_array($busca)) {
      $id = $array['id'];
      $titulo = $array['titulo'];
      $autor = $array['autor'];
      $genero = $array['genero'];
    }
    ?>


    <form action="biblioteca_update.php" method="post" style="margin-top: 20px">
      <input type="text" class="form-control" id="modelo" autocomplete="off" name="id" value="<?php echo $id ?>" style="display: none;">

      <div class="form-group">
        <label>Título</label>
        <input type="text" class="form-control" id="titulo" autocomplete="off" name="titulo" value="<?php echo $titulo ?>">
      </div>
      <div class="form-group">
        <label>Autor</label>
        <input type="text" class="form-control" id="autor" autocomplete="off" name="autor" value="<?php echo $autor ?>">
      </div>
      <div class="form-group">
        <label>Gênero</label>
        <input type="text" class="form-control" id="genero" name="genero" value="<?php echo $genero ?>" autocomplete="off">
      </div>

      <div style="text-align: right">
        <button type="submit" id="botao" class="btn btn-primary botao">Atualizar</button>
      </div>
    </form>
  </div>
  

</body>

</html>