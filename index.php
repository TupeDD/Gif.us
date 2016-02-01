<?php
define('IMAGEPATH', 'Images/');

foreach (glob(IMAGEPATH.'*') as $filename) {
  $imag[] = basename($filename);
}



if(isset($_POST['upload'])) {

  if($imag == '') {
    echo "<script>alert('Image not found');</script>";
    exit();
  }
    else {
      if ($randomPic == 'Images/' . $randomPic . '.jpg') {
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
    echo "<img src='Images/$prevPic'>";
  }
function moveForward() {
    echo "<img src='Images/$nextPic'>";
  }


if (isset($_GET['moveback'])) {
    moveBack();
  }
if (isset($_GET['moveforward'])) {
    moveForward();
  }

echo "<div class='pic'>";
echo "<img src='Images/$imag[0]'>";
echo "</div>";

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css"  href="style/style.css">
  </style>
</head>
<body>
  <div class="forms">

  <form action="index.php" method="POST" enctype="multipart/form-data">

    <a href='index.php?moveback=true'><</a>

  <input type="submit" name="upload" value="Random">

  <a href='index.php?moveforward=true'>></a>
  </form>
</div>

</body>
</html>
