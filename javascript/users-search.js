const searchBar = document.querySelector(".users .search input");
const searchButton = document.querySelector(".users .search button");

searchButton.addEventListener("click", () => {
    searchBar.classList.toggle("active")
    searchBar.focus()
    searchButton.classList.toggle("active")
});
