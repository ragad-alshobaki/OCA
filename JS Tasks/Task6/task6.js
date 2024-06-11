// console.log(typeof(Storage))
//1st req.
if (typeof(Storage) !== undefined) {
    localStorage.setItem("Str", "Hello World!")
    document.getElementById("locStorage").innerHTML = localStorage.getItem("Str");
} else {
    document.getElementById("locStorage").innerHTML = "Sorry, your browser does not support Web Storage...";
}

//2nd req.
if (typeof(Storage) == undefined) {
    document.getElementById("locNumStrg").innerHTML = "Sorry, your browser does not support Web Storage...";
} else {
    localStorage.setItem("Number", 123)
    document.getElementById("locNumStrg").innerHTML = localStorage.getItem("Number");
}

//3rd req.
if (typeof(Storage) !== undefined) {
    localStorage.setItem("Boolean", true)
    document.getElementById("bolStrg").innerHTML = localStorage.getItem("Boolean")
} else {
    document.getElementById("bolStrg").innerHTML = "Sorry, your browser not support Web Storage..."
}

//4th req.
