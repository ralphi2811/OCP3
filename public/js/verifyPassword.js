function checkpassword(){
   var user_form = document.getElementsByClassName("login-form");
   var password1 = user_form.password;
   var password2 = user_form.password_check
   

   if (password1 !== password2) {
        document.getElementById("snackbar").innerHTML = "Les mots de passes ne sont pas identiques";
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);        
   }   
}

