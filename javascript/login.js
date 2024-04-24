const form = document.querySelector(".login form");
const continueButton = document.querySelector(".button input");
const errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefault();
};

continueButton.addEventListener("click", () => {
  // * AJAX
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
        let data = xhr.response;
        console.log(data);
        if (data == "success") {
            location.href = "users.php";
        } else {
            errorText.textContent = data;
            errorText.style.display = "block";
        }
        }
    }
};
  // * отправка данных с форм через AJAX на php
  let formData = new FormData(form); // * создание нового объекта формДата
  xhr.send(formData); // * отправка данных с формы на php
});
