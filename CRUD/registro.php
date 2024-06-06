
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD PHP</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<body>
<main>
<div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
        <div class="col-md-4">
        <form method="POST" id="formRegistro">
                <div class="card">
                    <div class="card-header">
                        Registro de usuario
                    </div>
                    <div class="card-body">
                    <?php if(isset($mensaje)){?>
                      <div class="alert alert-danger" role="alert">
                        <strong> <?php echo $mensaje; ?></strong>
                      </div>
                    
                    <?php } ?>
                    
                        <div class="mb-3">
                        <labe for="" class="form-label">Usuario</label>
                        <input type="text"
                            class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Usuario">
                        <small id="helpId" class="form-text text-muted">Nombre de usuario</small>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Contraseña</label>
                            <input type="password"
                                class="form-control" name="contrasenia" id="contrasenia" aria-describedby="helpId" placeholder="Contraseña">
                            <small id="helpId" class="form-text text-muted">Escriba su contraseña</small>
                        </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Nombre</label>
                        <input type="text"
                            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Usuario">
                        <small id="helpId" class="form-text text-muted">Escriba su nombre</small>
                        </div>

                        <div class="mb-3">
                        <label for="" class="form-label">Apellido</label>
                        <input type="text"
                            class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Usuario">
                        <small id="helpId" class="form-text text-muted">Escriba sus apellidos</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Registrar Ususario</button>
                        <input class="btn btn-primary" type="button" onclick="myfunction()" value="boton 2">


                    </div>
                    
                </div> 
            </form> 
        </div>  
    </div>

    <script>
      async function myfunction(){
        const response = await fetch("https://gateway.marvel.com/v1/public/comics?ts=1000&apikey=6be2dcc4fe1f79f041ec2ce31ca3c95b&hash=f6c59c569b7add79a4f3f70f33beb422");
        const movies = await response.json();
        console.log(movies);
        let psw =document.getElementById('contrasenia').value
        const ver = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
        /*
        Se divide en 2 partes la expresión regular:
        /=inicio de expresion regular
        .a.o = expresion regular
        / = final de la expresion regular
        i = flags
        */
        if(ver.test(psw)){
          alert("La contraseña es valida. ");
        }else{
          alert("La contraseña no es valida. ");
        }
        console.log('Hola de nuevo');
}
    </script>


<!--Validar la contraseña con expresiones regulares-->
    </main>
    <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

    </body>
    </html>