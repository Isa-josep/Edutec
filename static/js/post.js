


// Obtener la modal y el botón
const modal = document.getElementById("crear-post-modal");
const boton = document.getElementById("boton-crear-post");

// Obtener el botón para cerrar la modal
const cerrarBoton = document.getElementsByClassName("cerrar")[0];

// Cuando el usuario haga clic en el botón, mostrar la modal
boton.onclick = function() {
  modal.style.display = "block";
}

// Cuando el usuario haga clic en el botón de cerrar, ocultar la modal
cerrarBoton.onclick = function() {
  modal.style.display = "none";
}

// Cuando el usuario haga clic en cualquier parte fuera de la modal, ocultarla
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// Obtener el formulario de creación de POST

const formPost = $('#crear-post-form')
formPost.addEventListener('submit'  , (e)  =>  {
    e.preventDefault() ; 
    let datos =  Object.fromEntries(new  FormData(e.target)); // recuperar datos ingresados 
		let  prueba  =  new FormData(e.target); 
		console.log(e.target) ;
		prueba.append("type" , "post") ; 
		// prueba.append("id" , getCookie("id")) ;
    prueba.append("id" , 1) ;

		if(!isEmpty(datos)){   // Estan vacios ?
			fetch("DB/apiSQL.php", {method: "POST",body: prueba})
			.then(res => res.text())
			.then(res => { 
				console.log(res) ;
				window.location.assign("post.php") ;
			})
			.catch(e => console.log(e)) ;
			
		}  


})




function getCookie(cname) {
	let name = cname + "=";
	let decodedCookie = decodeURIComponent(document.cookie);
	let ca = decodedCookie.split(';');
	for(let i = 0; i <ca.length; i++) {
	  let c = ca[i];
	  while (c.charAt(0) == ' ') {
		c = c.substring(1);
	  }
	  if (c.indexOf(name) == 0) {
		return c.substring(name.length, c.length);
	  }
	}
	return "";
  }

  let isEmpty = (objet) =>{
    for(let i  in objet){
      if(objet[i].length == 0 ){
        notificacio(0 , `El campo ${i} esta vacio`) ; 
        return  true ; 
      }
    }
    return false ; 	
  };