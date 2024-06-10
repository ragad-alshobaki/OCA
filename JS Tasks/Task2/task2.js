//1st exercise
var s = "";
for (var i = 1; i <= 10; i++) {
    s = s + i;
}
console.log("Ex.1 Output:", s,)           //***check

//2nd exercise
while (i <= 10) {
    i++;
    s = s + i;
}
console.log("Ex.2 Output: ", s)

//3rd exercise
for (let i = 0; i <= 10; i += 2) {
    console.log("Ex.3 output: ", i)
}

//4th exercise
var sum = 0;
for (let i = 1; i <= 10; i++) {
    sum +=i;
}
console.log("Ex.4 Output: ", sum)

// 5th exerecise                    ***ckeck if we can solve without if
for (let i =0; i<= 10; i++) {
    if (i % 2 != 0) {
        console.log("Ex.5 Output: ", i)
    }
}

//6th exercise
var age = prompt("Please enter your age:")
if (age > 16) {
    console.log("Ex.6 Output: ", "You are an adult")
}

//7th exercise
var score =prompt("What sore value did you get?")
if(score <= 50) {
    console.log("You failed the test")
}

//8th exercise
var Name = prompt("What is your name?")
console.log("Hello, ", Name)

//9th exercise                                   ***Check - not working
// var day = [Friday, Saturday, Sunday, Monday, Tuseday, Wednsday, Thersday]
// for (let i in day; i++) {
//     if (day = Friday && day = Saturday) {
//         console.log(day, "It's a weekend")
//     }
// }

// 10th exercise
var num = prompt("Please enter a number...")
if (num % 2 == 0) {
    console.log("The number is even")
}

//11th exercise




/*---------------------------------------------------------*/
//Coach salameh exercise:
// var c = 0;
// for (i = 477.75; i>0; i-=0.25 ) {
//     c++;
// }
// console.log(i)
//with func.
// var c = 0;
// function counter (start, end) {
//     for (let i = start; i > end; i-=0.25) {
//         c++; }
// }
// counter(477.75, 0);
// console.log(c);