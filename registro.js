function init(){
    
}

$(document).ready(function(){
    $('#lblmensaje').hide();
    $('#lbldatos').hide();
});

$(document).on("click","#btnregistro", function(){
    var UserName= $('#UserName').val();
    var UserGmail= $('#UserGmail').val();
    var UserPassword= $('#UserPassword').val();
    
    if(UserGmail=='' || UserPassword=='' || UserName=='' ){
        Swal.fire(
            'Campos Vacios',
            'Rellene Los Campos ',
            'question'
          );
    }
    else{
        
        $.post("controller/usuario.php?op=resgistro",{UserName:UserName,UserGmail:UserGmail,UserPassword:UserPassword},function(data){
            if(data == 0){
                Swal.fire({
                    icon: 'success',
                    title: 'Aceptado!',
                    text: 'Registro Correcto',
                    confirmButtonText: `Ok`,
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.open('http://localhost/proyect_c/index.php','_self');
                    }
                });
            }
            else{
                Swal.fire({
                    icon: 'error',
                    title: 'Error...',
                    text: 'Correo ya registrado',
                    footer: '<a href="http://localhost/proyect_c/index.php">Inicia Sesion</a>'
                  });
            }
        });
    }

    

});