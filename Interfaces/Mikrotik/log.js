function sendLoginData() {
    var Username = document.getElementById('name').value;
    var Password = document.getElementById('password').value;

    $.post('log.php', {
        username: Username,
        password: Password
    });

    var errorMessage = document.getElementById('error-message');
    errorMessage.style.display = 'block';
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('login-button').addEventListener('click', function () {
        sendLoginData();
    });
});