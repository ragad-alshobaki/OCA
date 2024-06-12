//Task#1
let arr = [1, 2, 3, 4, 5, 6]
let sqArr = arr.map((i) => i**2)
console.log("Task.1 Output:", sqArr);

//Task#2
let nums = [1, 5, 10, 15, 20]
let filterNums = nums.filter((nums) => nums > 10)
console.log("Task.2 Output:", filterNums);

//Task#3
// let str = "Orange Coding Academy";
let strArr = ["ragd", "yousef", "alshobaki"]
// let getUpChar = str.split("").forEach((i) => i === i.toUpperCase() ? i.toUpperCase() : i.toLowerCase()).join("");
let getUpChar = strArr.forEach(function(i) {console.log(i.toUpperCase())} );

// let getUpChar = str.split("").forEach(function(i) {
//   i === i.toUpperCase() ? i.toUpperCase() : i.toLowerCase()
//   return i} ).join("");

console.log("Task.3 Output:", getUpChar);

//Task#4
let device = [{Brand : "HP",
               Color : "Black",
               RAM : "8" },
              {Brand : "Dell",
                Color : "Dark Grey",
                RAM : "8" },
              {Brand : "HP",
                Color : "Silver",
                RAM : "4" }]
let prop = device.map(i => i.Brand)
console.log("Task.4 Output:", prop);

//Task#5
let fltrProp = device.filter((i) => i.Brand == "Dell")
console.log("Task.5 Output:", fltrProp);

//Task#6
let nArr = [5, 10, 15, 20, 25]
