var imageSwap = function () {

    var $this = $(this);

    var newSource = $this.data('alt-src');

    $this.data('alt-src', $this.attr('src'));

    $this.attr('src', newSource);

}

$(function () {

    $('img.mail').hover(imageSwap, imageSwap);
    $('img.valider').hover(imageSwap, imageSwap);
    
});


