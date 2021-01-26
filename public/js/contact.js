function Verifmessage() {
    var str = document.forms['contact'].message.value;
    var contenu = document.forms['contact'].type.value;
    if( !str.replace(/\s+/, '').length ) {
        alert( "Vous ne pouvez envoyer un message sans contenu" );
        return false;
    }
    if( !contenu.replace(/\s+/, '').length ) {
        alert( "Veuillez remplir un objet pour votre message" );
        return false;
    }
    else return true
}