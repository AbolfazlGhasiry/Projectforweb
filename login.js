function ok() {
    let username = document.getElementById("inputusername").value;
    let password = document.getElementById("inputpass").value;
    if(username != "" && password !=""){
        document.getElementById("welcome").innerHTML = username + " خوش آمدید";
    }
}