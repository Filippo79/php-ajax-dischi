<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- <script src="https://kit.fontawesome.com/73e1c109e3.js" crossorigin="anonymous"></script> -->
        <meta charset="utf-8">
        <link rel="stylesheet" href="dist/css/style.css">
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js" charset="utf-8"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/it-ch.js"></script> -->
        <title>PHP AJAX DISCHI</title>
    </head>
    <body>
        <div class="container-basic">
            <header>
                <img class="logo"src="dist/img/logo.png" alt="">
            </header>
            <main>
                <div class="container-card">
                    <?php
                        //include 'data.php';
                     ?>
                     <?php /*foreach ($albums as $key => $album) {?>
                        <div class="card">
                             <img src=<?php echo $album['poster']?> alt="">
                             <h3><?php echo $album['title']?></h3>
                             <span><?php echo $album['author']?></span>
                             <span><?php echo $album['year']?></span>
                         </div>
                    <?php }*/?>


                </div>

1
            </main>
        </div>
        <!-- <script id="template-card" type="text/x-handlebars-template">
            <div class="card" >
                <img src="{{immagineAlbum}}" alt="{{nomeAlbum}} Cover-Album">
                <h3>{{nomeAlbum}}</h3>
                <span>{{autore}}</span>
                <span>{{anno}}</span>
            </div>
        </script> -->
        <script src="dist/js/main.js" charset="utf-8"></script>
    </body>
</html>
