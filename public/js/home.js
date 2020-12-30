let statut = scriptData.statut;
let boutonText = document.getElementById('button2').innerText;
let agenda = document.getElementById('agenda').innerText;

if (statut === 'Administrateur'){
    document.getElementById('button2').innerText = 'Accèder au back office';
    document.getElementById('agenda').innerText = '';

    $("#button2").attr("href", "adminhome");
}


