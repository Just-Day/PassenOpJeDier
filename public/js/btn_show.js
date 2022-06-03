var count = 1;
function setColor(btn, color) {
    var property = document.getElementById(btn);
    if (count == 0) {
        property.style.backgroundColor = "#07689f";
        count = 1;        
    }
    else {
        property.style.backgroundColor = "salmon";
        count = 0;
    }
}

function change()
{
    var elem = document.getElementById("button");
    if (elem.value=="Applied!") elem.value = "Apply now!";
    else elem.value = "Applied!";
}