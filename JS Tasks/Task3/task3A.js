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
const square = function (x) {return x ** 2};

console.log("square of 2 is", square(2));
console.log("square of 5 is", square(5));

//3rd exercise
const multiply = (x, y) => x * y;               //ES6
// const multiply = function(x, y) {            //ES5
//     return x * y; }
console.log(multiply(2, 3));
console.log(multiply(4, 5));

//4th exercise
const car = {
    Make : "Toyota",
    Model : "Camry",
    Year : 2020, 
    getCarInfo:  function() {
        return this.Make + "" + this.Model + "" + this.Year;}
        // return console.dir(car); }                           //display the obj. in tree format
}
    console.log(car.Make);  
    console.log(car.getCarInfo())

//5th exercise
let colors = ["Red", "Green", "Blue"];
function printColor() {
    for (i in colors) {
        console.log(colors[i])
    }
}
printColor(colors);

//6th exercise
function getlength(char) {
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

// //8th exercise
// let x = "Hello,World";
// console.log(x.split(""))
function splitStr (sentence, delimiter) {
    // let txt = sentence;
    // let arr = txt.split(",");
    return sentence.split(delimiter);
}
console.log(splitStr('Hello,World', ',')); 
console.log(splitStr('JavaScript is fun', ' ')); 
// console.log(splitStr("Hello,World", ""))


