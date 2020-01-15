var divSnackContetnt = document.getElementById("snackbar").innerHTML
if (divSnackContetnt !== '') {
    console.log('Ok contenu récupéré')
    console.log(divSnackContetnt)
    var x = document.getElementById("snackbar");
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);   
}