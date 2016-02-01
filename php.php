<?php
define('IMAGEPATH', 'Images/');

foreach (glob(IMAGEPATH.'*') as $filename) {
  $imag[] = basename($filename);
}
$randomPic = rand($imag[0], $imag[8]);

if(isset($_POST['upload'])) {

  if($imag == '') {
    echo "<script>alert('Image not found');</script>";
    exit();
  }
    else {
      if ($randomPic == 'Images/$randomPic') {
        echo "<script>alert('Same pic alert');</script>";
      }
      else {
        echo "<div class='pic'>";
        echo "<img src='Images/$randomPic.jpg'>";
        echo "</div>";
      }
    }
}
function moveBack() {
    echo 'Pic Move Back';
  }
function moveForward() {
    echo 'Pic Move Forward';
  }


if (isset($_GET['moveback'])) {
    moveBack();
  }
if (isset($_GET['moveforward'])) {
    moveForward();
  }

?>
<!DOCTYPE html>
<html>
<head>
  <style>
  div.pic {
    margin: auto;
    text-align: center;
  }
  div.pic img {
    border: 3px solid;
  }
  form {
    margin: auto;
    text-align: center;
  }
  div.forms {
    border: 2px solid;
    position: fixed;;
    bottom: 0;
    right: 0;
    left: 0;
  }
  </style>
</head>
<body>

<div class="forms">

  <form action="php.php" method="POST" enctype="multipart/form-data">

    <a href='php.php?moveback=true'><</a>

  <input type="submit" name="upload" value="Random">

  <a href='php.php?moveforward=true'>></a>
  </form>
</div>

</body>
</html>
