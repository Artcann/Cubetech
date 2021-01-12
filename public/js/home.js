var imageSwap = function () {

    var $this = $(this);

    var newSource = $this.data('alt-src');

    $this.data('alt-src', $this.attr('src'));

    $this.attr('src', newSource);
}


$(function () {
    $('img.alert').hover(imageSwap, imageSwap);
});

let boutonText = document.getElementById('button2').innerText;

let agenda = document.getElementById('agenda').innerText;



if (statut === 'Administrateur'){

    document.getElementById('button2').innerText = 'Accèder au back office';

    $("#button2").attr("href", "adminhome");

    document.getElementById('agenda').innerText = '';  
}


else if (statut === 'Ressource humaine') {

	document.getElementById('button2').innerText = 'Démarrer un test';

	$("#button2").attr("href", "lancerLeTest");
}




