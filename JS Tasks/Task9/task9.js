//1: Fetch and Display Posts

// let x = fetch("https://jsonplaceholder.typicode.com/posts")
// let response = x.then((response)=>{
//     return response.json()
// })
// .then()

let show = document.getElementById("showData1");
const file = "https://jsonplaceholder.typicode.com/posts"
fetch (file).then(show => show.json())
.then(data => {
    let arrange=""
    data.forEach(element => {
        arrange += `<h3>The Title is : ${element.title} </h3>`
        arrange += `<p>The Body is : ${element.body} </p>`
    });
    show.innerHTML=arrange
});
// .catch(error => {
//     console.error('Error fetching posts:', error);});


//2: Fetch and Display Comments for a Post
let show2 = document.getElementById("showData2");
const file2 = "https://jsonplaceholder.typicode.com/comments?postId=1"
fetch (file2).then(show2 => show2.json())
.then(dta => {
    let arr=""
    dta.forEach(element => {
        arr += `<h4>Name: ${element.name}</h4>`
        arr += `<p>Email Id: <u>${element.email}</u></p>`
        arr += `<p>The Body is: ${element.body}</p>`
    });
    show2.innerHTML=arr;
});

//3: Fetch and Display User Albums
let show3 = document.getElementById("showData3");
const file3 = "https://jsonplaceholder.typicode.com/albums?userId=1"
fetch(file3).then(show3 => show3.json())
.then(userData => {
    let arng = ""
    userData.forEach(element => {
        arng += `<h4>Album Title: ${element.title}</h4>`
    });
    show3.innerHTML = arng;
});

//4: Fetch and Display Photos from an Album
let show4 = document.getElementById("showData4");
const file4 = "https://jsonplaceholder.typicode.com/photos?albumId=1"
fetch(file4).then(show4 => show4.json())
.then(photo => {
    let gallery = ""
    photo.forEach(element => {
        gallery += `<h4>Title: ${element.title}</h4>`
        gallery += `<img src="${element.thumbnailUrl}">`
    });
    show4.innerHTML = gallery;
});

//5: Fetch and Display To-Do Items
let show5 = document.getElementById("showData5");
const file5 = "https://jsonplaceholder.typicode.com/todos"
fetch(file5).then(show5 => show5.json())
.then(toDo => {
    if (this.checkPoint === true) {
        done => {
            let completed = ""
            done.then()
        }        
    }
})