//1st required
document.getElementById("header").innerHTML = "Welcome to DOM Manipulation!";

//2nd req.
let myClass = document.getElementsByClassName("item");
console.log(myClass);
// document.getElementsByClassName("item").innerHTML = "Class Item";    ** check didn't change the txt
myClass[0].innerHTML = "Class Item";

//3rd req.
let myTag = document.getElementsByTagName("p");
console.log(myTag);
myTag[1].innerHTML = "Paragraph Element";

//4th req.
let myQuery = document.querySelector(".highlight");
console.log(myQuery);
myQuery.innerHTML = "First Highlighted Item";

let myQueryAll = document.querySelectorAll(".highlight");
console.log(myQueryAll);

//5th req.
let selectAll = document.querySelectorAll("li");
console.log(selectAll);
selectAll.innerHTML = "List Item";






