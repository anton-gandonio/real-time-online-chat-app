const searchBar = document.querySelector(".users .search input");
const searchButton = document.querySelector(".users .search button");
const usersList = document.querySelector(".users .users-list")

searchButton.addEventListener("click", () => {
    searchBar.classList.toggle("active")
    searchBar.focus()
    searchButton.classList.toggle("active")
});

searchBar.addEventListener("keyup", () => {
    let searchTerm = searchBar.value
    if (searchTerm != "") {

    }
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true);
    xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
        let data = xhr.response;
        console.log(data);
        }
    }
};
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
xhr.send("searchTerm=" + searchTerm)
})


setInterval(() => {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/users.php", true);
    xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
        let data = xhr.response;
        usersList.innerHTML = data
        }
    }
};
xhr.send()
}, 500); 