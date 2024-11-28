<?php

include("./connect.php");

$fetch_query = "SELECT * FROM `uploads_tb`";

$send_query = mysqli_query($connect, $fetch_query);

$uploads = mysqli_fetch_all($send_query,MYSQLI_ASSOC) ;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <style>
        header{
            height: 20vh;
            width: 100vw;
            background-color: lightblue;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <header>

    </header>
    <div class="container">
        <div class="row">
            <?php foreach ($uploads as $video) {?>
            <div class="col l4 s12 m7">
                <div class="card">
                    <div class="card-image">
                        <img src="https://img.youtube.com/vi/<?php echo $video["vid_id_url"] ?>/maxresdefault.jpg" class="responsive-img">
                    </div>
                    <div class="card-content">
                        <span class="card-title"><?php echo $video ["vid_title"] ?></span>
                        </div>
                        <div class="card-action">
                            <a href="<?php echo $video ["vid_link"]?>">play now</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
            <div class="center">
                <a class="waves-effect waves-light btn-small light-blue"><i class="material-icons left">cloud_upload</i>button</a>
            </div>
        </div>
</body>
</html>
