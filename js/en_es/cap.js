/* window.onload=function(){ */

    var check = document.querySelector (".check");
   
    
    check.addEventListener("click", function idioma() {
        let id= check.checked;
    
        if (id == true) {
            location.href="capabilities_es.html";
        }else{
            location.href="capabilities.html";
        }
         
     });