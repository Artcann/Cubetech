
//
//
//     $this.data('alt-src', $this.attr('src'));
//
//     $this.attr('src', newSource);
// }
//
//
// $(function () {
//     $('img.alert').hover(imageSwap, imageSwap);
// });





if (statut === 'Administrateur'){
    $("#button1").attr("href", "adminhome");
    document.getElementById('button2').style.display="none";
}


else if (statut === 'Ressource humaine') {
  $("#button1").attr("href", "Lancerletest");
  $("#button2").attr("href","Modifier");
}

