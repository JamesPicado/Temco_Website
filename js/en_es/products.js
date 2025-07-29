/* window.onload=function(){ */

    var check = document.querySelector (".check");
   
    
    check.addEventListener("click", function idioma() {
        let id= check.checked;
    
        if (id == true) {
            location.href="products_es.html";
        }else{
            location.href="products.html";
        }
         
     });
   
  