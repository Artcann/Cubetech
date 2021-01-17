


    $this.data('alt-src', $this.attr('src'));

    $this.attr('src', newSource);
}


$(function () {
    $('img.alert').hover(imageSwap, imageSwap);
});





if (statut === 'Administrateur'){

    document.getElementById('button1').innerText = 'Accèder au back office';
    $("#button1").attr("href", "adminhome");
    document.getElementById('button2').style.display="none";

    document.getElementById('agenda').innerText = '';
}


else if (statut === 'Ressource humaine') {

	document.getElementById('button1').innerText = 'Démarrer un test';
  $("#button1").attr("href", "lancerLeTest");
  document.getElementById('button2').innerText= 'Voir mon agenda';
}
