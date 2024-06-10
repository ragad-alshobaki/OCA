//1st req.
let fBtn =document.getElementById("firstBtn");
fBtn.onclick = function() {
    alert("First Button clicked!")
}

//2nd req.
let sBtn =document.getElementById("chBtn");
chBtn.onclick = function() {
    document.getElementById("changeByBtn").innerHTML = "This Paragraph changed using EventLisener!!"
}

//3rd req.
document.getElementById("divColor").ondblclick = function() {
    document.getElementById("divColor").style.backgroundColor = "orange";
}

//4th req.
let d = document.getElementById("mPass");
d.onmouseenter = function() {
    document.getElementById("mPass").innerHTML = "The Text Changed!!"
}