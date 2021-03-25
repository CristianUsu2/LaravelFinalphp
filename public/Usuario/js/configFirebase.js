
  const google=document.getElementById("google");
  
if(google!=null){
    google.addEventListener("click",()=>{
        const provedorGoogle= new firebase.auth.GoogleAuthProvider();
        auth
        .signInWithPopup(provedorGoogle)
        .then(user=>{
         localStorage.setItem("usuario",JSON.stringify(user));
          mostrarNombreGoogle();
        })
          .catch(error=>{
          console.log(error);
         })
    })
}
 
const mostrarNombreGoogle=()=>{
    
}