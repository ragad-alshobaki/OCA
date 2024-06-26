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

//6th req.
let t6 = document.querySelector("#footer").innerHTML = "Footer Updated";

//7th req.
let t7 = document.querySelectorAll(".box");
for (let index = 0; index < t7.length; index++) {
    t7[index].innerHTML = "Box Item"
}

//8th req.
let t8_p = document.querySelector(".container > p").innerHTML = "This is container's p element";
let t8_a = document.querySelector(".container > a").innerHTML = "This is container's a element";

//9th req.
let t9 = document.querySelector('[data-role="admin"]').innerHTML = "Admin Role";

//10th req.
let t10 = document.getElementsByTagName("section");
t10.innerHTML = "Span Element";
console.log(t10);
//Need to Check