const contenedor = document.querySelector('#contenedor');
const img= document.getElementById("imgdet");
const botonCarrito=document.getElementById("botonCarrito");
document.querySelector('#boton-menu').addEventListener('click',()=>{
    contenedor.classList.toggle('active');
    if(img !=null && botonCarrito!=null){
    img.classList.toggle('activo');
    botonCarrito.classList.toggle('activo');
    }
});

const comprobarAncho = ()=>{
    if(window.innerWidth <=768){
        contenedor.classList.remove('active');
        if(img !=null && botonCarrito!=null){
        img.classList.remove('activo');
        botonCarrito.classList.remove('activo');
        }
    }else{
        contenedor.classList.add('active');
        if(img !=null && botonCarrito!=null){
        img.classList.add('activo');
        botonCarrito.classList.add('activo');
        }
    }
}

comprobarAncho();

window.addEventListener('resize',()=>{
   comprobarAncho();
});


