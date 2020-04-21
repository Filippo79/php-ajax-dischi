$(document).ready(function() {



    $.ajax( {
        url: 'server.php',
        method: 'GET',
        seccess: function(data) {
            console.log(data);
        },
        error: function(error) {
            alert('Ma dove vuoi andare');
        }

    });


});
