var visible = 0;
function displaycomments() {
    if (visible === 0) {
        document.getElementById("hidden-div").style.display = "block";
        visible = 1;
    }
    else {
        document.getElementById("hidden-div").style.display = "none";
        visible = 0;
    }
  
}


