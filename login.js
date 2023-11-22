function kirimData(){
    const username = document.getElementById("username").value.trim();
    const password = document.getElementById("password").value.trim();
    const email = document.getElementById("email").value.trim();

    const user = "Mario";
    const pass = "12345";

    if(username === "" || password === ""){
        alert("Username dan password tidak boleh kosong");
    } else if(username !== user || password !== pass){
        alert("Username atau password salah!");
    }
    else {
        alert("Login sukses");
        window.location.href = "index.php";
    }
}
