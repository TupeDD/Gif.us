<?php
$imagesDir = 'Images/';

$images = glob($imagesDir . '*.{jpg,jpeg,png,gif,mp4,wav}', GLOB_BRACE);

$test = glob($imagesDir . '*.{jpg,jpeg,png,gif,mp4,wav}', GLOB_BRACE);

$randomPic = $images[array_rand($images)];

$name = substr($randomPic, 7, -4);
$name2 = str_replace("-"," ",$name);

if(isset($_POST['upload'])) {

  if($images == '') {
    echo "<script>alert('Image not found');</script>";
    exit();
  }
    else {
      if (strpos($randomPic, '.mp4') == true) {
        echo "<div class='pic'>";
        echo "<a>$name2</a><br>";
        echo "<video autoplay muted loop>";
        echo "<source src='$randomPic' type='video/mp4'>";
        echo "</video>";
        echo "</div>";
      }
      else if(strpos($randomPic, '.wav') == true) {
        echo "<div class='pic'>";
        echo "<a>$name2</a><br>";
        echo "<audio controls autoplay loop>";
        echo "<source src='$randomPic'>";
        echo "</audio>";
        echo "</div>";
      }
      else {
        echo "<div class='pic'>";
        echo "<a>$name2</a><br>";
        echo "<img src='$randomPic'>";
        echo "</div>";
      }
    }
}

if (isset($_GET['moveback'])) {
    $prevPic = prev($images);
    echo "<div class='pic'>";
    echo "<img src='$prevPic'>";
    echo "</div>";
  }
if (isset($_GET['moveforward'])) {
    $nextPic = next($images);
    echo "<div class='pic'>";
    echo "<img src='$nextPic'>";
    echo "</div>";
  }

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

    <a href='index.php?moveback=true'>&larr;</a>

  <input type="submit" name="upload" value="Random">

  <a href='index.php?moveforward=true'>&rarr;</a>
  </form>
</div>

</body>
</html>
