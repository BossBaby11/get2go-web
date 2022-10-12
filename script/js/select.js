// get placeholder option
var selectobject = document.getElementById("placeholder");

// remove placeholder option
function select() {
    selectobject.remove(); 
    document.getElementById("placeholder").style.visibility = "hidden"; 
    document.getElementById("placeholder").style.display = "none";
    optionshow();
}