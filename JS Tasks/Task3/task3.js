//1st exercise

// function sayHello (name) {
//     // name = document.getElementById("username").value;
//     // var msg = "Hello, " + name;
//     // document.getElementById("showname").innerHTML = msg;
//     console.log("Hello, ", name)
//     return "Hello, ", name;
// }
// var user = sayHello(angela);

//2nd exercise

const squarefunc = function (x) {return x ** x};
const z = squarefunc(2);
console.log(z);

//3rd exercise

// const multiply = (x, y) => (return x * y);            //E56 - check not working
const multiply = function(x, y) {                       //E55
    return x * y;
}
console.log(multiply(2, 3));
console.log(multiply(4, 5));

//4th exercise

const car = new Object();
car.make = "Mercedes";
car.model = "C-Class";
car.year = 2022;
