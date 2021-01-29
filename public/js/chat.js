let sendMessages = function(idContact) {
    let message = $('#message').val();
    $('#message').val('');
    $.ajax({
        type: "POST",
        url: "api/chat",
        data : "message=" + message + "&idContact=" + idContact,
        success : function(code, statut, xhr){
            console.log(code);
            console.log(statut);
            console.log(xhr);
        },
        
        error : function(resultat, statut, erreur){
            console.log(JSON.stringify(erreur));
            console.log(statut);
            console.log(JSON.stringify(resultat));
        }
    });
}

let loadMessages = function() {
    setTimeout( function() {
        $.ajax({
            type: "GET",
            url: "index.php?controller=api&action=chat&id=" + idContact + "&lastId=" + lastID,
            success: function (response) {
                for(let i = 0; i < response.length; i++) {
                    let row = response[i];
                    let string = "<p><strong>" + row['prenom'] + "</strong><i> " + row['created_at']
                    + " </i></p><p id='messagep'>" + row['message'] +  "</p></br>";
                    $('#message-container').append(string);
                    messageContainerDiv.scrollTop = messageContainerDiv.scrollHeight;
                }

                if (response.length > 0) {
                    lastID = response[response.length-1]['id'];
                }
                
            },
        
            error : function(resultat, statut, erreur){
                console.log(JSON.stringify(erreur));
                console.log(statut);
                console.log(JSON.stringify(resultat));
            }
        });

        

        loadMessages();

    }, 1000);
}

function getId() {
    let url = window.location.href.split('/');
    return url[url.length-1];
    
}

let idContact = getId();
let lastID = 0;
let messageContainerDiv = document.getElementById('message-container');

$('#valid').click(function(event) {
    sendMessages(idContact);
});

$('#message').keypress(function(event) {
    if(event.keyCode == '13') {
        event.preventDefault();
        sendMessages(idContact);
    }
});

loadMessages();