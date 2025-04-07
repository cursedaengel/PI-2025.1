<?php
include('class/ClassEstados.php');
$objEstados = new ClassEstados();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <select name="estado" id="estado">
        <option value="">Selecione o Estado</option>
      <?php foreach ($objEstados->getEstados() as $estado) { ?>
            <option value="<?php echo $estado->id;  ?>"><?php echo $estado->nome; ?></option>
      <?php } ?>
    </select>

    <br><br>

    <select name="cidade" id="cidade" disabled="disabled">
        <option value="">Selecione a Cidade</option>
    </select>


    <script src="assets/js/javascript.js"></script>
</body>
</html>
