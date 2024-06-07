//1st req
var cash = 1000;
var liabilities = 500;
var cfr = cash / liabilities;
console.log(cfr);

//2nd req
var revenue = 1000;
var expenses = 500;
var n_income = revenue - expenses;
console.log(n_income);

//3rd req
var ass_liabilities =1000;
var equity = 500;
var assets = ass_liabilities + equity;
console.log(assets);

//4th req
var profit = 1000;
var sales = 500;
var np_income = profit * sales;
console.log(np_income);

//5th req
const array = [7, 9, 2];
var avg = (7+9+2)/3;
console.log(avg);

//6th req
var price = 150;
var dis_ratio = 0.3;
var discount = price - price * dis_ratio;
console.log(discount);

//7th req
// var age = prompt("Please enter your age...")
var age = 20;
if(age > 18 && age < 30) {
    console.log(true);
}

//8th req
var expo = 2 ** 3;
console.log(expo);

// 9th req
var mod = 2 % 4;
console.log(mod)

//10th req
console.log(typeof(100))
console.log(typeof(73.9))
console.log(typeof(NaN))
console.log(typeof("Water"))
console.log(typeof(false))
console.log(typeof(9 != 11))
console.log(typeof("Orang" + "e"))
console.log(typeof("Orang" - "e"))  //check why return "number"
console.log(typeof("4" + "8"))
console.log(typeof("name" + 3))
console.log(typeof("name" - 3))     //check why return "number"
console.log(typeof(82 * "word"))    //check why return "number"
console.log(typeof(1 + "hello"))
console.log(typeof(1 + true))
console.log(typeof("hello" + true))
console.log(typeof(Infinity))       //check: typeof -> number , Infinity -> Infinity "string"
console.log(typeof(1 == '1'))
console.log(typeof(1 === '1'))
// console.log(Infinity)

//11th req
var str = "Welcome to Orange"
console.log(str.toUpperCase())
console.log(str.substring(8, 10).toUpperCase())
console.log(str.replace("Welcome to", "HEllo from"))
console.log(str.toLowerCase())
console.log(str.length)
// console.log(str.padStart(11, ""))
console.log(str.padEnd(24," Jordan"))

//12th req
alert("Welcome!!");

//13th req
let strng = "OCA";
let num = 2024;
let bool = true;
let arr = [0, 1, 2, 3];
const obj = {name:"Ragad", work:"Dev. Trainee", cohort: 4};
console.log(typeof(strng), strng)
console.log(typeof(num), num)
console.log(typeof(bool), bool)
console.log(typeof(arr), arr)
console.log(typeof(obj), obj)

//14 req
if (num == 2024) {
    console.log(true)
    let z = 24;
} else {console.log(false) }
// console.log(z);                 // Showing not defined

//15th req
var a = 10;
var b = 20;

console.log(a + b)
console.log(a - b)
console.log(a * b)
console.log(a / b)
console.log(a % b)

console.log(a > b)
console.log(a < b)
console.log(a == b)
console.log(a != b)
console.log(a >= b)
console.log(a <= b)

var x = true;
var y = false;
console.log(x && y)
console.log(x || y)
console.log(!x && !y)

//16 req
console.log(a += 5)
console.log(a -= 5)
console.log(a *= 5)

//17th req
alert("Hello World!")
console.log("Hello World!")