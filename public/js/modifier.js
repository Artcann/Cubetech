// Vérification de la longueur du mot de passe saisi
var verifiedPassword = "";
var test = document.getElementById("test");
var same = document.getElementById("same");


document.getElementById("verifiedPassword").addEventListener("input",function (e){
    verifiedPassword=e.target.value;
})
/*Pour le mdp*/
document.getElementById("password").addEventListener("input", function (e) {
    var password = e.target.value; // Valeur saisie dans le champ mdp
    var longueurMdp = "faible";
    var couleurMsg = "red"; // Longueur faible => couleur rouge
    if (password.length >= 8) {
        longueurMdp = "suffisante";
        couleurMsg = "green"; // Longueur suffisante => couleur verte
    } else if (password.length >= 4) {
        longueurMdp = "moyenne";
        couleurMsg = "orange"; // Longueur moyenne => couleur orange
    } else if (password.length ===0){
        longueurMdp= "";
    }
    if(password===verifiedPassword){
        same.textContent= "MEME MDP ";
    }
    else if(password.length===0){
        same.textContent="";
    }
    else{
        same.textContent="Correct ";
    }
    test.textContent = longueurMdp; // Texte de l'aide
    test.style.color = couleurMsg; // Couleur du texte de l'aide
});
//affichage du formulaire
function showStuff(id){
  document.getElementById(id).style.display="block";
}
function hideStuff(evt,id){
  document.getElementById(id).style.display="none";
  evt.stopPropagation();
}

document.getElementById("formulaire").style.display="none"; //de base le formulaire est caché

$("#faireModif").click(function(){
  document.getElementById("formulaire").style.display="block"});
$("#close").click(function(){
  document.getElementById("formulaire").style.display="none"});

  var imageSwap = function () {

      var $this = $(this);

      var newSource = $this.data('alt-src');

      $this.data('alt-src', $this.attr('src'));

      $this.attr('src', newSource);
  }


  $(function () {
      $('img.alert').hover(imageSwap, imageSwap);
  });

/*pour la date*/
var days = ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];
var today= new Date();
var nomJour= days[today.getDay()]
document.getElementById("jour").textContent=nomJour;

/* pour les excpetions */
