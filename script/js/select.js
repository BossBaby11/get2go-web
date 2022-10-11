// get placeholder option
var selectobject = document.getElementById("placeholder");

// remove placeholder option
function select() {
    selectobject.remove(); 
    document.getElementById("placeholder").style.visibility = "hidden"; 
    document.getElementById("placeholder").style.display = "none";
}

// var for option
var option = document.getElementsByClassName("option");

// show all option
function optionshow() {
    for(var i = 0; i < option.length; i++){
        option[i].style.display = "inline";
    }
}
