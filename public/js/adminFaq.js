let sendModif = function() {
    const titleArea = document.getElementById('title');
    const contentArea = document.getElementById('content');

    $.ajax({
        type: "POST",
        url: pageName + "/modification",
        data: "title=" + titleArea.value 
        + "&content=" + contentArea.value
        +"&id=" + id,
        success: function (response, statut, xhr) {
            window.location.href = "adminfaq";
        }
    });
}

let currentPage = window.location.href;

let pageName = currentPage.split("/")[4];

function getId() {
    let url = window.location.href.split('/');
    return url[url.length-1];
    
}

const id = getId();

$('#valid').click(sendModif);