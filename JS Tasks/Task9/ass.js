//https://jsonplaceholder.typicode.com/users

//Promise
let show = document.getElementById("showData1");
function getUser() {
    new Promise((resolve, reject) => {
        fetch("https://jsonplaceholder.typicode.com/users")
        .then(response => response.json())
        .then(json => {
            let showuser=""
            data.forEach(element => {
                showuser += `<h3>Name : ${element.name} </h3>`
                showuser += `<p>User name : ${element.username} </p>`
        })
    })
})
    // console.log(showuser);
    show.innerHTML = showuser;
};