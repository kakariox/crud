function validatePassword() {
    var password = document.getElementById("password").value.trim();
    var confirm_password = document.getElementById("confirm_password").value.trim();

    if (password !== confirm_password) {
        alert("Password tidak cocok. Silakan coba lagi.");
        return false;
    }
    return true;
}

function validatePassword2() {
    var password = document.getElementById("password2").value.trim();
    var confirm_password = document.getElementById("confirm_password2").value.trim();

    if (password !== confirm_password) {
        alert("Password tidak cocok. Silakan coba lagi.");
        return false;
    }
    return true;
}