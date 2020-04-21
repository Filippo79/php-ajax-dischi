$(document).ready(function() {
    var source = $('#template-card').html();
    var templateCard = Handlebars.compile(source);




    $.ajax( {
        url: 'server.php',
        method: 'GET',
        success: function(datiAlbums) {
            //console.log(datiAlbums);
            var albums = datiAlbums;
            for (var i = 0; i < albums.length; i++) {
                var albumSingolo = albums[i];
                //console.log(albumSingolo);
                var albumSingoloTemplate = {
                    immagineAlbum: albumSingolo.poster,
                    nomeAlbum: albumSingolo.title,
                    autore: albumSingolo.author,
                    anno: albumSingolo.year
                }
                var album = templateCard(albumSingoloTemplate);
                $('.container-card').append(album);
            }
        },
        error: function(error) {
            alert('Ma dove vuoi andare');
        }
    });


});
