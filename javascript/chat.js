const form = document.querySelector('.message-form');
const message = document.querySelector('.chat-input');
const sendButton = document.querySelector('.send-button');
const chatBox = document.querySelector('.chat-box');

form.onsubmit = (e) => {
    e.preventDefault();
}

sendButton.onclick = function () {
    let xhr = new XMLHttpRequest();

    xhr.open('POST', '../php/insert-chat.php', true);

    xhr.onload = function () {
        if(xhr.status === 200) {
            message.value = "";
            if(!chatBox.classList.contains('active')) {
                scrollToBottom();
            }
        }
    }

    let formData = new FormData(form);
    xhr.send(formData);
}


chatBox.onmouseenter = () => {
    chatBox.classList.add('active');
}

chatBox.onmouseleave = () => {
    chatBox.classList.remove('active');
}

setInterval( () =>{

    let xhr = new XMLHttpRequest();

    xhr.open('POST', '../php/get-chat.php', true);

    xhr.onload = function () {
        if(xhr.status === 200) {
            let response = xhr.responseText;
            chatBox.innerHTML = response;
            
            if(!chatBox.classList.contains('active')) {
                scrollToBottom();
            }
        }
    }

    let formData = new FormData(form);
    xhr.send(formData);
}, 500);

function scrollToBottom() {
    chatBox.scrollTop = chatBox.scrollHeight;
}