const form = document.querySelector('.login-form');
const loginButton = document.getElementById('login-btn');

form.onsubmit = (e) => {
    e.preventDefault();
}

loginButton.onclick = () => {

    let xhr = new XMLHttpRequest();

    xhr.open('post', '../php/login.php', true);

    xhr.onload = function() {
        if(xhr.status === 200) {
            let response = xhr.responseText;

            if(response === "success") {
                location.href = "../public/users.php";
            } else {
                const error = document.querySelector('.error-msg');
                error.textContent = response;
                error.style.display = "block";
            }
        }

    }

    let formData = new FormData(form);

    xhr.send(formData);
}