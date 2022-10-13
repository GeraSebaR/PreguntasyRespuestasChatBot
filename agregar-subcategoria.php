<?php session_start();
require_once('includes/config.php');

//Code for Registration 
if(isset($_POST['submit']))
{
    $preguntas=$_POST['preguntas'];
    $respuestas=$_POST['respuestas'];
    
$sql=mysqli_query($con,"select id from users where respuestas='$respuestas'");
$row=mysqli_num_rows($sql);
if($row>0)
{
    echo "<script>alert('Respuestas id already exist with another account. Please try with other respuestas id');</script>";
} else{
    $msg=mysqli_query($con,"insert into users(preguntas,respuestas) values('$preguntas','$respuestas')");

if($msg)
{
    echo "<script>alert('Registered successfully');</script>";
    //echo "<script type='text/javascript'> document.location = 'login.php'; </script>";
}
}
}
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Registro de usuario | Sistema de registro e inicio de sesión</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
  <script type="text/javascript">
function checkpass()
{
if(document.signup.password.value!=document.signup.confirmpassword.value)
{
alert(' Password and Confirm Password field does not match');
document.signup.confirmpassword.focus();
return false;
}
return true;
} 

</script>

    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
<h2 align="center">Agregar la subcategoria que corresponda</h2>
<hr />
                                        <h3 class="text-center font-weight-light my-4">Ingrese la Subcategoria correspondiente</h3></div>
                                    <div class="card-body">
<form method="post" name="signup" onsubmit="return checkpass();">

<!--<div class="row mb-3">-->
<label for="inputFirstName">Ingresar la subcategoria:</label>
<div class="col-md-11">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="preguntas" name="preguntas" type="text" placeholder="Enter your first name" required />
<!--<label for="inputFirstName">Ingresar la pregunta:</label>-->
</div>
</div>
<!--<label for="inputLastName">Ingresar la respuesta:</label>                                             
<div class="col-md-11">
<div class="form-floating">-->
<!--<input class="form-control" id="respuestas" name="respuestas" type="text" placeholder="Enter your last name" required />-->
 <!--<label for="inputLastName">Ingresar la respuesta:</label>-->
 <!--<p><textarea class="form-control" id="respuestas" name="respuestas" rows="5" cols="50"></textarea></p>
</div>
</div>-->

<!--<br></br>
<div class="col-md-11">
<div class="form-floating">
<select name="entradalista1">

<option selected="selected" >Seleccione una Categoria</option>

<option>Registro</option>

<option>Contrasenia</option>

<option>Correo electronico</option>

</select>
</div>
</div>
<br></br>

<div class=""><button type="submit" class="btn btn-primary btn-block" name="submit">Agregar Categoria</button></div>
<br></br>

<div class="col-md-11">
<div class="form-floating">
<select name="entradalista1">

<option selected="selected">Seleccione una Subcategoria</option>

<option>Entrada de línea</option>

<option>Entrada de contraseña</option>

<option>Entrada multi-línea</option>

</select>
</div>
</div
<br></br>
<div class=""><button type="submit" class="btn btn-primary btn-block" name="submit">Agregar Subcategoria</button></div>


<!--</div>-->

<!--<div class="form-floating mb-3">
<input class="form-control" id="email" name="email" type="email" placeholder="phpgurukulteam@gmail.com" required />
<label for="inputEmail">Correo</label>
</div>-->
 

<!--<div class="form-floating mb-3">
<input class="form-control" id="contact" name="contact" type="text" placeholder="1234567890" required pattern="[0-9]{10}" title="10 numeric characters only"  maxlength="10" required />
<label for="inputcontact">Teléfono</label>
</div>-->
        


<!--<div class="row mb-3">
<div class="col-md-6">
 <div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="password" name="password" type="password" placeholder="Create a password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required/>
<label for="inputPassword">Clave</label>
</div>
</div>-->
                                                

<!--<div class="col-md-6">
<div class="form-floating mb-3 mb-md-0">
<input class="form-control" id="confirmpassword" name="confirmpassword" type="password" placeholder="Confirm password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" title="at least one number and one uppercase and lowercase letter, and at least 6 or more characters" required />
<label for="inputPasswordConfirm">Confirmar clave</label>
</div>
</div>-->
</div>
                                            

<div class="mt-4 mb-0">
<div class="d-grid"><button type="submit" class="btn btn-primary btn-block" name="submit">Guardar</button></div>
<br></br>
<div class="small"><a href="index.php">Volver al principal</a></div>

</div>
                                        </form>
                                    </div>
                                    <!--<div class="card-footer text-center py-3">
 <div class="small"><a href="login.php">¿Ya tienes una cuenta? Inicia sesion</a></div>
  <div class="small"><a href="index.php">Volver al inicio</a></div>
                                    </div>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
         <?php include_once('includes/footer.php');?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
