//1st exercise
const pi = 3.14;
function calculateArea(radius) {
    return area = pi * radius ** 2;
}
console.log(calculateArea(5));
console.log(calculateArea(10));

// //2nd exercise
function reverseString(str) {
    return str.split("").reverse().join("");
}
console.log(reverseString('hello'))
console.log(reverseString('world'))

//3rd exercise
// const filterEvenNumbers = (arr) => {
//     for (i in arr) {
//         if ( arr[i] % 2 == 0 ) {
//             return arr;
//         }
//     }
// }
const filterEvenNumbers = (arr) => {
    let even = [];
    for (i in arr) {
        if ( arr[i] % 2 == 0 ) {
            even.push(arr[i]);
        }
    }
    return even;
}
console.log(filterEvenNumbers([1, 2, 3, 4, 5, 6]));
console.log(filterEvenNumbers([11, 22, 33, 44, 55]));

// : ?  ternary operator

//4th exercise
// const library {
//     books : []
//     title : 
//     author :
// }

//5th exercise
// let numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// function numSum() {
//     var sum = 0;
//     for (i in numbers) {
//         sum = sum + i;
//     }
//     return sum;
// }
// console.log(numSum(sum));