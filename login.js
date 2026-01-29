function ok() {
    let username = document.getElementById("inputusername").value;
    let password = document.getElementById("inputpass").value;
    if ( password === "1234") {
        document.getElementById("welcome").innerHTML = username + " خوش آمدید";
         alert("خوش آمدید");
         localStorage.setItem("username", username);
        window.location.href = "aflog.html";
    }
    else { alert("رمز عبور اشتباه است!"); }
}