//1st exercise
function sayHello (name) {
    // name = document.getElementById("username").value;
    // var msg = "Hello, " + name;
    // document.getElementById("showname").innerHTML = msg;
    // return "Hello, ", name;
    console.log("Hello, ", name, "!")
}
sayHello("Alice");
sayHello("Bob");

//2nd exercise
const squarefunc = function (x) {return x ** x};
const z = squarefunc(2);
console.log(z);

//3rd exercise
// const multiply = (x, y) => (return x * y);            //ES6 - check not working
const multiply = function(x, y) {                       //ES5
    return x * y;
}
console.log(multiply(2, 3));
console.log(multiply(4, 5));

//4th exercise
const car = {
    Make : "Mercedes",
    Model : "C-Class",
    Year : 2022, 
    getCarInfo:  function() {
        return this.Make + "" + this.Model + "" + this.Year;}
}
// function getCarInfo (car) {
    console.log(car.Make);  
    console.log(car.getCarInfo())
// }

//5th exercise
let colors = ["Red", "Green", "Blue"];
function printColor (colors) {
    for (i in colors) {
        console.log(colors[i])
    }
}
printColor(colors);

//6th exercise
function getlength (char) {
    let counter = 0;
    for (i in char) {
        counter++ ;
    }
    return counter;
}
console.log(getlength('Hello'));
console.log(getlength('JavaScript'));

//7th exercise
function getupper (string) {
    return string.toUpperCase();
}
console.log(getupper('hello '), getupper('world!'))

//8th exercise
function countchar (sentence, delimiter) {
    // let txt = sentence;
    // let arr = txt.split(",");
    return sentence.split(delimiter);
    console.log(countchar("'Hello,World', ',"))
}
