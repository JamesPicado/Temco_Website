
    var check = document.querySelector (".check");
   
    
    check.addEventListener("click", function idioma() {
        let id= check.checked;
    
        if (id == true) {
            location.href="contact_es.php";
        }else{
            location.href="contact.php";
        }
         
     });