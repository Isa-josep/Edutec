
const $ = selector => document.querySelector(selector)
const $$ =  selector => document.querySelectorAll(selector) 
const href = url => window.location.assign(url)
const error = (e) => console.error(e) 
const log = (e) =>  console.log(e) ; 
const URLdata  = {
  host : 'localhost:4000/' 
} 
const menuData = $$('.menu__item') ; 

menuData.forEach((btn_data)  => {
  btn_data.addEventListener('click' , (e)=>{
    log(btn_data.title) ;
    const contruct = `${URLdata.host}${btn_data.title}.php` 
    href(`${contruct}`) 

  } )
}) 


const menu = $(".menu");
const menuSwitch = $(".menuswitch");
const logo = $(".menu__icon");
function  menuDisplay () {
    if(menu && menuSwitch){
      menu.classList.toggle("menuHide");
	    menuSwitch.classList.toggle("menuHide");  
    }
}
menuSwitch.addEventListener('click' ,  menuDisplay );

