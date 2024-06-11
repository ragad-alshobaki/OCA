// console.log(typeof(Storage))
//1st req.
if (typeof(Storage) !== undefined) {
    localStorage.setItem("Str", "Hello World!")
    document.getElementById("locStorage").innerHTML = localStorage.getItem("Str");
} else {
    document.getElementById("locStorage").innerHTML = "Sorry, your browser does not support Web Storage...";
}

// //2nd req.
if (typeof(Storage) == undefined) {
    document.getElementById("locNumStrg").innerHTML = "Sorry, your browser does not support Web Storage...";
} else {
    localStorage.setItem("Number", 123)
    document.getElementById("locNumStrg").innerHTML = localStorage.getItem("Number");
}

//3rd req.
localStorage.setItem("bool", true)
localStorage.getItem("bool")

//4th req.
// if (typeof(Storage) == undefined) {
//     document.getElementById("removable").innerHTML = "your browser doesn't support Web Storage";
// } else {
    // function removeTxt(){
    //     localStorage.removeItem()
    // }
    // document.getElementById("remBtn").onclick
// }
localStorage.setItem("color", "Orange")
localStorage.getItem("color")
localStorage.removeItem("color")

//5th req.
// localStorage.clear()

//6th req.
localStorage.setItem("Company", "OCA")
if (localStorage.getItem("Company")) {
    document.write("Welcome")
} else {
    document.write("Unknown User")
}

//7th req.
localStorage.setItem("Arr", [1, 2, 3])              //chech Json to handel Array****
localStorage.getItem("Arr")

//8th req.
