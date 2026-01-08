function ok() {
    let username = document.getElementById("inputusername").value;
    let password = document.getElementById("inputpass").value;
    if (username === "Abolfazl" && password === "1234") {
        document.getElementById("welcome").innerHTML = username + " خوش آمدید";
         alert("خوش آمدید");
         localStorage.setItem("username", username);
        window.location.href = "index.php";
    }
    else { alert("نام کاربری یا رمز عبور اشتباه است!"); }
}