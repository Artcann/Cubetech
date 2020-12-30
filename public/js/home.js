let statut = scriptData.statut;
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

