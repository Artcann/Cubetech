
console.log(statut);

if (statut === 'Administrateur'){
    $("#button1").attr("href", "adminhome");
    document.getElementById('button2').style.display="none";
}


else if (statut === 'Ressource humaine') {
  $("#button1").attr("href", "Lancerletest");
  $("#button2").attr("href","Rhtest");
}

else{
  $("#button1").attr("href", "contact");
  $("#button2").attr("href","result");
}
