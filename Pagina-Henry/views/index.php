<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
<link rel="stylesheet" href="public/css/style-login.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="divider bg-dark">

<form class="container-fluid" action="control.php" method="post">

  <label class="header">LOGIN</label>

<?php if (isset($_GET['error'])) { ?>
  <div class="alert alert-danger" role="alert"> <?php echo $_GET ['error'];   ?></div>
<?php } ?>

  <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="textbox container-fluid" name="user"/>
    <label class="form-label" for="form2Example1">Nombre</label>
  </div>


  <div class="form-outline mb-4">
    <input type="password" id="form2Example2" class="textbox container-fluid" name="pass" />
    <label class="form-label" for="form2Example2">Contraseña</label>
  </div>


  <button type="submit" class="btn btn-primary col-12 ">Acceder</button>
  

</form>

</body>
</html>
