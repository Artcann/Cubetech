

if (statut === 'Administrateur'){
    $("#button1").attr("href", "adminhome");
    document.getElementById('button2').style.display="none";
}


else if (statut === 'Ressource humaine') {
  $("#button1").attr("href", "lancerLeTest");
  $("#button2").attr("href","Modifier");
}
else{
  $("#button1").attr("href", "contact");
  $("#button2").attr("href","result");
}
