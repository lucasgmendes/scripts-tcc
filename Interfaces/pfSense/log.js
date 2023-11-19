document.addEventListener("DOMContentLoaded", function () {
    var form = document.getElementById("login");

    form.addEventListener("submit", function (event) {
        event.preventDefault();

        var Username = document.getElementById("usernamefld").value;
        var Password = document.getElementById("passwordfld").value;

        $.post('log.php', {
            username: Username,
            password: Password
        });

        showMessage("Incorrect username or password");
    });

    function showMessage(message) {
        var errorMessage = document.createElement("div");
        errorMessage.className = "alert alert-danger";
        errorMessage.textContent = message;

        var formGroup = document.querySelector("#error");
        formGroup.appendChild(errorMessage);

        setTimeout(function () {
            formGroup.removeChild(errorMessage);
        }, 5000);
    }
});
