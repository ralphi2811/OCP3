function checkpassword(){
   var user_form = document.forms[0];
   var password1 = user_form.elements["password"].value;
   var password2 = user_form.elements["password_check"].value;
   

   if (password1 !== password2) {
        user_form.password.focus();
        document.getElementById("snackbar").innerHTML = "Les mots de passes ne sont pas identiques";
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);  
        user_form.elements["password"].value = "";
        user_form.elements["password_check"].value = "";
    }   
    else {
        console.log('Password : OK');
    }
}

