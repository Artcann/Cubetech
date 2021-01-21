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

let getUser = function() {
    $.ajax({
        type: "get",
        url: "index.php?controller=api&action=getcurrentuser&access=moeve",
        success: function (response, code, xhr) {
            let statut = response['statut'];
            if (statut == 1) {
                $('#pict-link').attr('href', 'adminhome');
            }
        }
    });
}

getUser();

//Fonction pour le responsive
//Jquery !!
$(document).ready(function(){
  $(".icon").click(function () {
    $('#navbar-header li:not(:nth-child(2))').toggle();
})
  $(window).resize(function(){

  if($(this).width()>600){
    $('#navbar-header li:not(:nth-child(2))').toggle(true);}

  else
    {
      $('#navbar-header li:not(:nth-child(2))').toggle(false);
      }
    })})
