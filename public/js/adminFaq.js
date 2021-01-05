let sendModif = function() {
    const titleArea = document.getElementById('title');
    const contentArea = document.getElementById('content');

    $.ajax({
        type: "POST",
        url: "adminfaq/modify",
        data: "title=" + titleArea.value 
        + "&content=" + contentArea.value
        +"&id=" + id,
        success: function (response, statut, xhr) {
            console.log(response);
            console.log(statut);
            console.log(xhr);
        }
    });
}

function getId() {
    let url = window.location.href.split('/');
    return url[url.length-1];
    
}

const id = getId();

$('#valid').click(sendModif);