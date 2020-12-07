function validateForm() {
    var statut = document.getElementById("statut").value;

    if(statut === "") {
        alert("Vous devez choisir un statut");
        return false;
    }
}