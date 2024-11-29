<?php 

include ("./connect.php");
include ("./header.php");

// Create Blank Variables to Match From Field Name

$vid_title ="";
$vid_link ="";
$vid_description ="";
$vid_id_url ="";

// Check if the submit  button is pressed

if (isset($POST["upload"])) {
    $vid_title = $_POST ["vid_title"];
    $vid_link = $_POST ["vid_link"];
    $vid_description = $_POST ["vid_description"];
    $vid_id_url = $_POST ["vid_id_url"];
}

// Write the submit query 

$upload_query ="INSERT INTO `uploads_tb`( `vid_title`, `vid_link`, `vid_description`, `vid_id_url`) VALUES ('$vid_title','$vid_link','$vid_description','$vid_id_url')";

// Send to query to database

$send_query = mysqli_query($connect,$upload_query);

// Check if data was submitted successfully

if( $send_query) {
    header("location:index.php");
}

else{
    echo "Connection Error";
}

?>

<body>
    <div class="container">
        <form action="./upload.php" method="POST">
        <div class="row">
            <form class="col s12">
      <div class="row">
        <div class="input-field col l6">
          <label for="vid_title">Vid Title</label><br>
          <input placeholder="" id="vid_title" type="text" class="validate">
        </div>
        <div class="input-field col l6">
          <label for="vid_link">Vid link</label><br>
          <input placeholder="" id="vid_link" type="text" class="validate">
        </div>
      </div>
      <div class="row">
        <div class="input-field col l6">
          <label for="vid_description">Vid Description</label><br>
          <input placeholder="" id="vid_description" type="text" class="validate">
        </div>
        <div class="input-field col l6">
          <label for="vid_id_url">Vid id url</label><br>
          <input placeholder="" id="vid_id_url" type="text" class="validate">
        </div>
        <div class="center">
          <a class="waves-effect waves-light btn-small light-blue"><i class="material-icons left">cloud_upload</i>upload</a>
        </div>
      </div>
    </form>
    </div>
</body>

<?php include "./footer.php"; ?>
