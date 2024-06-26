let file = "https://jsonplaceholder.typicode.com/posts"
fetch (file)
.then(x => x.text())
.then(y => document.getElementById("showData").innerHTML = y);
// .catch(error => {
//     console.error('Error fetching posts:', error);});