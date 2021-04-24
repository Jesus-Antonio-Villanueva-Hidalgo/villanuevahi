$('document').ready(function() {
    $('#InicioSesion').click(Validar);


});

function Validar(){
    var user = $("#usuario").val();
    var password = $("#Contraseña").val();

    if(user==""){
        $('#ErrorUsuario').html("Ingresa un usuario");
        
    }
    if(password==""){
        $('#ErrorContraseña').html("Ingresa una contraseña");
    }
    if(user=='jesus' && password=='12345'){
        alert("Sesion Iniciada correctamente :)");
        console.log("Ingresando...");
    }
    else{
        alert("Error en las credenciales ingresadas :(");
        console.log("Error en login");
    }
}