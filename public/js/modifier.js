// Vérification de la longueur du mot de passe saisi
var verifiedPassword = "";
var test = document.getElementById("test");
var same = document.getElementById("same");


document.getElementById("verifiedPassword").addEventListener("input",function (e){
    verifiedPassword=e.target.value;
})

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
