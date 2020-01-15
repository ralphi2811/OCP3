function myFunction(message) {
    var x = document.getElementById("snackbar");
    document.getElementById("snackbar").innerHTML = message
    x.className = "show";
    setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

