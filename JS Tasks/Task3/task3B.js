//1st exercise
const pi = 3.14;
function calculateArea(radius) {
    return area = pi * radius **2;
}
console.log(calculateArea(5));
console.log(calculateArea(10));

// //2nd exercise
function reversestring(str) {
    return str.split("").reverse().join("");
}
console.log(reversestring('hello'))
console.log(reversestring('world'))

//3rd exercise
// let arr = [1, 2, 3, 4, 5, 6];
// let arr2 = [11, 22, 33, 44, 55]
const filterEvenNumbers = function(arr) {
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
// filterEvenNumbers(arr);
// : ? 

//4th exercise
// const library {
//     books : []
//     title : 
//     author :
// }
