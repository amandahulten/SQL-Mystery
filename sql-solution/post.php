<?php

$message = "";


if (isset($_POST['name'])) {
    $input = strtolower(filter_var($_POST['name'], FILTER_SANITIZE_STRING));

    
    if ($input === "kevin systrom") {
        $message = "CASE SOLVED";
        $img = "evil-kevin.jpg";
    } 
    else {
        $message = "WRONG PERSON";
    }
    if ($input == false) {
        $message = "The input was empty";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="post.css">
</head>
<body>
    <div class="wrapper">
    <div class="static-txt"></div>
    <ul class="dynamic-txts">
      <li><span><?= $message ?></span></li>
    </ul>
  </div>
  <img src="<?= $img ?>" alt="">
</body>
</html>