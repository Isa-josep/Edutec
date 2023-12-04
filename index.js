// var config={
//     apiKey: "AIzaSyBwomaH22TmIEus7d29I3Be4TQcPIk5M4Y",
//     authDomain: "login-c-fe5ad.firebaseapp.com",
//     projectId: "login-c-fe5ad",
//     storageBucket: "login-c-fe5ad.appspot.com",
//     messagingSenderId: "663332167796",
//     appId: "1:663332167796:web:70450fd77ba02060cef121",
//     measurementId: "G-QB8R5MCQ3K"
// };
// const app = initializeApp(config);
// const analytics = getAnalytics(app);


function init(){
    
}

$(document).ready(function(){
    $('#lblmensaje').hide();
    $('#lbldatos').hide();
});

$(document).on("click","#btnlogin", function(){
    var userCorreo= $('#txtcorreo').val();
    var userPassword= $('#txtpass').val();
    
    if(userCorreo=='' || userPassword=='' ){
        console.log("vacio");
        $('#lblmensaje').show();
        $('#lbldatos').hide();
    }
    else{
        $.post("controller/usuario.php?op=acceso",{userCorreo:userCorreo,userPassword:userPassword},function(data){
            if(data == 0){
                console.log("datos incorrectos");
                $('#lbldatos').show();
                $('#lblmensaje').hide();
            }
            else{
                window.open('http://localhost/proyect_c/view/home/','_self');
                window.lo
            }
        });
    }

    

});