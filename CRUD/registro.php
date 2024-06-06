<!doctype html>
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
  <header>
    <!-- place navbar here -->
  </header>
  <main>

    <div class="container">
        <div class="row">
            <div class="col-md-4">

            </div>
        <div class="col-md-4">
            <form method="POST" id="formRegistro">
                <div class="card">
                    <div class="card-header">
                        Registro de Usuario
                    </div>
                    <div class="card-body">
                           
                        <div class="mb-3">
                        <label for="" class="form-label">Usuario</label>
                        <input type="text"
                            class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="Usuario">
                        <small id="helpId" class="form-text text-muted">Escriba su usuario</small>
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
                            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
                        <small id="helpId" class="form-text text-muted">Escriba su nombre</small>
                        </div>
                        <div class="mb-3">
                        <label for="" class="form-label">Apellido</label>
                        <input type="text"
                            class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido">
                        <small id="helpId" class="form-text text-muted">Escriba su apellido</small>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Registrar usuario</button>
                        <input class="btn btn-primary" type = "button" onclick = "myfunction()" value = "Boton 2">  
                        
                        
                        <p id="errorMesg" style="color:red;"></p>
                    </div>
                    
                </div> 
            </form> 
        </div>     
    </div>




  <script>

      async function myfunction(){

        const response = await fetch("https://gateway.marvel.com/v1/public/comics?ts=1000&apikey=9293e6d6ad05ec5ace80428c8b4c8e25&hash=f0ae2c8b87fe06ae5d75d5e7c280f164");
        const movies = await response.json();
        console.log(movies);
      

        let psw =document.getElementById('contrasenia').value;

       

        const regex =  /^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&.])[A-Za-z\d@$!%?&.]{8,}$/i;

        if (regex.test(psw)) {
          console.log('El nombre ${psw} cumple las restricciones.');
        }

        if(psw === ''){
          alert('El valor de la contraseña no puede ser vacio');
        }else{
          
        }
        console.log('hola de nuevo');
      }


     // document.getElementById('formRegistro').addEventListener('submit',function(event){
    //    console.log('Hola ca')
     // });


  </script>

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