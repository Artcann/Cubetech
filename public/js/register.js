function validateRegister() {
    var statut = document.getElementById("statut").value;
    console.log(statut);
    console.log('itJustWorks');

    if(statut === "") {
        alert("Vous devez choisir un statut");
        return false;
    }
}