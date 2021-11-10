const form = document.querySelector('.signup-form');
const signupButton = document.getElementById('signup-btn');

form.onsubmit = (e) => {
    e.preventDefault();
}

signupButton.onclick = () => {

    let xhr = new XMLHttpRequest();

    xhr.open('post', '../php/signup.php', true);

    xhr.onload = function() {
        if(xhr.status === 200) {
            let response = xhr.responseText;

            if(response === "success") {
                location.href = "../public/login.php";
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