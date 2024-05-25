document.getElementById('registroForm').addEventListener('submit', function(event) {
    event.preventDefault();
    
    var correo = document.getElementById('correo').value;
    var contrasena = document.getElementById('contraseña').value;
    var confirmarContrasena = document.getElementById('confirmarContraseña').value;
    var nombre = document.getElementById('nombre').value;
    var apellidos = document.getElementById('apellidos').value;
    function validarContrasena(contrasena) {
        var regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W]).{8,}$/; 
        return regex.test(contrasena);
    }
    function validarCorreo(correo) {
        var regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 
        return regex.test(correo);
    }

    function validarDatos(correo, contrasena, confirmarContrasena) {
        var errores = [];
    
        // Validación de correo electrónico
        if (!validarCorreo(correo)) {
            errores.push("El correo no es válido");
        }
    
        // Validación de contraseña
        if (!validarContrasena(contrasena)) {
            errores.push("La contraseña no es válida");
        }
    
        // Verificación de coincidencia de contraseñas
        if (contrasena!== confirmarContrasena) {
            errores.push("Las contraseñas no coinciden");
        }
    
        //Manejo de errores
        if (errores.length > 0) {
            alert(errores.join("\n"));
        } else {
            alert("Registro exitoso!");
        }
    }
    validarDatos(correo, contrasena, confirmarContrasena);
    
});
