
/* for butoons on click */
function pageLayout2() {
    location.replace('listDogsPage.html');
}

function pageLayout3() {
    location.replace('AddDogPage.html');
}

function pageIndex() {
    location.replace('index.html');
}

function myDogINFO() {
    location.replace('myDoginfoPage.html');
}

function goBackTOindex() {
    location.replace('index.html');
}

function goBackTOlist() {
    location.replace('listDogsPage.html');
}



/*for galary - page 'myDoginfoPage.html' */
jQuery(document).ready(function($) {
 
    $('#myCarousel').carousel({
            interval: 5000
    });

    $('#carousel-text').html($('#slide-content-0').html());

    //Handles the carousel thumbnails
   $('[id^=carousel-selector-]').click( function(){
        var id = this.id.substr(this.id.lastIndexOf("-") + 1);
        var id = parseInt(id);
        $('#myCarousel').carousel(id);
    });


    // When the carousel slides, auto update the text
    $('#myCarousel').on('slid.bs.carousel', function (e) {
             var id = $('.item.active').data('slide-number');
            $('#carousel-text').html($('#slide-content-'+id).html());
    });
});
/*----------------------------------------------------------------*/

