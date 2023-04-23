<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <form action="" method="post">
        @csrf
    <div class="col-md-4 offset-md-4">
            <label for="txt_produto">Produto</label>
            <input type="txt" name="txt_produto" placeholder="Produto">
    </div>

    <div class="col-md-4 offset-md-4">
        <label for="txt_Marca">Marca</label>
        <input type="txt" name="txt_marca" placeholder="Produto">
</div>

    <div class="col-md-4 offset-md-4">
        <input type="submit" name="btn" placeholder="Produto">
    </div>


    </form>
</body>

</html>
