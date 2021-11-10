setInterval(() => {
    let xhr = new XMLHttpRequest();

    xhr.open('GET', '../php/users.php', true);

    xhr.onload = function() {
        if(xhr.status === 200) {
            let response = xhr.responseText;

            console.log(response);

            let usersList = document.querySelector('.users-list');

            usersList.innerHTML = response;
        }
    }

    xhr.send();

}, 500);