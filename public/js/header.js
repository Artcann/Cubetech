function isLoginPage() {
    let currentPage = window.location.href;

    var params = currentPage.split("/");

    var isLogin = false;

    for(var i in params) {
        if(params[i] === "login") {
            isLogin = true;
            break;
        }
    }

    if(isLogin) {
        document.getElementById('header').style = "visibility: hidden";
        document.getElementById('footer').style = "display: none";
    }
}