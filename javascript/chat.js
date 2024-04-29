const form = document.querySelector(".typing-area"),
  inputField = form.querySelector(".input-field"),
  sendBtn = form.querySelector("button"),
  chatBox = document.querySelector(".chat-box")

form.onsubmit = (e) => {
  e.preventDefault();
};

sendBtn.onclick = () => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/insert-chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        inputField.value = "";
      }
    }
  };
  // * отправка данных с форм через AJAX на php
  let formData = new FormData(form); // * создание нового объекта формДата
  xhr.send(formData);
};

setInterval(() => {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/get-chat.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        chatBox.innerHTML = data;
      }
    }
  };
  let formData = new FormData(form); // * создание нового объекта формДата
  xhr.send(formData);
}, 500);
