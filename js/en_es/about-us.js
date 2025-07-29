
    var check = document.querySelector (".check");
   
    
    check.addEventListener("click", function idioma() {
        let id= check.checked;
    
        if (id == true) {
            location.href="about-us_es.html";
        }else{
            location.href="about-us.html";
        }
         
     });
   